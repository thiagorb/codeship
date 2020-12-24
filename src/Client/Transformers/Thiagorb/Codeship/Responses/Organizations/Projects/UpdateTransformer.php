<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects;

class UpdateTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Responses\Organizations\Projects\Update';

	protected $propertiesParameters = [
		'project' => [
			'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\ProjectTransformer',
			'nullable' => false,
			'encodedName' => 'project',
		],
	];
}
