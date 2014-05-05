<?php

require_once 'vendor/autoload.php';

// The Guzzle Way

$response = GuzzleHttp\post("http://httpbin.org/post", array(
    'body' => array('name' => 'masnun')
));

echo "STATUS CODE: " . $response->getStatusCode() . PHP_EOL;
echo $response->getBody() . PHP_EOL;
