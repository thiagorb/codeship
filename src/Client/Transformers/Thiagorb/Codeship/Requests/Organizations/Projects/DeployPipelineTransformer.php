<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Requests\Organizations\Projects;

class DeployPipelineTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Requests\Organizations\Projects\DeployPipeline';

	protected $propertiesParameters = [
		'branch' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
			'nullable' => false,
			'encodedName' => 'branch',
		],
		'matchMode' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
			'nullable' => false,
			'encodedName' => 'match_mode',
		],
		'config' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
			'arguments' => [
				[
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Requests\Organizations\Projects\DeployPipelines\ConfigTransformer',
				],
			],
			'nullable' => false,
			'encodedName' => 'config',
		],
	];
}
