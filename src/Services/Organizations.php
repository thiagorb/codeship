<?php

namespace Thiagorb\Codeship\Services;

use Thiagorb\Codeship\Context;
use Thiagorb\ServiceGeneratorRuntime\ServiceContext;
use Thiagorb\Codeship\Organization as OrganizationModel;
use Thiagorb\Codeship\Client\Implementations\AccountOrganizations;

class Organizations extends AccountOrganizations implements \Thiagorb\Codeship\Contracts\AccountOrganizations
{
	/**
	 * @var Context
	 */
	protected $context;

	public function __construct(ServiceContext $context, string $baseUrl)
	{
		parent::__construct($context, $baseUrl);

		if (!$context instanceof Context) {
			throw new \Error('Codeship services require a specific context class');
		}

		$this->context = $context;
	}

    /**
     * @return OrganizationModel[]
     */
	public function read(): array
	{
		return $this->context->decode(
			$this->meta['methods']['read']['return_type'],
			$this->context->getOrganizations()
		);
	}
}
