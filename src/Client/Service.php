<?php

namespace Thiagorb\Codeship\Client;

class Service extends \Thiagorb\ServiceGeneratorRuntime\ServiceContext
{
	public $meta = [
		'contracts' => [
			'Thiagorb\Codeship\Contracts\Codeship' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Codeship',
			],
			'Thiagorb\Codeship\Contracts\AccountOrganizations' => [
				'implementation' => 'Thiagorb\Codeship\Services\Organizations',
			],
			'Thiagorb\Codeship\Contracts\Organizations' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations',
			],
			'Thiagorb\Codeship\Contracts\Organizations\Organization' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations\Organization',
			],
			'Thiagorb\Codeship\Contracts\Organizations\Projects' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations\Projects',
			],
			'Thiagorb\Codeship\Contracts\Organizations\Projects\Project' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations\Projects\Project',
			],
			'Thiagorb\Codeship\Contracts\Organizations\Projects\TestPipelines' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations\Projects\TestPipelines',
			],
			'Thiagorb\Codeship\Contracts\Organizations\Projects\DeployPipelines' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations\Projects\DeployPipelines',
			],
			'Thiagorb\Codeship\Contracts\Organizations\Projects\Builds' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations\Projects\Builds',
			],
			'Thiagorb\Codeship\Contracts\Organizations\Projects\TestPipelines\TestPipeline' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations\Projects\TestPipelines\TestPipeline',
			],
			'Thiagorb\Codeship\Contracts\Organizations\Projects\DeployPipelines\DeployPipeline' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations\Projects\DeployPipelines\DeployPipeline',
			],
			'Thiagorb\Codeship\Contracts\Organizations\Projects\Builds\Build' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations\Projects\Builds\Build',
			],
			'Thiagorb\Codeship\Contracts\Organizations\Projects\Builds\Pipelines' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations\Projects\Builds\Pipelines',
			],
			'Thiagorb\Codeship\Contracts\Organizations\Projects\Builds\Services' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations\Projects\Builds\Services',
			],
			'Thiagorb\Codeship\Contracts\Organizations\Projects\Builds\Steps' => [
				'implementation' => 'Thiagorb\Codeship\Client\Implementations\Organizations\Projects\Builds\Steps',
			],
		],
	];
}
