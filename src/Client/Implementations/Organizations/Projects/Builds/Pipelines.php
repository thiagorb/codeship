<?php

namespace Thiagorb\Codeship\Client\Implementations\Organizations\Projects\Builds;

use Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines\PipelinesList;

class Pipelines extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Organizations\Projects\Builds\Pipelines
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
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines\PipelinesListTransformer',
				],
			],
		],
	];


	public function read(): PipelinesList
	{
		return $this->processMessage('read', []);
	}
}
