<?php

namespace Thiagorb\Codeship\Client\Implementations;

use Thiagorb\Codeship\Contracts\Organizations\Organization;

class Organizations extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Organizations
{
	/**
	 * @var array
	 */
	protected $meta = ['methods' => []];


	public function find(string $uuid): Organization
	{
		return $this->createSubcontract($uuid, 'Thiagorb\\Codeship\\Contracts\\Organizations\\Organization');
	}
}
