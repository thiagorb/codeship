<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\Builds;

class Read
{
	/** @var \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Build */
	protected $build;


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Build $build
	 */
	public function __construct(Build $build)
	{
		$this->build = $build;
	}


	/**
	 * @return \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Build
	 */
	public function getBuild(): Build
	{
		return $this->build;
	}


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Build $build
	 */
	public function withBuild(Build $build): self
	{
		$clone = clone($this);
		$clone->build = $build;
		return $clone;
	}
}
