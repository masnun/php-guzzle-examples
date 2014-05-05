<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client as Guzzle;

$client = new Guzzle();

$request = $client->createRequest('GET', 'http://httpbin.org/get');

// Set Query
$query = $request->getQuery();
$query->set('name', 'masnun');
$query['email'] = "masnun@gmail.com";

// Set headers
$request->setHeader('X-My-Header', 'Header Value');


// Send
$response = $client->send($request);

// Get headers
echo "Content Length: " . $response->getHeader("Content-Length") . PHP_EOL;

// Iterate over headers
foreach ($response->getHeaders() as $name => $values) {
    echo $name . ": " . implode(", ", $values);
}
