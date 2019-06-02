<?php

namespace Thiagorb\Codeship;

use Psr\Http\Client\ClientInterface;
use Thiagorb\Codeship\Client\Implementations\Codeship;
use Thiagorb\Codeship\Contracts\Codeship as CodeshipContract;
use Thiagorb\ServiceGeneratorRuntime\RequestFactory;

class Factory
{
    const BASE_URL = 'https://api.codeship.com/v2/';

    /**
     * @var ClientInterface
     */
    protected $client;
    /**
     * @var RequestFactory
     */
    protected $requestFactory;

    public function __construct(ClientInterface $client, RequestFactory $requestFactory)
    {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
    }

    public function build(string $username, string $password): CodeshipContract
    {
        $context = new Context(
            $this->client,
            $this->requestFactory,
            self::BASE_URL,
            $username,
            $password
        );

        return new Codeship($context, self::BASE_URL);
    }
}