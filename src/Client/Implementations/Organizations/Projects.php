<?php

namespace Thiagorb\Codeship\Client\Implementations\Organizations;

use Thiagorb\Codeship\Contracts\Organizations\Projects\Project;
use Thiagorb\Codeship\Requests\Organizations\Projects\DeployPipeline;
use Thiagorb\Codeship\Requests\Organizations\Projects\EnvironmentVariable;
use Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRule;
use Thiagorb\Codeship\Requests\Organizations\Projects\TestPipeline;
use Thiagorb\Codeship\Responses\Organizations\Projects\Create;
use Thiagorb\Codeship\Responses\Organizations\Projects\ProjectsList;

class Projects extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Organizations\Projects
{
	/**
	 * @var array
	 */
	protected $meta = [
		'methods' => [
			'read' => [
				'relative_path' => '',
				'http_method' => 'get',
				'parameters' => [
					'perPage' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
							],
						],
					],
					'page' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
							],
						],
					],
					'name' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
							],
						],
					],
					'type' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
							],
						],
					],
				],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\ProjectsListTransformer',
				],
			],
			'create' => [
				'relative_path' => '',
				'http_method' => 'post',
				'parameters' => [
					'repositoryUrl' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
					],
					'type' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
					],
					'setupCommands' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
								'arguments' => [
									[
										'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
									],
								],
							],
						],
					],
					'testPipelines' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
								'arguments' => [
									[
										'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Requests\Organizations\Projects\TestPipelineTransformer',
									],
								],
							],
						],
					],
					'teamIds' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
								'arguments' => [
									[
										'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
									],
								],
							],
						],
					],
					'notificationRules' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
								'arguments' => [
									[
										'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRuleTransformer',
									],
								],
							],
						],
					],
					'environmentVariables' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
								'arguments' => [
									[
										'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Requests\Organizations\Projects\EnvironmentVariableTransformer',
									],
								],
							],
						],
					],
					'deployPipelines' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
								'arguments' => [
									[
										'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Requests\Organizations\Projects\DeployPipelineTransformer',
									],
								],
							],
						],
					],
					'buildOnPrOnly' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
							],
						],
					],
					'branchMatch' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
							],
						],
					],
					'branches' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
								'arguments' => [
									[
										'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
									],
								],
							],
						],
					],
				],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\CreateTransformer',
				],
			],
		],
	];


	public function read(?int $perPage = null, ?int $page = null, ?string $name = null, ?string $type = null): ProjectsList
	{
		return $this->processMessage('read', [
		    'perPage' => $perPage,
		    'page' => $page,
		    'name' => $name,
		    'type' => $type,
		]);
	}


	public function find(string $uuid): Project
	{
		return $this->createSubcontract($uuid, 'Thiagorb\\Codeship\\Contracts\\Organizations\\Projects\\Project');
	}


	/**
	 * @param string $repositoryUrl
	 * @param string $type
	 * @param ?string[] $setupCommands
	 * @param ?TestPipeline[] $testPipelines
	 * @param ?int[] $teamIds
	 * @param ?NotificationRule[] $notificationRules
	 * @param ?EnvironmentVariable[] $environmentVariables
	 * @param ?DeployPipeline[] $deployPipelines
	 * @param ?bool $buildOnPrOnly
	 * @param ?string $branchMatch
	 * @param ?string[] $branches
	 *
	 * @return Create
	 */
	public function create(
		string $repositoryUrl,
		string $type,
		?array $setupCommands = null,
		?array $testPipelines = null,
		?array $teamIds = null,
		?array $notificationRules = null,
		?array $environmentVariables = null,
		?array $deployPipelines = null,
		?bool $buildOnPrOnly = null,
		?string $branchMatch = null,
		?array $branches = null
	): Create {
		return $this->processMessage('create', [
		    'repositoryUrl' => $repositoryUrl,
		    'type' => $type,
		    'setupCommands' => $setupCommands,
		    'testPipelines' => $testPipelines,
		    'teamIds' => $teamIds,
		    'notificationRules' => $notificationRules,
		    'environmentVariables' => $environmentVariables,
		    'deployPipelines' => $deployPipelines,
		    'buildOnPrOnly' => $buildOnPrOnly,
		    'branchMatch' => $branchMatch,
		    'branches' => $branches,
		]);
	}
}
