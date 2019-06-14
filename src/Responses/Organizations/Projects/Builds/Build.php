<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\Builds;

class Build
{
	/** @var ?string */
	protected $uuid;

	/** @var ?string */
	protected $projectUuid;

	/** @var ?int */
	protected $projectId;

	/** @var ?string */
	protected $organizationUuid;

	/** @var ?string */
	protected $ref;

	/** @var ?string */
	protected $commitSha;

	/** @var ?string */
	protected $status;

	/** @var ?string */
	protected $username;

	/** @var ?string */
	protected $commitMessage;

	/** @var ?string */
	protected $finishedAt;

	/** @var ?string */
	protected $allocatedAt;

	/** @var ?string */
	protected $queuedAt;

	/** @var ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Links */
	protected $links;

	/** @var ?string */
	protected $branch;

	/** @var ?string */
	protected $prNumber;


	/**
	 * @param ?string $uuid
	 * @param ?string $projectUuid
	 * @param ?int $projectId
	 * @param ?string $organizationUuid
	 * @param ?string $ref
	 * @param ?string $commitSha
	 * @param ?string $status
	 * @param ?string $username
	 * @param ?string $commitMessage
	 * @param ?string $finishedAt
	 * @param ?string $allocatedAt
	 * @param ?string $queuedAt
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Links $links
	 * @param ?string $branch
	 * @param ?string $prNumber
	 */
	public function __construct(
		?string $uuid,
		?string $projectUuid,
		?int $projectId,
		?string $organizationUuid,
		?string $ref,
		?string $commitSha,
		?string $status,
		?string $username,
		?string $commitMessage,
		?string $finishedAt,
		?string $allocatedAt,
		?string $queuedAt,
		?Links $links,
		?string $branch,
		?string $prNumber
	) {
		$this->uuid = $uuid;
		$this->projectUuid = $projectUuid;
		$this->projectId = $projectId;
		$this->organizationUuid = $organizationUuid;
		$this->ref = $ref;
		$this->commitSha = $commitSha;
		$this->status = $status;
		$this->username = $username;
		$this->commitMessage = $commitMessage;
		$this->finishedAt = $finishedAt;
		$this->allocatedAt = $allocatedAt;
		$this->queuedAt = $queuedAt;
		$this->links = $links;
		$this->branch = $branch;
		$this->prNumber = $prNumber;
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
	public function getProjectUuid(): ?string
	{
		return $this->projectUuid;
	}


	/**
	 * @param ?string $projectUuid
	 */
	public function withProjectUuid(?string $projectUuid): self
	{
		$clone = clone($this);
		$clone->projectUuid = $projectUuid;
		return $clone;
	}


	/**
	 * @return ?int
	 */
	public function getProjectId(): ?int
	{
		return $this->projectId;
	}


	/**
	 * @param ?int $projectId
	 */
	public function withProjectId(?int $projectId): self
	{
		$clone = clone($this);
		$clone->projectId = $projectId;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getOrganizationUuid(): ?string
	{
		return $this->organizationUuid;
	}


	/**
	 * @param ?string $organizationUuid
	 */
	public function withOrganizationUuid(?string $organizationUuid): self
	{
		$clone = clone($this);
		$clone->organizationUuid = $organizationUuid;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getRef(): ?string
	{
		return $this->ref;
	}


	/**
	 * @param ?string $ref
	 */
	public function withRef(?string $ref): self
	{
		$clone = clone($this);
		$clone->ref = $ref;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getCommitSha(): ?string
	{
		return $this->commitSha;
	}


	/**
	 * @param ?string $commitSha
	 */
	public function withCommitSha(?string $commitSha): self
	{
		$clone = clone($this);
		$clone->commitSha = $commitSha;
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
	public function getUsername(): ?string
	{
		return $this->username;
	}


	/**
	 * @param ?string $username
	 */
	public function withUsername(?string $username): self
	{
		$clone = clone($this);
		$clone->username = $username;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getCommitMessage(): ?string
	{
		return $this->commitMessage;
	}


	/**
	 * @param ?string $commitMessage
	 */
	public function withCommitMessage(?string $commitMessage): self
	{
		$clone = clone($this);
		$clone->commitMessage = $commitMessage;
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
	 * @return ?string
	 */
	public function getAllocatedAt(): ?string
	{
		return $this->allocatedAt;
	}


	/**
	 * @param ?string $allocatedAt
	 */
	public function withAllocatedAt(?string $allocatedAt): self
	{
		$clone = clone($this);
		$clone->allocatedAt = $allocatedAt;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getQueuedAt(): ?string
	{
		return $this->queuedAt;
	}


	/**
	 * @param ?string $queuedAt
	 */
	public function withQueuedAt(?string $queuedAt): self
	{
		$clone = clone($this);
		$clone->queuedAt = $queuedAt;
		return $clone;
	}


	/**
	 * @return ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Links
	 */
	public function getLinks(): ?Links
	{
		return $this->links;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Links $links
	 */
	public function withLinks(?Links $links): self
	{
		$clone = clone($this);
		$clone->links = $links;
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
	public function getPrNumber(): ?string
	{
		return $this->prNumber;
	}


	/**
	 * @param ?string $prNumber
	 */
	public function withPrNumber(?string $prNumber): self
	{
		$clone = clone($this);
		$clone->prNumber = $prNumber;
		return $clone;
	}
}
