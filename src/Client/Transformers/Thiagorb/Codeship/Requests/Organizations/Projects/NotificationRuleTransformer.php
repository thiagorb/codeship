<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Requests\Organizations\Projects;

class NotificationRuleTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRule';

	protected $propertiesParameters = [
		'notifier' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'notifier',
		],
		'target' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'target',
		],
		'branch' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'branch',
		],
		'options' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [
				[
					'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
					'arguments' => [
						[
							'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRuleOptionTransformer',
						],
					],
				],
			],
			'nullable' => true,
			'encodedName' => 'options',
		],
		'buildStatuses' => [
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
			'encodedName' => 'build_statuses',
		],
		'branchMatch' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
			'arguments' => [['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer']],
			'nullable' => true,
			'encodedName' => 'branch_match',
		],
	];
}
