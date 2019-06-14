<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps;

class Step
{
	/** @var ?string */
	protected $uuid;

	/** @var ?string */
	protected $build_uuid;

	/** @var ?string */
	protected $service_uuid;

	/** @var ?string */
	protected $name;

	/** @var ?string */
	protected $tag;

	/** @var ?string */
	protected $type;

	/** @var ?string */
	protected $status;

	/** @var ?string */
	protected $updated_at;

	/** @var ?string */
	protected $started_at;

	/** @var ?string */
	protected $building_at;

	/** @var ?string */
	protected $finished_at;

	/** @var ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\Step[] */
	protected $steps;

	/** @var ?string */
	protected $command;

	/** @var ?string */
	protected $image_name;

	/** @var ?string */
	protected $registry;


	/**
	 * @param ?string $uuid
	 * @param ?string $build_uuid
	 * @param ?string $service_uuid
	 * @param ?string $name
	 * @param ?string $tag
	 * @param ?string $type
	 * @param ?string $status
	 * @param ?string $updated_at
	 * @param ?string $started_at
	 * @param ?string $building_at
	 * @param ?string $finished_at
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\Step[] $steps
	 * @param ?string $command
	 * @param ?string $image_name
	 * @param ?string $registry
	 */
	public function __construct(
		?string $uuid,
		?string $build_uuid,
		?string $service_uuid,
		?string $name,
		?string $tag,
		?string $type,
		?string $status,
		?string $updated_at,
		?string $started_at,
		?string $building_at,
		?string $finished_at,
		?array $steps,
		?string $command,
		?string $image_name,
		?string $registry
	) {
		$this->uuid = $uuid;
		$this->build_uuid = $build_uuid;
		$this->service_uuid = $service_uuid;
		$this->name = $name;
		$this->tag = $tag;
		$this->type = $type;
		$this->status = $status;
		$this->updated_at = $updated_at;
		$this->started_at = $started_at;
		$this->building_at = $building_at;
		$this->finished_at = $finished_at;
		$this->steps = $steps;
		$this->command = $command;
		$this->image_name = $image_name;
		$this->registry = $registry;
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
	public function getBuild_uuid(): ?string
	{
		return $this->build_uuid;
	}


	/**
	 * @param ?string $build_uuid
	 */
	public function withBuild_uuid(?string $build_uuid): self
	{
		$clone = clone($this);
		$clone->build_uuid = $build_uuid;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getService_uuid(): ?string
	{
		return $this->service_uuid;
	}


	/**
	 * @param ?string $service_uuid
	 */
	public function withService_uuid(?string $service_uuid): self
	{
		$clone = clone($this);
		$clone->service_uuid = $service_uuid;
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
	public function getTag(): ?string
	{
		return $this->tag;
	}


	/**
	 * @param ?string $tag
	 */
	public function withTag(?string $tag): self
	{
		$clone = clone($this);
		$clone->tag = $tag;
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
	public function getUpdated_at(): ?string
	{
		return $this->updated_at;
	}


	/**
	 * @param ?string $updated_at
	 */
	public function withUpdated_at(?string $updated_at): self
	{
		$clone = clone($this);
		$clone->updated_at = $updated_at;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getStarted_at(): ?string
	{
		return $this->started_at;
	}


	/**
	 * @param ?string $started_at
	 */
	public function withStarted_at(?string $started_at): self
	{
		$clone = clone($this);
		$clone->started_at = $started_at;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getBuilding_at(): ?string
	{
		return $this->building_at;
	}


	/**
	 * @param ?string $building_at
	 */
	public function withBuilding_at(?string $building_at): self
	{
		$clone = clone($this);
		$clone->building_at = $building_at;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getFinished_at(): ?string
	{
		return $this->finished_at;
	}


	/**
	 * @param ?string $finished_at
	 */
	public function withFinished_at(?string $finished_at): self
	{
		$clone = clone($this);
		$clone->finished_at = $finished_at;
		return $clone;
	}


	/**
	 * @return ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\Step[]
	 */
	public function getSteps(): ?array
	{
		return $this->steps;
	}


	/**
	 * @param ?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\Step[] $steps
	 */
	public function withSteps(?array $steps): self
	{
		$clone = clone($this);
		$clone->steps = $steps;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getCommand(): ?string
	{
		return $this->command;
	}


	/**
	 * @param ?string $command
	 */
	public function withCommand(?string $command): self
	{
		$clone = clone($this);
		$clone->command = $command;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getImage_name(): ?string
	{
		return $this->image_name;
	}


	/**
	 * @param ?string $image_name
	 */
	public function withImage_name(?string $image_name): self
	{
		$clone = clone($this);
		$clone->image_name = $image_name;
		return $clone;
	}


	/**
	 * @return ?string
	 */
	public function getRegistry(): ?string
	{
		return $this->registry;
	}


	/**
	 * @param ?string $registry
	 */
	public function withRegistry(?string $registry): self
	{
		$clone = clone($this);
		$clone->registry = $registry;
		return $clone;
	}
}
