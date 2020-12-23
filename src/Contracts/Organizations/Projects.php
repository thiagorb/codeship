<?php

namespace Thiagorb\Codeship\Contracts\Organizations;

use Thiagorb\Codeship\Contracts\Organizations\Projects\Project;
use Thiagorb\Codeship\Requests\Organizations\Projects\TestPipeline;
use Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRule;
use Thiagorb\Codeship\Requests\Organizations\Projects\EnvironmentVariable;
use Thiagorb\Codeship\Requests\Organizations\Projects\DeployPipeline;
use Thiagorb\Codeship\Responses\Organizations\Projects\ProjectsList;
use Thiagorb\Codeship\Responses\Organizations\Projects\Create;

interface Projects
{
    public function read(?int $perPage = null, ?int $page = null, ?string $name = null, ?string $type = null): ProjectsList;

    public function find(string $uuid): Project;

	/**
	 * @param string $repositoryUrl
	 * @param string $type
	 * @param string[]|null $setupCommands
	 * @param TestPipeline[]|null $testPipelines
	 * @param int[]|null $teamIds
	 * @param NotificationRule[]|null $notificationRules
	 * @param EnvironmentVariable[]|null $environmentVariables
	 * @param DeployPipeline[]|null $deployPipelines
	 * @param ?bool $buildOnPrOnly
	 * @param ?string $branchMatch
	 * @param string[]|null $branches
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
    ): Create;
}
