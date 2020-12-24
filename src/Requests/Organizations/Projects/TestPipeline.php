<?php

namespace Thiagorb\Codeship\Requests\Organizations\Projects;

class TestPipeline
{
	/** @var ?string */
	protected $name;

	/** @var string[]|null */
	protected $commands;


	/**
	 * @param ?string $name
	 * @param string[]|null $commands
	 */
	public function __construct(?string $name = null, ?array $commands = null)
	{
		$this->name = $name;
		$this->commands = $commands;
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
}
