<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Services;

class ServicesList
{
	/** @var \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Services\Service[]|null */
	protected $services;

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
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Services\Service[]|null $services
	 */
	public function __construct(int $total, int $perPage, int $page, ?array $services)
	{
		$this->total = $total;
		$this->perPage = $perPage;
		$this->page = $page;
		$this->services = $services;
	}


	/**
	 * @return \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Services\Service[]|null
	 */
	public function getServices(): ?array
	{
		return $this->services;
	}


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Services\Service[]|null $services
	 */
	public function withServices(?array $services): self
	{
		$clone = clone($this);
		$clone->services = $services;
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
