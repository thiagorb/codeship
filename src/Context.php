<?php

namespace Thiagorb\Codeship;

use Psr\Http\Client\ClientInterface;
use Thiagorb\ServiceGeneratorRuntime\RequestFactory;
use Thiagorb\Codeship\Client\Service;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Thiagorb\Codeship\Errors\UnexpectedResponse;
use Thiagorb\Codeship\Exceptions\Unauthorized;
use Thiagorb\Codeship\Exceptions\BadRequest;

class Context extends Service
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @var ?array
     */
    protected $authentication;

    public function __construct(
        ClientInterface $client,
        RequestFactory $requestFactory,
        string $baseUrl,
        string $username,
        string $password
    )
    {
        parent::__construct($client, $requestFactory);
        $this->baseUrl = $baseUrl;
        $this->username = $username;
        $this->password = $password;
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $accessToken = $this->getAuthentication()['access_token'];
        $response = parent::sendRequest($request->withHeader('Authorization', "Bearer {$accessToken}"));
        $this->validateResponse($request, $response);

        return $response;
    }

    protected function validateResponse(RequestInterface $request, ResponseInterface $response)
    {
        if ($response->getStatusCode() === 401) {
            throw new Unauthorized();
        }

        if ($response->getStatusCode() === 400) {
            throw new BadRequest(json_decode($response->getBody()->getContents())->errors);
        }

        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
            throw new UnexpectedResponse($request, $response);
        }
    }

    public function createRequest(string $httpMethod, string $path, array $data = []): RequestInterface
    {
        return parent::createRequest($httpMethod, $path, $data)
            ->withHeader('Content-Type', 'application/json');
    }

    protected function getAuthentication(): array
    {
        if (!$this->authentication) {
            $encodedAuth = base64_encode("{$this->username}:{$this->password}");
            $request = $this->createRequest('POST', $this->baseUrl . 'auth')
                ->withHeader('Authorization', "Basic $encodedAuth");

            $response = parent::sendRequest($request);
            $this->validateResponse($request, $response);
            $this->authentication = json_decode($response->getBody()->getContents(), true);
        }

        return $this->authentication;
    }

    public function getOrganizations(): array
    {
        return $this->getAuthentication()['organizations'];
    }
}