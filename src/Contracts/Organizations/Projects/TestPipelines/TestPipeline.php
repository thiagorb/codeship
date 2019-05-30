<?php

namespace Codeship\Contracts\Organizations\Projects\TestPipelines;

use Codeship\Responses\Organizations\Projects\TestPipelines\Read;
use Codeship\Responses\Organizations\Projects\TestPipelines\Update;

interface TestPipeline
{
	public function read(): Read;

	/**
	 * @param ?string $name
	 * @param ?string[] $commands
	 *
	 * @return Update
	 */
	public function update(?string $name = null, ?array $commands = null): Update;
}
