<?php

namespace Codeship;

use Psr\Http\Client\ClientInterface;
use ServiceGeneratorRuntime\RequestFactory;
use Codeship\Client\Service;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use ServiceGeneratorRuntime\Errors\UnexpectedResponse;
use Codeship\Exceptions\Unauthorized;
use Codeship\Exceptions\BadRequest;

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
        // file_put_contents(
        //     __DIR__ . '/responses.json',
        //     json_encode(json_decode($response->getBody()->getContents()), JSON_PRETTY_PRINT) . PHP_EOL,
        //     FILE_APPEND
        // );

        //echo $request->getUri() . PHP_EOL;
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
            echo $response->getStatusCode() . PHP_EOL;
            echo $response->getReasonPhrase() . PHP_EOL;
            foreach ($response->getHeaders() as $header => $values) {
                printf("%s: %s\n", $header, implode(', ', $values));
            }
            echo 'Response body: ' . $response->getBody()->getContents() . PHP_EOL;
            echo 'Request body: ' . $request->getBody() . PHP_EOL;

            throw new UnexpectedResponse($response);
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