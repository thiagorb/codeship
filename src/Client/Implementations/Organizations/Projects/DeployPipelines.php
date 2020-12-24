<?php

namespace Thiagorb\Codeship\Client\Implementations\Organizations\Projects;

use Thiagorb\Codeship\Contracts\Organizations\Projects\DeployPipelines\DeployPipeline;
use Thiagorb\Codeship\Requests\Organizations\Projects\DeployPipelines\Config;
use Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Create;

class DeployPipelines extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Organizations\Projects\DeployPipelines
{
	/**
	 * @var array
	 */
	protected $meta = [
		'methods' => [
			'create' => [
				'relative_path' => '',
				'http_method' => 'post',
				'parameters' => [
					'branch' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
						'encodedName' => 'branch',
					],
					'matchMode' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
						'encodedName' => 'match_mode',
					],
					'config' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Requests\Organizations\Projects\DeployPipelines\ConfigTransformer',
							],
						],
						'encodedName' => 'config',
					],
				],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\CreateTransformer',
				],
			],
		],
	];


	/**
	 * @param string $branch
	 * @param string $matchMode
	 * @param Config[] $config
	 *
	 * @return Create
	 */
	public function create(string $branch, string $matchMode, array $config): Create
	{
		return $this->processMessage('create', [
		    'branch' => $branch,
		    'matchMode' => $matchMode,
		    'config' => $config,
		]);
	}


	public function find(int $id): DeployPipeline
	{
		return $this->createSubcontract($id, 'Thiagorb\\Codeship\\Contracts\\Organizations\\Projects\\DeployPipelines\\DeployPipeline');
	}
}
