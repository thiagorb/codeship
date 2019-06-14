<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines;

class Pipeline
{
	/** @var ?string */
	protected $uuid;

	/** @var ?string */
	protected $buildUuid;

	/** @var ?string */
	protected $type;

	/** @var ?string */
	protected $status;

	/** @var ?string */
	protected $createdAt;

	/** @var ?string */
	protected $updatedAt;

	/** @var ?string */
	protected $finishedAt;

	/** @var ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines\Metrics */
	protected $metrics;


	/**
	 * @param ?string $uuid
	 * @param ?string $buildUuid
	 * @param ?string $type
	 * @param ?string $status
	 * @param ?string $createdAt
	 * @param ?string $updatedAt
	 * @param ?string $finishedAt
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines\Metrics $metrics
	 */
	public function __construct(
		?string $uuid,
		?string $buildUuid,
		?string $type,
		?string $status,
		?string $createdAt,
		?string $updatedAt,
		?string $finishedAt,
		?Metrics $metrics
	) {
		$this->uuid = $uuid;
		$this->buildUuid = $buildUuid;
		$this->type = $type;
		$this->status = $status;
		$this->createdAt = $createdAt;
		$this->updatedAt = $updatedAt;
		$this->finishedAt = $finishedAt;
		$this->metrics = $metrics;
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
	public function getType(): ?string
	{
		return $this->type;
	}


	/**
	 * @param ?string $type
	 */
	public function withType(?string $type): self
	{
		$clone = clone($this);
		$clone->type = $type;
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
	public function getCreatedAt(): ?string
	{
		return $this->createdAt;
	}


	/**
	 * @param ?string $createdAt
	 */
	public function withCreatedAt(?string $createdAt): self
	{
		$clone = clone($this);
		$clone->createdAt = $createdAt;
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


	/**
	 * @return ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines\Metrics
	 */
	public function getMetrics(): ?Metrics
	{
		return $this->metrics;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines\Metrics $metrics
	 */
	public function withMetrics(?Metrics $metrics): self
	{
		$clone = clone($this);
		$clone->metrics = $metrics;
		return $clone;
	}
}
