<?php

namespace Thiagorb\Codeship\Contracts\Organizations\Projects;

use Thiagorb\Codeship\Contracts\Organizations\Projects\TestPipelines\TestPipeline;
use Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\Create;

interface TestPipelines
{
	/**
	 * @param ?string $name
	 * @param string[]|null $commands
	 *
	 * @return Create
	 */
	public function create(?string $name = null, ?array $commands = null): Create;

    public function find(int $id): TestPipeline;
}
