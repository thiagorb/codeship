<?php

namespace Thiagorb\Codeship\Client\Implementations\Organizations\Projects;

use Thiagorb\Codeship\Contracts\Organizations\Projects\DeployPipelines;
use Thiagorb\Codeship\Contracts\Organizations\Projects\TestPipelines;
use Thiagorb\Codeship\Requests\Organizations\Projects\EnvironmentVariable;
use Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRule;
use Thiagorb\Codeship\Responses\Organizations\Projects\Read;
use Thiagorb\Codeship\Responses\Organizations\Projects\Update;

class Project extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Organizations\Projects\Project
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
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\ReadTransformer',
				],
			],
			'update' => [
				'relative_path' => '',
				'http_method' => 'put',
				'parameters' => [
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
					'buildOnPrOnly' => [
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
					'branchMatch' => [
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
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\UpdateTransformer',
				],
			],
		],
	];


	public function read(): Read
	{
		return $this->processMessage('read', []);
	}


	/**
	 * @param string $type
	 * @param ?string[] $setupCommands
	 * @param ?int[] $teamIds
	 * @param ?NotificationRule[] $notificationRules
	 * @param ?EnvironmentVariable[] $environmentVariables
	 * @param ?bool $buildOnPrOnly
	 * @param ?string[] $branches
	 * @param ?string $branchMatch
	 */
	public function update(
		string $type,
		?array $setupCommands = null,
		?array $teamIds = null,
		?array $notificationRules = null,
		?array $environmentVariables = null,
		?bool $buildOnPrOnly = null,
		?array $branches = null,
		?string $branchMatch = null
	): Update {
		return $this->processMessage('update', [
		    'type' => $type,
		    'setupCommands' => $setupCommands,
		    'teamIds' => $teamIds,
		    'notificationRules' => $notificationRules,
		    'environmentVariables' => $environmentVariables,
		    'buildOnPrOnly' => $buildOnPrOnly,
		    'branches' => $branches,
		    'branchMatch' => $branchMatch,
		]);
	}


	public function testPipelines(): TestPipelines
	{
		return $this->createSubcontract('test_pipelines', 'Thiagorb\\Codeship\\Contracts\\Organizations\\Projects\\TestPipelines');
	}


	public function deployPipelines(): DeployPipelines
	{
		return $this->createSubcontract('deploy_pipelines', 'Thiagorb\\Codeship\\Contracts\\Organizations\\Projects\\DeployPipelines');
	}
}
