<?php

namespace Thiagorb\Codeship\Contracts\Organizations\Projects;

use Thiagorb\Codeship\Contracts\Organizations\Projects\TestPipelines;
use Thiagorb\Codeship\Contracts\Organizations\Projects\DeployPipelines;
use Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRule;
use Thiagorb\Codeship\Requests\Organizations\Projects\EnvironmentVariable;
use Thiagorb\Codeship\Responses\Organizations\Projects\Read;
use Thiagorb\Codeship\Responses\Organizations\Projects\Update;
use Thiagorb\Codeship\Responses\Organizations\Projects\ResetAesKey;

interface Project
{
    public function read(): Read;

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
    ): Update;

    public function testPipelines(): TestPipelines;

    public function deployPipelines(): DeployPipelines;

    public function builds(): Builds;

    public function resetAesKey(): ResetAesKey;
}
