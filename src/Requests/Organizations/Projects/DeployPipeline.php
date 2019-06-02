<?php

namespace Thiagorb\Codeship\Requests\Organizations\Projects;

class DeployPipeline
{
	/** @var string */
	protected $branch;

	/** @var string */
	protected $matchMode;

	/** @var \Thiagorb\Codeship\Requests\Organizations\Projects\DeployPipelines\Config[] */
	protected $config;


	/**
	 * @param string $branch
	 * @param string $matchMode
	 * @param \Thiagorb\Codeship\Requests\Organizations\Projects\DeployPipelines\Config[] $config
	 */
	public function __construct(string $branch, string $matchMode, array $config)
	{
		$this->branch = $branch;
		$this->matchMode = $matchMode;
		$this->config = $config;
	}


	/**
	 * @return string
	 */
	public function getBranch(): string
	{
		return $this->branch;
	}


	/**
	 * @param string $branch
	 */
	public function withBranch(string $branch): self
	{
		$clone = clone($this);
		$clone->branch = $branch;
		return $clone;
	}


	/**
	 * @return string
	 */
	public function getMatchMode(): string
	{
		return $this->matchMode;
	}


	/**
	 * @param string $matchMode
	 */
	public function withMatchMode(string $matchMode): self
	{
		$clone = clone($this);
		$clone->matchMode = $matchMode;
		return $clone;
	}


	/**
	 * @return \Thiagorb\Codeship\Requests\Organizations\Projects\DeployPipelines\Config[]
	 */
	public function getConfig(): array
	{
		return $this->config;
	}


	/**
	 * @param \Thiagorb\Codeship\Requests\Organizations\Projects\DeployPipelines\Config[] $config
	 */
	public function withConfig(array $config): self
	{
		$clone = clone($this);
		$clone->config = $config;
		return $clone;
	}
}
