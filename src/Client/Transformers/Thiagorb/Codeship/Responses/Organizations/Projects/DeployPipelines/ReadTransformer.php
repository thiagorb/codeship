<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines;

class ReadTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Read';

	protected $propertiesParameters = [
		'deployPipeline' => [
			'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\DeployPipelineTransformer',
			'nullable' => false,
			'encodedName' => 'deploy_pipeline',
		],
	];
}
