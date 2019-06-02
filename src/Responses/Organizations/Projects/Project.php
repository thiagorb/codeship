<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects;

class Project
{
	/** @var ?string */
	protected $uuid;

	/** @var ?int */
	protected $id;

	/** @var ?string */
	protected $name;

	/** @var ?string */
	protected $type;

	/** @var ?string */
	protected $repositoryUrl;

	/** @var ?string */
	protected $repositoryProvider;

	/** @var ?string */
	protected $authenticationUser;

	/** @var ?string */
	protected $organizationUuid;

	/** @var ?string */
	protected $sshKey;

	/** @var ?string */
	protected $aesKey;

	/** @var ?string */
	protected $createdAt;

	/** @var ?string */
	protected $updatedAt;

	/** @var ?int[] */
	protected $teamIds;

	/** @var ?string */
	protected $branchMatch;

	/** @var ?string[] */
	protected $branches;

	/** @var ?bool */
	protected $buildOnPrOnly;

	/** @var ?string[] */
	protected $setupCommands;

	/** @var ?\Thiagorb\Codeship\Responses\Organizations\Projects\DeploymentPipeline[] */
	protected $deploymentPipelines;

	/** @var ?\Thiagorb\Codeship\Responses\Organizations\Projects\EnvironmentVariable[] */
	protected $environmentVariables;

	/** @var ?\Thiagorb\Codeship\Responses\Organizations\Projects\TestPipeline[] */
	protected $testPipelines;

	/** @var ?\Thiagorb\Codeship\Responses\Organizations\Projects\NotificationRule[] */
	protected $notificationRules;


