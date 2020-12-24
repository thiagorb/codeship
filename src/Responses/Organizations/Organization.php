<?php

namespace Thiagorb\Codeship\Responses\Organizations;

class Organization
{
	/** @var ?string */
	protected $uuid;

	/** @var ?string */
	protected $name;

	/** @var string[]|null */
	protected $scope;


	/**
	 * @param ?string $uuid
	 * @param ?string $name
	 * @param string[]|null $scope
	 */
	public function __construct(?string $uuid, ?string $name, ?array $scope)
	{
		$this->uuid = $uuid;
		$this->name = $name;
		$this->scope = $scope;
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
	public function getScope(): ?array
	{
		return $this->scope;
	}


	/**
	 * @param string[]|null $scope
	 */
	public function withScope(?array $scope): self
	{
		$clone = clone($this);
		$clone->scope = $scope;
		return $clone;
	}
}
