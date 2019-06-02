<?php

namespace Thiagorb\Codeship\Generator;

use Thiagorb\ServiceGenerator\Targets\HttpClient\Generator;
use Thiagorb\ServiceGenerator\Configuration\Service as ServiceConfiguration;
use Thiagorb\ServiceGenerator\TypeResolver;
use Thiagorb\ServiceGenerator\Targets\HttpClient\Factory as DefaultFactory;

class HttpClient extends Generator
{
    protected function makeFactory(ServiceConfiguration $serviceConfiguration, TypeResolver $typeResolver): DefaultFactory
    {
        return new Factory($serviceConfiguration, $typeResolver);
    }

    public function generate(ServiceConfiguration $serviceConfiguration, TypeResolver $typeResolver): \Traversable
    {
        yield from (new Models)->generate();

        yield from parent::generate($serviceConfiguration, $typeResolver);
    }
}
