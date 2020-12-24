<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Requests\Organizations\Projects;

class TestPipelineTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Requests\Organizations\Projects\TestPipeline';

	protected $propertiesParameters = [
		'name' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'defaultValue' => null,
			'nullable' => true,
			'encodedName' => 'name',
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
