<?php

namespace Thiagorb\Codeship\Client\Implementations\Organizations\Projects\Builds;

use Thiagorb\Codeship\Contracts\Organizations\Projects\Builds\Pipelines;
use Thiagorb\Codeship\Contracts\Organizations\Projects\Builds\Services;
use Thiagorb\Codeship\Contracts\Organizations\Projects\Builds\Steps;
use Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Read;

class Build extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Organizations\Projects\Builds\Build
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
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\ReadTransformer',
				],
			],
			'stop' => [
				'relative_path' => 'stop',
				'http_method' => 'post',
				'parameters' => [],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
					'arguments' => [
						[
							'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
						],
					],
				],
			],
			'restart' => [
				'relative_path' => 'restart',
				'http_method' => 'post',
				'parameters' => [],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
					'arguments' => [
						[
							'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
						],
					],
				],
			],
		],
	];


	public function read(): Read
	{
		return $this->processMessage('read', []);
	}


	public function pipelines(): Pipelines
	{
		return $this->createSubcontract('pipelines', 'Thiagorb\\Codeship\\Contracts\\Organizations\\Projects\\Builds\\Pipelines');
	}


	/**
	 * @return void
	 */
	public function stop()
	{
		$this->processMessage('stop', []);
	}


	/**
	 * @return void
	 */
	public function restart()
	{
		$this->processMessage('restart', []);
	}


	public function services(): Services
	{
		return $this->createSubcontract('services', 'Thiagorb\\Codeship\\Contracts\\Organizations\\Projects\\Builds\\Services');
	}


	public function steps(): Steps
	{
		return $this->createSubcontract('steps', 'Thiagorb\\Codeship\\Contracts\\Organizations\\Projects\\Builds\\Steps');
	}
}
