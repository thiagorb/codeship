<?php

namespace Thiagorb\Codeship\Requests\Organizations\Projects\DeployPipelines;

class Config
{
	/** @var ?int */
	protected $position;

	/** @var string */
	protected $type;

	/** @var ?string */
	protected $awsAccessKeyId;

	/** @var ?string */
	protected $awsSecretAccessKey;

	/** @var ?string */
	protected $region;

	/** @var ?string */
	protected $applicationName;

	/** @var ?string */
	protected $environmentName;

	/** @var ?string */
	protected $s3Bucket;

	/** @var ?string */
	protected $localPath;

	/** @var ?string */
	protected $acl;

	/** @var ?string */
	protected $deploymentGroupName;

	/** @var ?string */
	protected $deploymentConfigName;

	/** @var ?string */
	protected $path;

	/** @var ?string */
	protected $url;

	/** @var ?string */
	protected $refreshToken;

	/** @var ?string */
	protected $name;

	/** @var ?string */
	protected $apiKey;

	/** @var ?string */
	protected $restoreFrom;

	/** @var ?string */
	protected $postDeploy;

	/** @var ?string */
	protected $backup;

	/** @var ?string */
	protected $force;

	/** @var ?string */
	protected $checkUrl;

	/** @var ?string[] */
	protected $commands;


