<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects;

class Branch
{
	/** @var ?string */
	protected $branchName;

	/** @var ?string */
	protected $matchMode;


	/**
	 * @param ?string $branchName
	 * @param ?string $matchMode
	 */
	public function __construct(?string $branchName, ?string $matchMode)
	{
		$this->branchName = $branchName;
		$this->matchMode = $matchMode;
	}


	/**
	 * @return ?string
	 */
	public function getBranchName(): ?string
	{
		return $this->branchName;
	}


	/**
	 * @param ?string $branchName
	 */
	public function withBranchName(?string $branchName): self
	{
		$clone = clone($this);
		$clone->branchName = $branchName;
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
}
