<?php

namespace Thiagorb\Codeship\Client\Implementations;

use Thiagorb\Codeship\Responses\Organizations\Organization;

class AccountOrganizations extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\AccountOrganizations
{
	/**
	 * @var array
	 */
	protected $meta = [
		'methods' => [
			'read' => [
				'relative_path' => '',
				'http_method' => 'get',
				'parameters' => [],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
					'arguments' => [
						[
							'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\OrganizationTransformer',
						],
					],
				],
			],
		],
	];


	/**
	 * @return Organization[]
	 */
	public function read(): array
	{
		return $this->processMessage('read', []);
	}
}
