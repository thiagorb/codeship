<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\Builds;

class BuildsListTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Responses\Organizations\Projects\Builds\BuildsList';

	protected $propertiesParameters = [
		'builds' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [
				[
					'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
					'arguments' => [
						[
							'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\BuildTransformer',
						],
					],
				],
			],
			'nullable' => true,
			'encodedName' => 'builds',
		],
	];
}
