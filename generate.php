<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use Thiagorb\ServiceGenerator\Generator;
use Thiagorb\Codeship\Generator\HttpClient;
use Thiagorb\ServiceGenerator\Configuration\Service as ServiceConfiguration;
use Thiagorb\Codeship\Contracts\Codeship;

$generator = new Generator();
$generator->generate(
    [
        new ServiceConfiguration(
            Codeship::class,
            HttpClient::class,
            __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Client',
            'Thiagorb\\Codeship\\Client'
        )
    ]
);