<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects;

class EnvironmentVariable
{
	/** @var ?string */
	protected $name;

	/** @var ?string */
	protected $value;


	/**
	 * @param ?string $name
	 * @param ?string $value
	 */
	public function __construct(?string $name, ?string $value)
	{
		$this->name = $name;
		$this->value = $value;
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
	public function getValue(): ?string
	{
		return $this->value;
	}


	/**
	 * @param ?string $value
	 */
	public function withValue(?string $value): self
	{
		$clone = clone($this);
		$clone->value = $value;
		return $clone;
	}
}
