<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines;

class Update
{
	/** @var \Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\DeployPipeline */
	protected $deployPipeline;


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\DeployPipeline $deployPipeline
	 */
	public function __construct(DeployPipeline $deployPipeline)
	{
		$this->deployPipeline = $deployPipeline;
	}


	/**
	 * @return \Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\DeployPipeline
	 */
	public function getDeployPipeline(): DeployPipeline
	{
		return $this->deployPipeline;
	}


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\DeployPipeline $deployPipeline
	 */
	public function withDeployPipeline(DeployPipeline $deployPipeline): self
	{
		$clone = clone($this);
		$clone->deployPipeline = $deployPipeline;
		return $clone;
	}
}
