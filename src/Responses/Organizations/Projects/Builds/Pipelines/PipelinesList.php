<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines;

class PipelinesList
{
	/** @var ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines\Pipeline[] */
	protected $pipelines;

	/** @var int */
	protected $total;

	/** @var int */
	protected $perPage;

	/** @var int */
	protected $page;


	/**
	 * @param int $total
	 * @param int $perPage
	 * @param int $page
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines\Pipeline[] $pipelines
	 */
	public function __construct(int $total, int $perPage, int $page, ?array $pipelines)
	{
		$this->total = $total;
		$this->perPage = $perPage;
		$this->page = $page;
		$this->pipelines = $pipelines;
	}


	/**
	 * @return ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines\Pipeline[]
	 */
	public function getPipelines(): ?array
	{
		return $this->pipelines;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines\Pipeline[] $pipelines
	 */
	public function withPipelines(?array $pipelines): self
	{
		$clone = clone($this);
		$clone->pipelines = $pipelines;
		return $clone;
	}


	/**
	 * @return int
	 */
	public function getTotal(): int
	{
		return $this->total;
	}


	/**
	 * @param int $total
	 */
	public function withTotal(int $total): self
	{
		$clone = clone($this);
		$clone->total = $total;
		return $clone;
	}


	/**
	 * @return int
	 */
	public function getPerPage(): int
	{
		return $this->perPage;
	}


	/**
	 * @param int $perPage
	 */
	public function withPerPage(int $perPage): self
	{
		$clone = clone($this);
		$clone->perPage = $perPage;
		return $clone;
	}


	/**
	 * @return int
	 */
	public function getPage(): int
	{
		return $this->page;
	}


	/**
	 * @param int $page
	 */
	public function withPage(int $page): self
	{
		$clone = clone($this);
		$clone->page = $page;
		return $clone;
	}
}
