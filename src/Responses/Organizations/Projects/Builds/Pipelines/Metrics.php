<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines;

class Metrics
{
	/** @var ?string */
	protected $amiId;

	/** @var ?string */
	protected $queries;

	/** @var ?string */
	protected $cpuUser;

	/** @var ?string */
	protected $duration;

	/** @var ?string */
	protected $cpuSystem;

	/** @var ?string */
	protected $deployment;

	/** @var ?string */
	protected $instanceId;

	/** @var ?string */
	protected $instanceType;

	/** @var ?string */
	protected $cpuPerSecond;

	/** @var ?string */
	protected $diskFreeBytes;

	/** @var ?string */
	protected $diskUsedBytes;

	/** @var ?string */
	protected $networkRxBytes;

	/** @var ?string */
	protected $networkTxBytes;

	/** @var ?string */
	protected $maxUsedConnections;

	/** @var ?string */
	protected $memoryMaxUsageInBytes;


	/**
	 * @param ?string $amiId
	 * @param ?string $queries
	 * @param ?string $cpuUser
	 * @param ?string $duration
	 * @param ?string $cpuSystem
	 * @param ?string $deployment
	 * @param ?string $instanceId
	 * @param ?string $instanceType
	 * @param ?string $cpuPerSecond
	 * @param ?string $diskFreeBytes
	 * @param ?string $diskUsedBytes
	 * @param ?string $networkRxBytes
	 * @param ?string $networkTxBytes
	 * @param ?string $maxUsedConnections
	 * @param ?string $memoryMaxUsageInBytes
	 */
	public function __construct(
		?string $amiId,
		?string $queries,
		?string $cpuUser,
		?string $duration,
		?string $cpuSystem,
		?string $deployment,
		?string $instanceId,
		?string $instanceType,
		?string $cpuPerSecond,
		?string $diskFreeBytes,
		?string $diskUsedBytes,
		?string $networkRxBytes,
		?string $networkTxBytes,
		?string $maxUsedConnections,
		?string $memoryMaxUsageInBytes
	) {
		$this->amiId = $amiId;
		$this->queries = $queries;
		$this->cpuUser = $cpuUser;
		$this->duration = $duration;
		$this->cpuSystem = $cpuSystem;
		$this->deployment = $deployment;
		$this->instanceId = $instanceId;
		$this->instanceType = $instanceType;
		$this->cpuPerSecond = $cpuPerSecond;
		$this->diskFreeBytes = $diskFreeBytes;
		$this->diskUsedBytes = $diskUsedBytes;
		$this->networkRxBytes = $networkRxBytes;
		$this->networkTxBytes = $networkTxBytes;
		$this->maxUsedConnections = $maxUsedConnections;
		$this->memoryMaxUsageInBytes = $memoryMaxUsageInBytes;
	}


	/**
	 * @return ?string
	 */
	public function getAmiId(): ?string
	{
		return $this->amiId;
	}


	/**
	 * @param ?string $amiId
	 */
	public function withAmiId(?string $amiId): self
	{
		$clone = clone($this);
		$clone->amiId = $amiId;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getQueries(): ?string
	{
		return $this->queries;
	}


	/**
	 * @param ?string $queries
	 */
	public function withQueries(?string $queries): self
	{
		$clone = clone($this);
		$clone->queries = $queries;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getCpuUser(): ?string
	{
		return $this->cpuUser;
	}


	/**
	 * @param ?string $cpuUser
	 */
	public function withCpuUser(?string $cpuUser): self
	{
		$clone = clone($this);
		$clone->cpuUser = $cpuUser;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getDuration(): ?string
	{
		return $this->duration;
	}


	/**
	 * @param ?string $duration
	 */
	public function withDuration(?string $duration): self
	{
		$clone = clone($this);
		$clone->duration = $duration;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getCpuSystem(): ?string
	{
		return $this->cpuSystem;
	}


	/**
	 * @param ?string $cpuSystem
	 */
	public function withCpuSystem(?string $cpuSystem): self
	{
		$clone = clone($this);
		$clone->cpuSystem = $cpuSystem;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getDeployment(): ?string
	{
		return $this->deployment;
	}


	/**
	 * @param ?string $deployment
	 */
	public function withDeployment(?string $deployment): self
	{
		$clone = clone($this);
		$clone->deployment = $deployment;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getInstanceId(): ?string
	{
		return $this->instanceId;
	}


	/**
	 * @param ?string $instanceId
	 */
	public function withInstanceId(?string $instanceId): self
	{
		$clone = clone($this);
		$clone->instanceId = $instanceId;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getInstanceType(): ?string
	{
		return $this->instanceType;
	}


	/**
	 * @param ?string $instanceType
	 */
	public function withInstanceType(?string $instanceType): self
	{
		$clone = clone($this);
		$clone->instanceType = $instanceType;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getCpuPerSecond(): ?string
	{
		return $this->cpuPerSecond;
	}


	/**
	 * @param ?string $cpuPerSecond
	 */
	public function withCpuPerSecond(?string $cpuPerSecond): self
	{
		$clone = clone($this);
		$clone->cpuPerSecond = $cpuPerSecond;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getDiskFreeBytes(): ?string
	{
		return $this->diskFreeBytes;
	}


	/**
	 * @param ?string $diskFreeBytes
	 */
	public function withDiskFreeBytes(?string $diskFreeBytes): self
	{
		$clone = clone($this);
		$clone->diskFreeBytes = $diskFreeBytes;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getDiskUsedBytes(): ?string
	{
		return $this->diskUsedBytes;
	}


	/**
	 * @param ?string $diskUsedBytes
	 */
	public function withDiskUsedBytes(?string $diskUsedBytes): self
	{
		$clone = clone($this);
		$clone->diskUsedBytes = $diskUsedBytes;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getNetworkRxBytes(): ?string
	{
		return $this->networkRxBytes;
	}


	/**
	 * @param ?string $networkRxBytes
	 */
	public function withNetworkRxBytes(?string $networkRxBytes): self
	{
		$clone = clone($this);
		$clone->networkRxBytes = $networkRxBytes;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getNetworkTxBytes(): ?string
	{
		return $this->networkTxBytes;
	}


	/**
	 * @param ?string $networkTxBytes
	 */
	public function withNetworkTxBytes(?string $networkTxBytes): self
	{
		$clone = clone($this);
		$clone->networkTxBytes = $networkTxBytes;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getMaxUsedConnections(): ?string
	{
		return $this->maxUsedConnections;
	}


	/**
	 * @param ?string $maxUsedConnections
	 */
	public function withMaxUsedConnections(?string $maxUsedConnections): self
	{
		$clone = clone($this);
		$clone->maxUsedConnections = $maxUsedConnections;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getMemoryMaxUsageInBytes(): ?string
	{
		return $this->memoryMaxUsageInBytes;
	}


	/**
	 * @param ?string $memoryMaxUsageInBytes
	 */
	public function withMemoryMaxUsageInBytes(?string $memoryMaxUsageInBytes): self
	{
		$clone = clone($this);
		$clone->memoryMaxUsageInBytes = $memoryMaxUsageInBytes;
		return $clone;
	}
}
