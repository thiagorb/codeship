<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines;

class ConfigTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Config';

	protected $propertiesParameters = [
		'type' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
			'defaultValue' => null,
			'nullable' => false,
			'encodedName' => 'type',
		],
		'position' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'position',
		],
		'awsAccessKeyId' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'aws_access_key_id',
		],
		'awsSecretAccessKey' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'aws_secret_access_key',
		],
		'region' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'region',
		],
		'applicationName' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'application_name',
		],
		'environmentName' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'environment_name',
		],
		's3Bucket' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 's3_bucket',
		],
		'localPath' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'local_path',
		],
		'acl' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'acl',
		],
		'deploymentGroupName' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'deployment_group_name',
		],
		'deploymentConfigName' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'deployment_config_name',
		],
		'path' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'path',
		],
		'url' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'url',
		],
		'refreshToken' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'refresh_token',
		],
		'name' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'name',
		],
		'apiKey' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'api_key',
		],
		'restoreFrom' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'restore_from',
		],
		'postDeploy' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'post_deploy',
		],
		'backup' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'backup',
		],
		'force' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'force',
		],
		'checkUrl' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'check_url',
		],
		'commands' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [
				[
					'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
					'arguments' => [
						['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer'],
					],
				],
			],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'commands',
		],
	];
}
