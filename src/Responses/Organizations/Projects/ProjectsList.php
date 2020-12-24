<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects;

class ProjectsList
{
	/** @var \Thiagorb\Codeship\Responses\Organizations\Projects\Project[]|null */
	protected $projects;


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\Project[]|null $projects
	 */
	public function __construct(?array $projects)
	{
		$this->projects = $projects;
	}


	/**
	 * @return \Thiagorb\Codeship\Responses\Organizations\Projects\Project[]|null
	 */
	public function getProjects(): ?array
	{
		return $this->projects;
	}


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\Project[]|null $projects
	 */
	public function withProjects(?array $projects): self
	{
		$clone = clone($this);
		$clone->projects = $projects;
		return $clone;
	}
}
