<?php declare(strict_types=1);

namespace PlexApi;

use GuzzleHttp\Psr7\Request;
use Http\Adapter\Guzzle6;
use Http\Client\HttpClient;
use PlexApi\ValueObject\Section\DtoList;

class Client
{
    /**
     * Plex request header: eg php-plex-api
     */
    private string $applicationName;

    /**
     * Plex request header: eg 1.0
     */
    private string $applicationVersion;

    /**
     * Plex request header: eg eacd33c9-ee06-4454-9e21-19cf4c467515
     */
    private string $deviceId;

    /**
     * Plex request header: eg Ubuntu
     */
    private string $deviceOperationSystemName;

    /**
     * Plex request header: eg 18.04.03
     */
    private string $deviceOperationSystemVersion;

    /**
     * Plex request header: eg iPhone 8
     */
    private string $deviceType;

    /**
     * Plex server: host
     */
    private string $host;

    private HttpClient $httpClient;

    /**
     * Plex user: password
     */
    private ?string $password;

    /**
     * Plex server: port
     */
    private int $port;

    /**
     * Plex server: protocol
     */
    private bool $ssl;

    /**
     * Plex request headers: Authentication token
     */
    private ?string $token;

    /**
     * Plex user: username
     */
    private ?string $username;

    public function __construct(array $config = [], ?HttpClient $httpClient = null)
    {
        $this->host = isset($config['host']) ? (string)$config['host'] : '127.0.0.1';
        $this->port = isset($config['port']) ? (int)$config['port'] : 32400;
        $this->ssl = isset($config['ssl']) ? (bool)$config['ssl'] : true;
        $this->username = isset($config['username']) ? (string)$config['username'] : null;
        $this->password = isset($config['password']) ? (string)$config['password'] : null;
        $this->token = isset($config['token']) ? (string)$config['token'] : null;

        $this->deviceType = isset($config['device']) ? (string)$config['device'] : 'php-plex-api';
        $this->deviceId = isset($config['clientId']) ? (string)$config['clientId'] : 'eacd33c9-ee06-4454-9e21-19cf4c467515';
        $this->applicationName = isset($config['product']) ? (string)$config['product'] : 'php-plex-api';
        $this->applicationVersion = isset($config['version']) ? (string)$config['version'] : '1.0';
        $this->deviceOperationSystemName = isset($config['platform']) ? (string)$config['platform'] : PHP_OS;
        $this->deviceOperationSystemVersion = isset($config['platformVersion']) ? (string)$config['platformVersion'] : PHP_VERSION;

        $this->httpClient = $httpClient ?? Guzzle6\Client::createWithConfig(['verify' => false]);
    }

    public function getLibrarySections() : DtoList
    {
        $mediaContainer = (array)$this->get('/library/sections')['MediaContainer'];

        return DtoList::createFromArray((array)$mediaContainer['Directory']);
    }

    public function getLibrarySectionsContents(string $sectionKey) : array
    {
        return (array)$this->get('/library/sections/' . $sectionKey . '/all')['MediaContainer'];
    }

    private function get(string $path) : array
    {
        if ($this->token === null) {
            $this->token = $this->requestToken();
        }

        $response = $this->httpClient->sendRequest(
            new Request(
                'GET',
                $this->getServerUrl() . $path,
                $this->getHeaders()
            )
        );

        if ($response->getStatusCode() !== 200) {
            throw new \RuntimeException('Plex API request failed with status code: ' . $response->getStatusCode());
        }

        return (array)json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
    }

    private function getHeaders() : array
    {
        return [
            'Accept' => 'application/json',
            'X-Plex-Client-Identifier' => $this->deviceId,
            'X-Plex-Product' => $this->applicationName,
            'X-Plex-Version' => $this->applicationVersion,
            'X-Plex-Device' => $this->deviceType,
            'X-Plex-Platform' => $this->deviceOperationSystemName,
            'X-Plex-Platform-Version' => $this->deviceOperationSystemVersion,
            'X-Plex-Provides' => 'controller',
            'X-Plex-Username' => $this->username,
            'X-Plex-Token' => $this->token,
        ];
    }

    private function getProtocol() : string
    {
        return $this->ssl ? 'https://' : 'http://';
    }

    private function getServerUrl() : string
    {
        return $this->getProtocol() . $this->host . ':' . $this->port;
    }

    private function requestToken() : string
    {
        if ($this->username === null || $this->password === null) {
            throw new \RuntimeException('Cannot request authentication token, username and/or password not set.');
        }

        $response = $this->httpClient->sendRequest(
            new Request(
                'POST',
                'https://plex.tv/users/sign_in.json',
                array_merge(
                    $this->getHeaders(),
                    [
                        'Authorization' => 'Basic ' . base64_encode($this->username . ':' . $this->password),
                    ]
                )
            )
        );

        if ($response->getStatusCode() !== 201) {
            throw new \RuntimeException('Requesting new authentication token failed with status code: ' . $response->getStatusCode());
        }

        $body = (array)json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
        if (empty($body['user']['authToken'])) {
            throw new \RuntimeException('Requesting new authentication token failed because of missing token in body: ' . $response->getBody()->getContents());
        }

        return (string)$body['user']['authToken'];
    }
}