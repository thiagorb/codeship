<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects;

class TestPipeline
{
	/** @var ?int */
	protected $id;

	/** @var ?string */
	protected $name;

	/** @var string[]|null */
	protected $commands;

	/** @var ?string */
	protected $createdAt;

	/** @var ?string */
	protected $updatedAt;


	/**
	 * @param ?int $id
	 * @param ?string $name
	 * @param string[]|null $commands
	 * @param ?string $createdAt
	 * @param ?string $updatedAt
	 */
	public function __construct(?int $id, ?string $name, ?array $commands, ?string $createdAt, ?string $updatedAt)
	{
		$this->id = $id;
		$this->name = $name;
		$this->commands = $commands;
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
	 * @return string[]|null
	 */
	public function getCommands(): ?array
	{
		return $this->commands;
	}


	/**
	 * @param string[]|null $commands
	 */
	public function withCommands(?array $commands): self
	{
		$clone = clone($this);
		$clone->commands = $commands;
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
