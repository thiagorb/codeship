<?php

namespace Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines;

class Update
{
	/** @var \Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\TestPipeline */
	protected $testPipeline;


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\TestPipeline $testPipeline
	 */
	public function __construct(TestPipeline $testPipeline)
	{
		$this->testPipeline = $testPipeline;
	}


	/**
	 * @return \Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\TestPipeline
	 */
	public function getTestPipeline(): TestPipeline
	{
		return $this->testPipeline;
	}


	/**
	 * @param \Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\TestPipeline $testPipeline
	 */
	public function withTestPipeline(TestPipeline $testPipeline): self
	{
		$clone = clone($this);
		$clone->testPipeline = $testPipeline;
		return $clone;
	}
}
