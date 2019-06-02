<?php

namespace Thiagorb\Codeship\Client\Implementations\Organizations\Projects\DeployPipelines;

use Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Config;
use Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Read;
use Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Update;

class DeployPipeline extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Organizations\Projects\DeployPipelines\DeployPipeline
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
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\ReadTransformer',
				],
			],
			'update' => [
				'relative_path' => '',
				'http_method' => 'put',
				'parameters' => [
					'branch' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
					],
					'matchMode' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
					],
					'config' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\ConfigTransformer',
							],
						],
					],
				],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\UpdateTransformer',
				],
			],
		],
	];


	public function read(): Read
	{
		return $this->processMessage('read', []);
	}


	/**
	 * @param string $branch
	 * @param string $matchMode
	 * @param Config[] $config
	 *
	 * @return Update
	 */
	public function update(string $branch, string $matchMode, array $config): Update
	{
		return $this->processMessage('update', [
		    'branch' => $branch,
		    'matchMode' => $matchMode,
		    'config' => $config,
		]);
	}
}
