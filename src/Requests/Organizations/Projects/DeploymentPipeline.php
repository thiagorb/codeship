<?php

namespace Thiagorb\Codeship\Requests\Organizations\Projects;

class DeploymentPipeline
{
	/** @var ?int */
	protected $id;

	/** @var ?\Thiagorb\Codeship\Organizations\Requests\Projects\Branch */
	protected $branch;

	/** @var ?\Thiagorb\Codeship\Organizations\Requests\Projects\DeployPipelines\Config */
	protected $config;

	/** @var ?int */
	protected $position;

	/** @var ?string */
	protected $createdAt;

	/** @var ?string */
	protected $updatedAt;


	/**
	 * @param ?int $id
	 * @param ?\Thiagorb\Codeship\Organizations\Requests\Projects\Branch $branch
	 * @param ?\Thiagorb\Codeship\Organizations\Requests\Projects\DeployPipelines\Config $config
	 * @param ?int $position
	 * @param ?string $createdAt
	 * @param ?string $updatedAt
	 */
	public function __construct(
		?int $id,
		?\Thiagorb\Codeship\Organizations\Requests\Projects\Branch $branch,
		?\Thiagorb\Codeship\Organizations\Requests\Projects\DeployPipelines\Config $config,
		?int $position,
		?string $createdAt,
		?string $updatedAt
	) {
		$this->id = $id;
		$this->branch = $branch;
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
	 * @return ?\Thiagorb\Codeship\Organizations\Requests\Projects\Branch
	 */
	public function getBranch(): ?\Thiagorb\Codeship\Organizations\Requests\Projects\Branch
	{
		return $this->branch;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Organizations\Requests\Projects\Branch $branch
	 */
	public function withBranch(?\Thiagorb\Codeship\Organizations\Requests\Projects\Branch $branch): self
	{
		$clone = clone($this);
		$clone->branch = $branch;
		return $clone;
	}


	/**
	 * @return ?\Thiagorb\Codeship\Organizations\Requests\Projects\DeployPipelines\Config
	 */
	public function getConfig(): ?\Thiagorb\Codeship\Organizations\Requests\Projects\DeployPipelines\Config
	{
		return $this->config;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Organizations\Requests\Projects\DeployPipelines\Config $config
	 */
	public function withConfig(?\Thiagorb\Codeship\Organizations\Requests\Projects\DeployPipelines\Config $config): self
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
