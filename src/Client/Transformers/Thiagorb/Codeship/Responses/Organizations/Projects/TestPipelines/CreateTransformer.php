<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines;

class CreateTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\Create';

	protected $propertiesParameters = [
		'testPipeline' => [
			'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\TestPipelineTransformer',
			'nullable' => false,
			'encodedName' => 'test_pipeline',
		],
	];
}
