<?php

// Old Good cURL

$curlHandle = curl_init("http://httpbin.org/post");
curl_setopt($curlHandle, CURLOPT_POST, 1);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS,
    "name=masnun");
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($curlHandle);
$statusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
curl_close($curlHandle);

echo "STATUS CODE: " . $statusCode . PHP_EOL;
echo $output . PHP_EOL;