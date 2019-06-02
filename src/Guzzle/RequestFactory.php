<?php

namespace Thiagorb\Codeship\Guzzle;

use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7\Request;

class RequestFactory implements \Thiagorb\ServiceGeneratorRuntime\RequestFactory
{
    public function create(string $method, string $url, array $data = null): RequestInterface
    {
        return new Request($method, $url, [], json_encode($data));
    }
}
