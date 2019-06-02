<?php

namespace Thiagorb\Codeship\Contracts\Organizations\Projects\DeployPipelines;

use Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Read;
use Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Update;
use Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Config;

interface DeployPipeline
{
	public function read(): Read;

	/**
	 * @param string $branch
	 * @param string $matchMode
	 * @param Config[] $config
	 *
	 * @return Update
	 */
	public function update(string $branch, string $matchMode, array $config): Update;
}
