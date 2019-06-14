<?php

namespace Thiagorb\Codeship\Requests\Organizations\Projects;

class NotificationRule
{
	/** @var ?string */
	protected $notifier;

	/** @var ?string */
	protected $target;

	/** @var ?string */
	protected $branch;

	/** @var ?\Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRuleOption[] */
	protected $options;

	/** @var ?string[] */
	protected $buildStatuses;

	/** @var ?string */
	protected $branchMatch;


	/**
	 * @param ?string $notifier
	 * @param ?string $target
	 * @param ?string $branch
	 * @param ?\Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRuleOption[] $options
	 * @param ?string[] $buildStatuses
	 * @param ?string $branchMatch
	 */
	public function __construct(
		?string $notifier,
		?string $target,
		?string $branch,
		?array $options,
		?array $buildStatuses,
		?string $branchMatch
	) {
		$this->notifier = $notifier;
		$this->target = $target;
		$this->branch = $branch;
		$this->options = $options;
		$this->buildStatuses = $buildStatuses;
		$this->branchMatch = $branchMatch;
	}


	/**
	 * @return ?string
	 */
	public function getNotifier(): ?string
	{
		return $this->notifier;
	}


	/**
	 * @param ?string $notifier
	 */
	public function withNotifier(?string $notifier): self
	{
		$clone = clone($this);
		$clone->notifier = $notifier;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getTarget(): ?string
	{
		return $this->target;
	}


	/**
	 * @param ?string $target
	 */
	public function withTarget(?string $target): self
	{
		$clone = clone($this);
		$clone->target = $target;
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
	 * @return ?\Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRuleOption[]
	 */
	public function getOptions(): ?array
	{
		return $this->options;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRuleOption[] $options
	 */
	public function withOptions(?array $options): self
	{
		$clone = clone($this);
		$clone->options = $options;
		return $clone;
	}


	/**
	 * @return ?string[]
	 */
	public function getBuildStatuses(): ?array
	{
		return $this->buildStatuses;
	}


	/**
	 * @param ?string[] $buildStatuses
	 */
	public function withBuildStatuses(?array $buildStatuses): self
	{
		$clone = clone($this);
		$clone->buildStatuses = $buildStatuses;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getBranchMatch(): ?string
	{
		return $this->branchMatch;
	}


	/**
	 * @param ?string $branchMatch
	 */
	public function withBranchMatch(?string $branchMatch): self
	{
		$clone = clone($this);
		$clone->branchMatch = $branchMatch;
		return $clone;
	}
}