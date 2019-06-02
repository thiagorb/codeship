<?php

namespace Thiagorb\Codeship\Client\Implementations;

use Thiagorb\Codeship\Contracts\AccountOrganizations;
use Thiagorb\Codeship\Contracts\Organizations;

class Codeship extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Codeship
{
	/**
	 * @var array
	 */
	protected $meta = ['methods' => []];


	public function accountOrganizations(): AccountOrganizations
	{
		return $this->createSubcontract('account_organizations', 'Thiagorb\\Codeship\\Contracts\\AccountOrganizations');
	}


	public function organizations(): Organizations
	{
		return $this->createSubcontract('organizations', 'Thiagorb\\Codeship\\Contracts\\Organizations');
	}
}
