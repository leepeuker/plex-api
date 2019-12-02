### A php wrapper for the plex rest api
___

#### Installing via Composer
`composer require leepe/plex-api`

#### How to use
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