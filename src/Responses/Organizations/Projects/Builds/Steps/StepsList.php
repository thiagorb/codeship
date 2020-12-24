<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps;

class StepsList
{
	/** @var \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\Step[]|null */
	protected $steps;

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
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\Step[]|null $steps
	 */
	public function __construct(int $total, int $perPage, int $page, ?array $steps)
	{
		$this->total = $total;
		$this->perPage = $perPage;
		$this->page = $page;
		$this->steps = $steps;
	}


	/**
	 * @return \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\Step[]|null
	 */
	public function getSteps(): ?array
	{
		return $this->steps;
	}


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\Step[]|null $steps
	 */
	public function withSteps(?array $steps): self
	{
		$clone = clone($this);
		$clone->steps = $steps;
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
