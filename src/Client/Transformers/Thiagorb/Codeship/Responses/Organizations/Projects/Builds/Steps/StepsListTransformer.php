<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps;

class StepsListTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\StepsList';

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
		'steps' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [
				[
					'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
					'arguments' => [
						[
							'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\StepTransformer',
						],
					],
				],
			],
			'nullable' => true,
			'encodedName' => 'steps',
		],
	];
}
