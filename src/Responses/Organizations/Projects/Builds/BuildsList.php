<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\Builds;

class BuildsList
{
	/** @var \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Build[]|null */
	protected $builds;


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Build[]|null $builds
	 */
	public function __construct(?array $builds)
	{
		$this->builds = $builds;
	}


	/**
	 * @return \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Build[]|null
	 */
	public function getBuilds(): ?array
	{
		return $this->builds;
	}


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Build[]|null $builds
	 */
	public function withBuilds(?array $builds): self
	{
		$clone = clone($this);
		$clone->builds = $builds;
		return $clone;
	}
}
