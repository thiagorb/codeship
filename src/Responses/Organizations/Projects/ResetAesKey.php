<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects;

class ResetAesKey
{
	/** @var string */
	protected $aesKey;


	/**
	 * @param string $aesKey
	 */
	public function __construct(string $aesKey)
	{
		$this->aesKey = $aesKey;
	}


	/**
	 * @return string
	 */
	public function getAesKey(): string
	{
		return $this->aesKey;
	}


	/**
	 * @param string $aesKey
	 */
	public function withAesKey(string $aesKey): self
	{
		$clone = clone($this);
		$clone->aesKey = $aesKey;
		return $clone;
	}
}
