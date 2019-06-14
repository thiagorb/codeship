<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Services;

class Service
{
	/** @var ?string */
	protected $uuid;

	/** @var ?string */
	protected $buildUuid;

	/** @var ?string */
	protected $name;

	/** @var ?string */
	protected $status;

	/** @var ?string */
	protected $updatedAt;

	/** @var ?string */
	protected $pullingAt;

	/** @var ?string */
	protected $buildingAt;

	/** @var ?string */
	protected $finishedAt;


	/**
	 * @param ?string $uuid
	 * @param ?string $buildUuid
	 * @param ?string $name
	 * @param ?string $status
	 * @param ?string $updatedAt
	 * @param ?string $pullingAt
	 * @param ?string $buildingAt
	 * @param ?string $finishedAt
	 */
	public function __construct(
		?string $uuid,
		?string $buildUuid,
		?string $name,
		?string $status,
		?string $updatedAt,
		?string $pullingAt,
		?string $buildingAt,
		?string $finishedAt
	) {
		$this->uuid = $uuid;
		$this->buildUuid = $buildUuid;
		$this->name = $name;
		$this->status = $status;
		$this->updatedAt = $updatedAt;
		$this->pullingAt = $pullingAt;
		$this->buildingAt = $buildingAt;
		$this->finishedAt = $finishedAt;
	}


	/**
	 * @return ?string
	 */
	public function getUuid(): ?string
	{
		return $this->uuid;
	}


	/**
	 * @param ?string $uuid
	 */
	public function withUuid(?string $uuid): self
	{
		$clone = clone($this);
		$clone->uuid = $uuid;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getBuildUuid(): ?string
	{
		return $this->buildUuid;
	}


	/**
	 * @param ?string $buildUuid
	 */
	public function withBuildUuid(?string $buildUuid): self
	{
		$clone = clone($this);
		$clone->buildUuid = $buildUuid;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}


	/**
	 * @param ?string $name
	 */
	public function withName(?string $name): self
	{
		$clone = clone($this);
		$clone->name = $name;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getStatus(): ?string
	{
		return $this->status;
	}


	/**
	 * @param ?string $status
	 */
	public function withStatus(?string $status): self
	{
		$clone = clone($this);
		$clone->status = $status;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getUpdatedAt(): ?string
	{
		return $this->updatedAt;
	}


	/**
	 * @param ?string $updatedAt
	 */
	public function withUpdatedAt(?string $updatedAt): self
	{
		$clone = clone($this);
		$clone->updatedAt = $updatedAt;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getPullingAt(): ?string
	{
		return $this->pullingAt;
	}


	/**
	 * @param ?string $pullingAt
	 */
	public function withPullingAt(?string $pullingAt): self
	{
		$clone = clone($this);
		$clone->pullingAt = $pullingAt;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getBuildingAt(): ?string
	{
		return $this->buildingAt;
	}


	/**
	 * @param ?string $buildingAt
	 */
	public function withBuildingAt(?string $buildingAt): self
	{
		$clone = clone($this);
		$clone->buildingAt = $buildingAt;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getFinishedAt(): ?string
	{
		return $this->finishedAt;
	}


	/**
	 * @param ?string $finishedAt
	 */
	public function withFinishedAt(?string $finishedAt): self
	{
		$clone = clone($this);
		$clone->finishedAt = $finishedAt;
		return $clone;
	}
}
