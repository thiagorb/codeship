<?php

namespace Thiagorb\Codeship\Client\Implementations\Organizations\Projects\Builds;

use Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\StepsList;

class Steps extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Organizations\Projects\Builds\Steps
{
	/**
	 * @var array
	 */
	protected $meta = [
		'methods' => [
			'read' => [
				'relative_path' => '',
				'http_method' => 'get',
				'parameters' => [],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\StepsListTransformer',
				],
			],
		],
	];


	public function read(): StepsList
	{
		return $this->processMessage('read', []);
	}
}
