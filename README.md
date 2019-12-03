### A php wrapper for the plex rest api
___

#### Installing via Composer
`composer require leepe/plex-api`

#### Example use
```
$client = new \PlexApi\Client(
    [
        'host' => '192.168.1.42',
        'username' => 'coolUsername',
        'password' => 'bestPassword',
    ]
);
$result = $client->getLibrarySections();

print_r($result);
```

#### Configuration
All available configuration options (with default values)
```
$config = [
    'host' => '127.0.0.1',
    'port' => '32400,
    'ssl' => true,
    'username' => null,
    'password' => null,
    'token' => null,
    'device' => 'php-plex-api',
    'clientId' => 'eacd33c9-ee06-4454-9e21-19cf4c467515',
    'product' => 'php-plex-api',
    'version' => '1.0',
    'platform' => PHP_OS,
    'platformVersion' => PHP_VERSION,
];

$client = new \PlexApi\Client($config);
```
#### Plex Authentication
You need an authentication token from Plex to talk with the api. 

Either add your `username` and `password` to the client configuration, so the script can request a token from plex, or add the `token` directly instead.