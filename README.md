# Codeship API Client

A PHP Client to use the Codeship API.

## Requirements

- PHP 7.1 or newer
- Composer

## Installing

This project follows the [PSR-18](https://www.php-fig.org/psr/psr-18/) convention, which means you can use any HTTP client implementation with it.

If you don't know which one to choose, you can use the [guzzle adapter](https://github.com/php-http/guzzle6-adapter).

To install the client with guzzle using composer run:

```
composer require thiagorb/codeship php-http/guzzle6-adapter
```

## Usage


1. Instantiate a factory

    - Using guzzle:
    ```
    $factory = new \Thiagorb\Codeship\Guzzle\Factory;
    ```
    - Using another client:
    ```
    $factory = new \Thiagorb\Codeship\Factory($client, $requestFactory);
    ```

2. Instantiate the client

```
$codeship = $factory->build('user@example.com', 'password');
```

3. Ready to use

```
$firstOrganization = $codeship->accountOrganizations()->read()[0];

$projects = $codeship->organizations()
    ->find($firstOrganization->getUuid())
    ->projects()
    ->read();

foreach ($projects->getProjects() as $project) {
    var_dump($project->getName());
}
```

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/thiagorb/codeship/tags).

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
