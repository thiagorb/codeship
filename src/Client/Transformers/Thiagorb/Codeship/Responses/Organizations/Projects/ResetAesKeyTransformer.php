<?php

namespace Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects;

class ResetAesKeyTransformer extends \Thiagorb\ServiceGeneratorRuntime\Transformers\ImmutableObjectTransformer
{
	protected $objectClass = 'Thiagorb\Codeship\Responses\Organizations\Projects\ResetAesKey';

	protected $propertiesParameters = [
		'aesKey' => [
			'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
			'nullable' => false,
			'encodedName' => 'aes_key',
		],
	];
}
