<!-- composer require guzzlehttp/guzzle -->
<?php 

    require __DIR__ . '/vendor/autoload.php';

    $payload = json_encode([
        "title" => "Updated title"
    ]);

    $headers = [
        "Content-type" => "application/json; charset=UTF-8"
    ];

    // Without disabling SSL
    // $client = new GuzzleHttp\Client();

    $client = new GuzzleHttp\Client([
        'verify' => false, // disable SSL cert validation. Not recommended for production
    ]);


    // $response = $client->request("GET", "https://jsonplaceholder.typicode.com/albums/1");

    // Using shortcut methods
    //$response = $client->get("https://jsonplaceholder.typicode.com/albums/1");


    // Patch
    $response = $client->patch("https://jsonplaceholder.typicode.com/albums/1", [
        "headers" => $headers,
        "body" => $payload
    ]);

    

    var_dump($response->getStatusCode());

    var_dump($response->getHeader("Content-type"));

    var_dump((string) $response->getBody());

    // echo $qwe;
?>