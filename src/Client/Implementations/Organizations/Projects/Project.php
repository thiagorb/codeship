<?php

namespace Thiagorb\Codeship\Client\Implementations\Organizations\Projects;

use Thiagorb\Codeship\Contracts\Organizations\Projects\Builds;
use Thiagorb\Codeship\Contracts\Organizations\Projects\DeployPipelines;
use Thiagorb\Codeship\Contracts\Organizations\Projects\TestPipelines;
use Thiagorb\Codeship\Requests\Organizations\Projects\EnvironmentVariable;
use Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRule;
use Thiagorb\Codeship\Responses\Organizations\Projects\Read;
use Thiagorb\Codeship\Responses\Organizations\Projects\ResetAesKey;
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
						'encodedName' => 'type',
					],
					'setupCommands' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
								'arguments' => [
									['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer'],
								],
							],
						],
						'encodedName' => 'setup_commands',
					],
					'teamIds' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
								'arguments' => [
									['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer'],
								],
							],
						],
						'encodedName' => 'team_ids',
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
						'encodedName' => 'notification_rules',
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
						'encodedName' => 'environment_variables',
					],
					'buildOnPrOnly' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer'],
						],
						'encodedName' => 'build_on_pr_only',
					],
					'branches' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
								'arguments' => [
									['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer'],
								],
							],
						],
						'encodedName' => 'branches',
					],
					'branchMatch' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							['transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer'],
						],
						'encodedName' => 'branch_match',
					],
				],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\UpdateTransformer',
				],
			],
			'resetAesKey' => [
				'relative_path' => 'reset_aes_key',
				'http_method' => 'post',
				'parameters' => [],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\ResetAesKeyTransformer',
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
	 * @param string[]|null $setupCommands
	 * @param int[]|null $teamIds
	 * @param NotificationRule[]|null $notificationRules
	 * @param EnvironmentVariable[]|null $environmentVariables
	 * @param ?bool $buildOnPrOnly
	 * @param string[]|null $branches
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


	public function builds(): Builds
	{
		return $this->createSubcontract('builds', 'Thiagorb\\Codeship\\Contracts\\Organizations\\Projects\\Builds');
	}


	public function resetAesKey(): ResetAesKey
	{
		return $this->processMessage('resetAesKey', []);
	}
}
