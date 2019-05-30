<?php

namespace Codeship\Contracts\Organizations\Projects;

use Codeship\Contracts\Organizations\Projects\TestPipelines\TestPipeline;
use Codeship\Responses\Organizations\Projects\TestPipelines\Create;

interface TestPipelines
{
	/**
	 * @param ?string $name
	 * @param ?string[] $commands
	 *
	 * @return Create
	 */
	public function create(?string $name = null, ?array $commands = null): Create;

    public function find(int $id): TestPipeline;
}
