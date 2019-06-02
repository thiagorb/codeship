<?php

namespace Thiagorb\Codeship\Generator;

use Nette\PhpGenerator\ClassType;
use Thiagorb\ServiceGenerator\Definitions\File;
use Nette\PhpGenerator\PhpFile;

class Models
{
    /**
     * @var string
     */
    protected $basePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src';

    /**
     * @var string[]
     */
    protected $baseNamespace = ['Thiagorb', 'Codeship'];

    public function generate(): \Traversable
    {
        foreach ($this->getModelsGenerator() as $model) {
            $file = new PhpFile;
            $namespace = $file->addNamespace(implode('\\', array_merge($this->baseNamespace, $model['relative_namespace'] ?? [])));
            $class = $namespace->addClass($model['name']);
            $constructor = $class->addMethod('__construct');
            $constructorBody = [];
            $constructorDocBlock = [];
            foreach ($model['properties'] as $propertyName => $propertyData) {
                $property = $class
                    ->addProperty($propertyName)
                    ->setVisibility(ClassType::VISIBILITY_PROTECTED)
                    ->setComment(sprintf('@var %s', $propertyData['type']));

                $getter = $class->addMethod('get' . ucfirst($propertyName))
                    ->setVisibility(ClassType::VISIBILITY_PUBLIC)
                    ->setReturnType($this->getTypeHint($propertyData))
                    ->setBody(sprintf('return $this->%s;', $propertyName));

                $with = $class->addMethod('with' . ucfirst($propertyName))
                    ->setVisibility(ClassType::VISIBILITY_PUBLIC)
                    ->setReturnType('self')
                    ->setComment(sprintf('@param %s $%s', $propertyData['type'], $propertyName))
                    ->setBody(
                        "\$clone = clone(\$this);\n\$clone->$propertyName = \$$propertyName;\nreturn \$clone;"
                    );
                $withParam = $with
                    ->addParameter($propertyName)
                    ->setTypeHint($this->getTypeHint($propertyData));

                if ($this->isNullable($propertyData)) {
                    $getter->setReturnNullable(true);
                    $withParam->setNullable(true);
                } else {
                    $constructorParam = $constructor
                        ->addParameter($propertyName)
                        ->setTypeHint($this->getTypeHint($propertyData));

                    if (array_key_exists('defaultValue', $propertyData)) {
                        $constructorParam->setDefaultValue($propertyData['defaultValue']);
                    }

                    $constructorDocBlock[] = sprintf('@param %s $%s', $propertyData['type'], $propertyName);
                    $constructorBody[] = sprintf('$this->%s = $%s;', $propertyName, $propertyName);
                }

                $getter->setComment('@return ' . $propertyData['type']);
            }

            foreach ($model['properties'] as $propertyName => $propertyData) {
                if ($this->isNullable($propertyData)) {
                    $constructorParam = $constructor
                        ->addParameter($propertyName)
                        ->setTypeHint($this->getTypeHint($propertyData))
                        ->setNullable(true);

                    if (array_key_exists('defaultValue', $propertyData)) {
                        $constructorParam->setDefaultValue($propertyData['defaultValue']);
                    }

                    $constructorDocBlock[] = sprintf('@param %s $%s', $propertyData['type'], $propertyName);
                    $constructorBody[] = sprintf('$this->%s = $%s;', $propertyName, $propertyName);
                }
            }

            $constructor->setComment(implode(PHP_EOL, $constructorDocBlock));
            $constructor->setBody(implode(PHP_EOL, $constructorBody));
            yield new File($this->getPath($model), $file->__toString());
        }
    }

    protected function getModelsGenerator(array $relativePath = [], \RecursiveDirectoryIterator $it = null)
    {
        if (is_null($it)) {
            $it = new \RecursiveDirectoryIterator(
                __DIR__ . '/Models',
                \FilesystemIterator::SKIP_DOTS
            );
        }

        /** @var \SplFileInfo $file */
        foreach ($it as $file) {
            if ($file->isDir()) {
                yield from $this->getModelsGenerator(array_merge($relativePath, [$file->getFilename()]), $it->getChildren());
            } else {
                yield [
                    'relative_namespace' => $relativePath,
                    'name' => $file->getBasename('.php'),
                    'properties' => include($file->getPathname()),
                ];
            }
        }
    }

    protected function isNullable(array $propertyData): bool
    {
        return preg_match('/^\?/', $propertyData['type']) === 1;
    }

    protected function getTypeHint(array $propertyData): string
    {
        if (preg_match('/\[\]$/', $propertyData['type']) === 1) {
            return 'array';
        }

        return preg_replace('/^\?/', '', $propertyData['type']);
    }

    protected function getPath(array $model): string
    {
        return implode(
            DIRECTORY_SEPARATOR,
            array_merge(
                [$this->basePath],
                $model['relative_namespace'] ?? [],
                [$model['name'] . '.php']
            )
        );
    }
}