	/**
	 * @param ?string $uuid
	 * @param ?int $id
	 * @param ?string $name
	 * @param ?string $type
	 * @param ?string $repositoryUrl
	 * @param ?string $repositoryProvider
	 * @param ?string $authenticationUser
	 * @param ?string $organizationUuid
	 * @param ?string $sshKey
	 * @param ?string $aesKey
	 * @param ?string $createdAt
	 * @param ?string $updatedAt
	 * @param ?int[] $teamIds
	 * @param ?string $branchMatch
	 * @param ?string[] $branches
	 * @param ?bool $buildOnPrOnly
	 * @param ?string[] $setupCommands
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\DeploymentPipeline[] $deploymentPipelines
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\EnvironmentVariable[] $environmentVariables
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\TestPipeline[] $testPipelines
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\NotificationRule[] $notificationRules
	 */
	public function __construct(
		?string $uuid,
		?int $id,
		?string $name,
		?string $type,
		?string $repositoryUrl,
		?string $repositoryProvider,
		?string $authenticationUser,
		?string $organizationUuid,
		?string $sshKey,
		?string $aesKey,
		?string $createdAt,
		?string $updatedAt,
		?array $teamIds,
		?string $branchMatch,
		?array $branches,
		?bool $buildOnPrOnly,
		?array $setupCommands,
		?array $deploymentPipelines,
		?array $environmentVariables,
		?array $testPipelines,
		?array $notificationRules
	) {
		$this->uuid = $uuid;
		$this->id = $id;
		$this->name = $name;
		$this->type = $type;
		$this->repositoryUrl = $repositoryUrl;
		$this->repositoryProvider = $repositoryProvider;
		$this->authenticationUser = $authenticationUser;
		$this->organizationUuid = $organizationUuid;
		$this->sshKey = $sshKey;
		$this->aesKey = $aesKey;
		$this->createdAt = $createdAt;
		$this->updatedAt = $updatedAt;
		$this->teamIds = $teamIds;
		$this->branchMatch = $branchMatch;
		$this->branches = $branches;
		$this->buildOnPrOnly = $buildOnPrOnly;
		$this->setupCommands = $setupCommands;
		$this->deploymentPipelines = $deploymentPipelines;
		$this->environmentVariables = $environmentVariables;
		$this->testPipelines = $testPipelines;
		$this->notificationRules = $notificationRules;
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
	public function getRepositoryUrl(): ?string
	{
		return $this->repositoryUrl;
	}


	/**
	 * @param ?string $repositoryUrl
	 */
	public function withRepositoryUrl(?string $repositoryUrl): self
	{
		$clone = clone($this);
		$clone->repositoryUrl = $repositoryUrl;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getRepositoryProvider(): ?string
	{
		return $this->repositoryProvider;
	}


	/**
	 * @param ?string $repositoryProvider
	 */
	public function withRepositoryProvider(?string $repositoryProvider): self
	{
		$clone = clone($this);
		$clone->repositoryProvider = $repositoryProvider;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getAuthenticationUser(): ?string
	{
		return $this->authenticationUser;
	}


	/**
	 * @param ?string $authenticationUser
	 */
	public function withAuthenticationUser(?string $authenticationUser): self
	{
		$clone = clone($this);
		$clone->authenticationUser = $authenticationUser;
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
	public function getSshKey(): ?string
	{
		return $this->sshKey;
	}


	/**
	 * @param ?string $sshKey
	 */
	public function withSshKey(?string $sshKey): self
	{
		$clone = clone($this);
		$clone->sshKey = $sshKey;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getAesKey(): ?string
	{
		return $this->aesKey;
	}


	/**
	 * @param ?string $aesKey
	 */
	public function withAesKey(?string $aesKey): self
	{
		$clone = clone($this);
		$clone->aesKey = $aesKey;
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
	 * @return ?int[]
	 */
	public function getTeamIds(): ?array
	{
		return $this->teamIds;
	}


	/**
	 * @param ?int[] $teamIds
	 */
	public function withTeamIds(?array $teamIds): self
	{
		$clone = clone($this);
		$clone->teamIds = $teamIds;
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


	/**
	 * @return ?string[]
	 */
	public function getBranches(): ?array
	{
		return $this->branches;
	}


	/**
	 * @param ?string[] $branches
	 */
	public function withBranches(?array $branches): self
	{
		$clone = clone($this);
		$clone->branches = $branches;
		return $clone;
	}


	/**
	 * @return ?bool
	 */
	public function getBuildOnPrOnly(): ?bool
	{
		return $this->buildOnPrOnly;
	}


	/**
	 * @param ?bool $buildOnPrOnly
	 */
	public function withBuildOnPrOnly(?bool $buildOnPrOnly): self
	{
		$clone = clone($this);
		$clone->buildOnPrOnly = $buildOnPrOnly;
		return $clone;
	}


	/**
	 * @return ?string[]
	 */
	public function getSetupCommands(): ?array
	{
		return $this->setupCommands;
	}


	/**
	 * @param ?string[] $setupCommands
	 */
	public function withSetupCommands(?array $setupCommands): self
	{
		$clone = clone($this);
		$clone->setupCommands = $setupCommands;
		return $clone;
	}


	/**
	 * @return ?\Thiagorb\Codeship\Responses\Organizations\Projects\DeploymentPipeline[]
	 */
	public function getDeploymentPipelines(): ?array
	{
		return $this->deploymentPipelines;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\DeploymentPipeline[] $deploymentPipelines
	 */
	public function withDeploymentPipelines(?array $deploymentPipelines): self
	{
		$clone = clone($this);
		$clone->deploymentPipelines = $deploymentPipelines;
		return $clone;
	}


	/**
	 * @return ?\Thiagorb\Codeship\Responses\Organizations\Projects\EnvironmentVariable[]
	 */
	public function getEnvironmentVariables(): ?array
	{
		return $this->environmentVariables;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\EnvironmentVariable[] $environmentVariables
	 */
	public function withEnvironmentVariables(?array $environmentVariables): self
	{
		$clone = clone($this);
		$clone->environmentVariables = $environmentVariables;
		return $clone;
	}


	/**
	 * @return ?\Thiagorb\Codeship\Responses\Organizations\Projects\TestPipeline[]
	 */
	public function getTestPipelines(): ?array
	{
		return $this->testPipelines;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\TestPipeline[] $testPipelines
	 */
	public function withTestPipelines(?array $testPipelines): self
	{
		$clone = clone($this);
		$clone->testPipelines = $testPipelines;
		return $clone;
	}


	/**
	 * @return ?\Thiagorb\Codeship\Responses\Organizations\Projects\NotificationRule[]
	 */
	public function getNotificationRules(): ?array
	{
		return $this->notificationRules;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\NotificationRule[] $notificationRules
	 */
	public function withNotificationRules(?array $notificationRules): self
	{
		$clone = clone($this);
		$clone->notificationRules = $notificationRules;
		return $clone;
	}
}
