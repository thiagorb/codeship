<?php

namespace Thiagorb\Codeship\Generator;

use Thiagorb\ServiceGenerator\Generator;
use Thiagorb\Codeship\Generator\HttpClient;
use Thiagorb\ServiceGenerator\Configuration\Service as ServiceConfiguration;
use Thiagorb\Codeship\Contracts\Codeship;

class ConfigurationProvider
{
    public function getServiceConfigurations()
    {
        $modelsGenerator = new \Thiagorb\ServiceGenerator\Targets\Models\Generator(__DIR__ . DIRECTORY_SEPARATOR . 'Models');
        $srcPath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src';

        yield new \Thiagorb\ServiceGenerator\Configuration\Service(
            Codeship::class,
            $modelsGenerator,
            $srcPath,
            'Thiagorb\\Codeship'
        );

        yield new ServiceConfiguration(
            Codeship::class,
            new HttpClient,
            $srcPath . DIRECTORY_SEPARATOR . 'Client',
            'Thiagorb\\Codeship\\Client'
        );
    }
}