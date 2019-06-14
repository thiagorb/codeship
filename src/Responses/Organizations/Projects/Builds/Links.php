<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\Builds;

class Links
{
	/** @var ?string */
	protected $pipelines;

	/** @var ?string */
	protected $services;

	/** @var ?string */
	protected $steps;


	/**
	 * @param ?string $pipelines
	 * @param ?string $services
	 * @param ?string $steps
	 */
	public function __construct(?string $pipelines, ?string $services, ?string $steps)
	{
		$this->pipelines = $pipelines;
		$this->services = $services;
		$this->steps = $steps;
	}


	/**
	 * @return ?string
	 */
	public function getPipelines(): ?string
	{
		return $this->pipelines;
	}


	/**
	 * @param ?string $pipelines
	 */
	public function withPipelines(?string $pipelines): self
	{
		$clone = clone($this);
		$clone->pipelines = $pipelines;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getServices(): ?string
	{
		return $this->services;
	}


	/**
	 * @param ?string $services
	 */
	public function withServices(?string $services): self
	{
		$clone = clone($this);
		$clone->services = $services;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getSteps(): ?string
	{
		return $this->steps;
	}


	/**
	 * @param ?string $steps
	 */
	public function withSteps(?string $steps): self
	{
		$clone = clone($this);
		$clone->steps = $steps;
		return $clone;
	}
}
