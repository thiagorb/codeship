<?php

namespace Thiagorb\Codeship\Client\Implementations\Organizations\Projects;

use Thiagorb\Codeship\Contracts\Organizations\Projects\TestPipelines\TestPipeline;
use Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\Create;

class TestPipelines extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Organizations\Projects\TestPipelines
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
					'name' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
							],
						],
					],
					'commands' => [
						'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\NullableTransformer',
						'arguments' => [
							[
								'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\ArrayTransformer',
								'arguments' => [
									[
										'transformer' => 'Thiagorb\ServiceGeneratorRuntime\Transformers\PrimitiveTransformer',
									],
								],
							],
						],
					],
				],
				'exceptions' => [],
				'return_type' => [
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\CreateTransformer',
				],
			],
		],
	];


	/**
	 * @param ?string $name
	 * @param ?string[] $commands
	 *
	 * @return Create
	 */
	public function create(?string $name = null, ?array $commands = null): Create
	{
		return $this->processMessage('create', [
		    'name' => $name,
		    'commands' => $commands,
		]);
	}


	public function find(int $id): TestPipeline
	{
		return $this->createSubcontract($id, 'Thiagorb\\Codeship\\Contracts\\Organizations\\Projects\\TestPipelines\\TestPipeline');
	}
}
