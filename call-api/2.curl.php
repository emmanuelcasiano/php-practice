<?php

$payload = json_encode([
    "title" => "Updated title xxx"
]);

$headers = [
    "Content-type: application/json; charset=UTF-8",
    "Accept-language: en"
];

$ch = curl_init();


// CURLOPT_URL = the URL to fetch
//curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/albums");

// CURLOPT_RETURNTRANSFER is a cURL option that dictates how the result of curl_exec() is handled
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Set to true to return the transfer as a string

// Optional: if SSL certs are an issue on WAMP or any local environment. in production, you normally should not disable SSL verification. since SSL is certain
//🔒 What CURLOPT_SSL_VERIFYPEER does
//true (default): cURL checks if the SSL certificate presented by the server is valid and trusted (using CA certificates).
//false: cURL skips the check → opens you up to MITM (Man-in-the-Middle) attacks.
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// Cleaner way, using curl_setopt_array
curl_setopt_array($ch, [
    CURLOPT_URL => "https://jsonplaceholder.typicode.com/albums/1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_CUSTOMREQUEST => "PATCH",
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_HEADER => true // to get all headers info
]);

$data = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

var_dump($status_code);

var_dump($data);