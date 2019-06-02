<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects;

class Create
{
	/** @var \Thiagorb\Codeship\Responses\Organizations\Projects\Project */
	protected $project;


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\Project $project
	 */
	public function __construct(Project $project)
	{
		$this->project = $project;
	}


	/**
	 * @return \Thiagorb\Codeship\Responses\Organizations\Projects\Project
	 */
	public function getProject(): Project
	{
		return $this->project;
	}


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\Project $project
	 */
	public function withProject(Project $project): self
	{
		$clone = clone($this);
		$clone->project = $project;
		return $clone;
	}
}
