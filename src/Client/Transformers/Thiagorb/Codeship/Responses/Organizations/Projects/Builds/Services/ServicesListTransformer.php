<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Services;

class ServicesListTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Services\ServicesList';

	protected $propertiesParameters = [
		'total' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
			'nullable' => false,
			'encodedName' => 'total',
		],
		'perPage' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
			'nullable' => false,
			'encodedName' => 'per_page',
		],
		'page' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
			'nullable' => false,
			'encodedName' => 'page',
		],
		'services' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [
				[
					'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
					'arguments' => [
						[
							'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Services\ServiceTransformer',
						],
					],
				],
			],
			'nullable' => true,
			'encodedName' => 'services',
		],
	];
}
