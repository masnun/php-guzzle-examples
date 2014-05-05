<?php
// The OOP APIs

require_once 'vendor/autoload.php';

use GuzzleHttp\Client as Guzzle;

$client = new Guzzle();




// Alternative API
$response = $client->get('http://httpbin.org/get', [
    'query' => ['name' => 'masnun']
]);
echo $response->getBody();