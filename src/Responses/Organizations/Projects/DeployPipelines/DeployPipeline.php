<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines;

class DeployPipeline
{
	/** @var ?int */
	protected $id;

	/** @var ?string */
	protected $branch;

	/** @var ?string */
	protected $matchMode;

	/** @var ?\Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Config[] */
	protected $config;

	/** @var ?int */
	protected $position;

	/** @var ?string */
	protected $createdAt;

	/** @var ?string */
	protected $updatedAt;


	/**
	 * @param ?int $id
	 * @param ?string $branch
	 * @param ?string $matchMode
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Config[] $config
	 * @param ?int $position
	 * @param ?string $createdAt
	 * @param ?string $updatedAt
	 */
	public function __construct(
		?int $id,
		?string $branch,
		?string $matchMode,
		?array $config,
		?int $position,
		?string $createdAt,
		?string $updatedAt
	) {
		$this->id = $id;
		$this->branch = $branch;
		$this->matchMode = $matchMode;
		$this->config = $config;
		$this->position = $position;
		$this->createdAt = $createdAt;
		$this->updatedAt = $updatedAt;
	}


	/**
	 * @return ?int
	 */
	public function getId(): ?int
	{
		return $this->id;
	}


	/**
	 * @param ?int $id
	 */
	public function withId(?int $id): self
	{
		$clone = clone($this);
		$clone->id = $id;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getBranch(): ?string
	{
		return $this->branch;
	}


	/**
	 * @param ?string $branch
	 */
	public function withBranch(?string $branch): self
	{
		$clone = clone($this);
		$clone->branch = $branch;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getMatchMode(): ?string
	{
		return $this->matchMode;
	}


	/**
	 * @param ?string $matchMode
	 */
	public function withMatchMode(?string $matchMode): self
	{
		$clone = clone($this);
		$clone->matchMode = $matchMode;
		return $clone;
	}


	/**
	 * @return ?\Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Config[]
	 */
	public function getConfig(): ?array
	{
		return $this->config;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Config[] $config
	 */
	public function withConfig(?array $config): self
	{
		$clone = clone($this);
		$clone->config = $config;
		return $clone;
	}


	/**
	 * @return ?int
	 */
	public function getPosition(): ?int
	{
		return $this->position;
	}


	/**
	 * @param ?int $position
	 */
	public function withPosition(?int $position): self
	{
		$clone = clone($this);
		$clone->position = $position;
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
}
