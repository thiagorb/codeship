<?php

namespace Thiagorb\Codeship\Client\Implementations\Organizations\Projects;

use Thiagorb\Codeship\Contracts\Organizations\Projects\Builds\Build;
use Thiagorb\Codeship\Responses\Organizations\Projects\Builds\BuildsList;

class Builds extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Organizations\Projects\Builds
{
	/**
	 * @var array
	 */
	protected $meta = [
		'methods' => [
			'create' => [
				'relative_path' => '',
				'http_method' => 'post',
				'parameters' => [
					'ref' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
					],
					'commitSha' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
							],
						],
					],
				],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
					'arguments' => [
						[
							'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
						],
					],
				],
			],
			'read' => [
				'relative_path' => '',
				'http_method' => 'get',
				'parameters' => [
					'perPage' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
							],
						],
					],
					'page' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
							],
						],
					],
				],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\BuildsListTransformer',
				],
			],
		],
	];


	/**
	 * @param string $ref
	 * @param ?string $commitSha
	 *
	 * @return void
	 */
	public function create(string $ref, ?string $commitSha = null)
	{
		$this->processMessage('create', [
		    'ref' => $ref,
		    'commitSha' => $commitSha,
		]);
	}


	/**
	 * @param int|null $perPage
	 * @param int|null $page
	 *
	 * @return BuildsList
	 */
	public function read(?int $perPage = null, ?int $page = null): BuildsList
	{
		return $this->processMessage('read', [
		    'perPage' => $perPage,
		    'page' => $page,
		]);
	}


	public function find(string $uuid): Build
	{
		return $this->createSubcontract($uuid, 'Thiagorb\\Codeship\\Contracts\\Organizations\\Projects\\Builds\\Build');
	}
}
