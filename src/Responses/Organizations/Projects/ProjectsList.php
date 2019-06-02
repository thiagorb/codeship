<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects;

class ProjectsList
{
	/** @var ?\Thiagorb\Codeship\Responses\Organizations\Projects\Project[] */
	protected $projects;


	/**
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\Project[] $projects
	 */
	public function __construct(?array $projects)
	{
		$this->projects = $projects;
	}


	/**
	 * @return ?\Thiagorb\Codeship\Responses\Organizations\Projects\Project[]
	 */
	public function getProjects(): ?array
	{
		return $this->projects;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\Project[] $projects
	 */
	public function withProjects(?array $projects): self
	{
		$clone = clone($this);
		$clone->projects = $projects;
		return $clone;
	}
}
