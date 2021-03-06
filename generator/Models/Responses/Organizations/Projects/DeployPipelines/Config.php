<?php

return [
    'position' => ['type' => '?int', 'defaultValue' => null],
    'type' => ['type' => 'string', 'defaultValue' => null],
    'awsAccessKeyId' => ['type' => '?string', 'defaultValue' => null],
    'awsSecretAccessKey' => ['type' => '?string', 'defaultValue' => null],
    'region' => ['type' => '?string', 'defaultValue' => null],
    'applicationName' => ['type' => '?string', 'defaultValue' => null],
    'environmentName' => ['type' => '?string', 'defaultValue' => null],
    's3Bucket' => ['type' => '?string', 'defaultValue' => null],
    'localPath' => ['type' => '?string', 'defaultValue' => null],
    'acl' => ['type' => '?string', 'defaultValue' => null],
    'deploymentGroupName' => ['type' => '?string', 'defaultValue' => null],
    'deploymentConfigName' => ['type' => '?string', 'defaultValue' => null],
    'path' => ['type' => '?string', 'defaultValue' => null],
    'url' => ['type' => '?string', 'defaultValue' => null],
    'refreshToken' => ['type' => '?string', 'defaultValue' => null],
    'name' => ['type' => '?string', 'defaultValue' => null],
    'apiKey' => ['type' => '?string', 'defaultValue' => null],
    'restoreFrom' => ['type' => '?string', 'defaultValue' => null],
    'postDeploy' => ['type' => '?string', 'defaultValue' => null],
    'backup' => ['type' => '?string', 'defaultValue' => null],
    'force' => ['type' => '?string', 'defaultValue' => null],
    'checkUrl' => ['type' => '?string', 'defaultValue' => null],
    'commands' => ['type' => 'string[]|null', 'defaultValue' => null],
];