	/**
	 * @param string $type
	 * @param ?int $position
	 * @param ?string $awsAccessKeyId
	 * @param ?string $awsSecretAccessKey
	 * @param ?string $region
	 * @param ?string $applicationName
	 * @param ?string $environmentName
	 * @param ?string $s3Bucket
	 * @param ?string $localPath
	 * @param ?string $acl
	 * @param ?string $deploymentGroupName
	 * @param ?string $deploymentConfigName
	 * @param ?string $path
	 * @param ?string $url
	 * @param ?string $refreshToken
	 * @param ?string $name
	 * @param ?string $apiKey
	 * @param ?string $restoreFrom
	 * @param ?string $postDeploy
	 * @param ?string $backup
	 * @param ?string $force
	 * @param ?string $checkUrl
	 * @param ?string[] $commands
	 */
	public function __construct(
		string $type = null,
		?int $position = null,
		?string $awsAccessKeyId = null,
		?string $awsSecretAccessKey = null,
		?string $region = null,
		?string $applicationName = null,
		?string $environmentName = null,
		?string $s3Bucket = null,
		?string $localPath = null,
		?string $acl = null,
		?string $deploymentGroupName = null,
		?string $deploymentConfigName = null,
		?string $path = null,
		?string $url = null,
		?string $refreshToken = null,
		?string $name = null,
		?string $apiKey = null,
		?string $restoreFrom = null,
		?string $postDeploy = null,
		?string $backup = null,
		?string $force = null,
		?string $checkUrl = null,
		?array $commands = null
	) {
		$this->type = $type;
		$this->position = $position;
		$this->awsAccessKeyId = $awsAccessKeyId;
		$this->awsSecretAccessKey = $awsSecretAccessKey;
		$this->region = $region;
		$this->applicationName = $applicationName;
		$this->environmentName = $environmentName;
		$this->s3Bucket = $s3Bucket;
		$this->localPath = $localPath;
		$this->acl = $acl;
		$this->deploymentGroupName = $deploymentGroupName;
		$this->deploymentConfigName = $deploymentConfigName;
		$this->path = $path;
		$this->url = $url;
		$this->refreshToken = $refreshToken;
		$this->name = $name;
		$this->apiKey = $apiKey;
		$this->restoreFrom = $restoreFrom;
		$this->postDeploy = $postDeploy;
		$this->backup = $backup;
		$this->force = $force;
		$this->checkUrl = $checkUrl;
		$this->commands = $commands;
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
	 * @return string
	 */
	public function getType(): string
	{
		return $this->type;
	}


	/**
	 * @param string $type
	 */
	public function withType(string $type): self
	{
		$clone = clone($this);
		$clone->type = $type;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getAwsAccessKeyId(): ?string
	{
		return $this->awsAccessKeyId;
	}


	/**
	 * @param ?string $awsAccessKeyId
	 */
	public function withAwsAccessKeyId(?string $awsAccessKeyId): self
	{
		$clone = clone($this);
		$clone->awsAccessKeyId = $awsAccessKeyId;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getAwsSecretAccessKey(): ?string
	{
		return $this->awsSecretAccessKey;
	}


	/**
	 * @param ?string $awsSecretAccessKey
	 */
	public function withAwsSecretAccessKey(?string $awsSecretAccessKey): self
	{
		$clone = clone($this);
		$clone->awsSecretAccessKey = $awsSecretAccessKey;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getRegion(): ?string
	{
		return $this->region;
	}


	/**
	 * @param ?string $region
	 */
	public function withRegion(?string $region): self
	{
		$clone = clone($this);
		$clone->region = $region;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getApplicationName(): ?string
	{
		return $this->applicationName;
	}


	/**
	 * @param ?string $applicationName
	 */
	public function withApplicationName(?string $applicationName): self
	{
		$clone = clone($this);
		$clone->applicationName = $applicationName;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getEnvironmentName(): ?string
	{
		return $this->environmentName;
	}


	/**
	 * @param ?string $environmentName
	 */
	public function withEnvironmentName(?string $environmentName): self
	{
		$clone = clone($this);
		$clone->environmentName = $environmentName;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getS3Bucket(): ?string
	{
		return $this->s3Bucket;
	}


	/**
	 * @param ?string $s3Bucket
	 */
	public function withS3Bucket(?string $s3Bucket): self
	{
		$clone = clone($this);
		$clone->s3Bucket = $s3Bucket;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getLocalPath(): ?string
	{
		return $this->localPath;
	}


	/**
	 * @param ?string $localPath
	 */
	public function withLocalPath(?string $localPath): self
	{
		$clone = clone($this);
		$clone->localPath = $localPath;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getAcl(): ?string
	{
		return $this->acl;
	}


	/**
	 * @param ?string $acl
	 */
	public function withAcl(?string $acl): self
	{
		$clone = clone($this);
		$clone->acl = $acl;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getDeploymentGroupName(): ?string
	{
		return $this->deploymentGroupName;
	}


	/**
	 * @param ?string $deploymentGroupName
	 */
	public function withDeploymentGroupName(?string $deploymentGroupName): self
	{
		$clone = clone($this);
		$clone->deploymentGroupName = $deploymentGroupName;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getDeploymentConfigName(): ?string
	{
		return $this->deploymentConfigName;
	}


	/**
	 * @param ?string $deploymentConfigName
	 */
	public function withDeploymentConfigName(?string $deploymentConfigName): self
	{
		$clone = clone($this);
		$clone->deploymentConfigName = $deploymentConfigName;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getPath(): ?string
	{
		return $this->path;
	}


	/**
	 * @param ?string $path
	 */
	public function withPath(?string $path): self
	{
		$clone = clone($this);
		$clone->path = $path;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getUrl(): ?string
	{
		return $this->url;
	}


	/**
	 * @param ?string $url
	 */
	public function withUrl(?string $url): self
	{
		$clone = clone($this);
		$clone->url = $url;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getRefreshToken(): ?string
	{
		return $this->refreshToken;
	}


	/**
	 * @param ?string $refreshToken
	 */
	public function withRefreshToken(?string $refreshToken): self
	{
		$clone = clone($this);
		$clone->refreshToken = $refreshToken;
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
	public function getApiKey(): ?string
	{
		return $this->apiKey;
	}


	/**
	 * @param ?string $apiKey
	 */
	public function withApiKey(?string $apiKey): self
	{
		$clone = clone($this);
		$clone->apiKey = $apiKey;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getRestoreFrom(): ?string
	{
		return $this->restoreFrom;
	}


	/**
	 * @param ?string $restoreFrom
	 */
	public function withRestoreFrom(?string $restoreFrom): self
	{
		$clone = clone($this);
		$clone->restoreFrom = $restoreFrom;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getPostDeploy(): ?string
	{
		return $this->postDeploy;
	}


	/**
	 * @param ?string $postDeploy
	 */
	public function withPostDeploy(?string $postDeploy): self
	{
		$clone = clone($this);
		$clone->postDeploy = $postDeploy;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getBackup(): ?string
	{
		return $this->backup;
	}


	/**
	 * @param ?string $backup
	 */
	public function withBackup(?string $backup): self
	{
		$clone = clone($this);
		$clone->backup = $backup;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getForce(): ?string
	{
		return $this->force;
	}


	/**
	 * @param ?string $force
	 */
	public function withForce(?string $force): self
	{
		$clone = clone($this);
		$clone->force = $force;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getCheckUrl(): ?string
	{
		return $this->checkUrl;
	}


	/**
	 * @param ?string $checkUrl
	 */
	public function withCheckUrl(?string $checkUrl): self
	{
		$clone = clone($this);
		$clone->checkUrl = $checkUrl;
		return $clone;
	}


	/**
	 * @return ?string[]
	 */
	public function getCommands(): ?array
	{
		return $this->commands;
	}


	/**
	 * @param ?string[] $commands
	 */
	public function withCommands(?array $commands): self
	{
		$clone = clone($this);
		$clone->commands = $commands;
		return $clone;
	}
}
