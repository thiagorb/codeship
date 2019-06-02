<?php

namespace Thiagorb\Codeship\Client\Implementations\Organizations;

use Thiagorb\Codeship\Contracts\Organizations\Projects;

class Organization extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Organizations\Organization
{
	/**
	 * @var array
	 */
	protected $meta = ['methods' => []];


	public function projects(): Projects
	{
		return $this->createSubcontract('projects', 'Thiagorb\\Codeship\\Contracts\\Organizations\\Projects');
	}
}
