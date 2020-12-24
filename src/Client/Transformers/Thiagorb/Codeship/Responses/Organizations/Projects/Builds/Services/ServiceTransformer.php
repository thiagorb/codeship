<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Services;

class ServiceTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Services\Service';

	protected $propertiesParameters = [
		'uuid' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'uuid',
		],
		'buildUuid' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'build_uuid',
		],
		'name' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'name',
		],
		'status' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'status',
		],
		'updatedAt' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'updated_at',
		],
		'pullingAt' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'pulling_at',
		],
		'buildingAt' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'building_at',
		],
		'finishedAt' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'finished_at',
		],
	];
}
