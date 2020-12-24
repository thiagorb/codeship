<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations;

class OrganizationTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Responses\Organizations\Organization';

	protected $propertiesParameters = [
		'uuid' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'uuid',
		],
		'name' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'name',
		],
		'scope' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [
				[
					'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
					'arguments' => [
						['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer'],
					],
				],
			],
			'nullable' => true,
			'encodedName' => 'scope',
		],
	];
}
