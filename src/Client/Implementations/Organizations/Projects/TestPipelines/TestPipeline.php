<?php

namespace Thiagorb\Codeship\Client\Implementations\Organizations\Projects\TestPipelines;

use Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\Read;
use Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\Update;

class TestPipeline extends \Thiagorb\ServiceGeneratorRuntime\BaseService implements \Thiagorb\Codeship\Contracts\Organizations\Projects\TestPipelines\TestPipeline
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
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\ReadTransformer',
				],
			],
			'update' => [
				'relative_path' => '',
				'http_method' => 'put',
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
					'transformer' => 'Thiagorb\Codeship\Client\Transformers\Thiagorb\Codeship\Responses\Organizations\Projects\TestPipelines\UpdateTransformer',
				],
			],
		],
	];


	public function read(): Read
	{
		return $this->processMessage('read', []);
	}


	/**
	 * @param ?string $name
	 * @param ?string[] $commands
	 *
	 * @return Update
	 */
	public function update(?string $name = null, ?array $commands = null): Update
	{
		return $this->processMessage('update', [
		    'name' => $name,
		    'commands' => $commands,
		]);
	}
}
