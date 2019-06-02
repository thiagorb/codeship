<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects;

class NotificationRuleOption
{
	/** @var ?string */
	protected $key;

	/** @var ?string */
	protected $url;

	/** @var ?string */
	protected $room;


	/**
	 * @param ?string $key
	 * @param ?string $url
	 * @param ?string $room
	 */
	public function __construct(?string $key, ?string $url, ?string $room)
	{
		$this->key = $key;
		$this->url = $url;
		$this->room = $room;
	}


	/**
	 * @return ?string
	 */
	public function getKey(): ?string
	{
		return $this->key;
	}


	/**
	 * @param ?string $key
	 */
	public function withKey(?string $key): self
	{
		$clone = clone($this);
		$clone->key = $key;
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
	public function getRoom(): ?string
	{
		return $this->room;
	}


	/**
	 * @param ?string $room
	 */
	public function withRoom(?string $room): self
	{
		$clone = clone($this);
		$clone->room = $room;
		return $clone;
	}
}
