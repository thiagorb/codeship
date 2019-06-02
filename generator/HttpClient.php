<?php

namespace Codeship\Generator;

use ServiceGenerator\Targets\HttpClient\Generator;
use ServiceGenerator\Configuration\Service as ServiceConfiguration;
use ServiceGenerator\TypeResolver;
use ServiceGenerator\Targets\HttpClient\Factory as DefaultFactory;

class HttpClient extends Generator
{
    protected function makeFactory(ServiceConfiguration $serviceConfiguration, TypeResolver $typeResolver): DefaultFactory
    {
        return new Factory($serviceConfiguration, $typeResolver);
    }

    public function generate(\ServiceGenerator\Configuration\Service $serviceConfiguration, \ServiceGenerator\TypeResolver $typeResolver): \Traversable
    {
        yield from (new Models)->generate();

        yield from parent::generate($serviceConfiguration, $typeResolver);
    }
}
