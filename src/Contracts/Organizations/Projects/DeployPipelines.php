<?php

namespace Codeship\Contracts\Organizations\Projects;

use Codeship\Contracts\Organizations\Projects\DeployPipelines\DeployPipeline;
use Codeship\Requests\Organizations\Projects\DeployPipelines\Config;
use Codeship\Responses\Organizations\Projects\DeployPipelines\Create;

interface DeployPipelines
{
	/**
	 * @param string $branch
	 * @param string $matchMode
	 * @param Config[] $config
	 *
	 * @return Create
	 */
	public function create(string $branch, string $matchMode, array $config): Create;

    public function find(int $id): DeployPipeline;
}
