<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to call APIs from PHP: file_get_contents, cURL, Guzzle and SDKs | file_get_contents</title>
</head>
<body>
    <?php
        // Get data from API
        $data = file_get_contents("https://jsonplaceholder.typicode.com/albums/1");
        var_dump($data);


        // Patch data
        $payload = json_encode([
            "title" => "Updated title"
        ]);

        $options = [
            "http" => [
                "method" => "PATCH",
                "header" => "Content-type: application/json; charset=UTF-8",
                "content" => $payload
            ]
        ];

        $context = stream_context_create($options);

        $data = file_get_contents("https://jsonplaceholder.typicode.com/albums/1", false, $context);
        var_dump($data);
        
        echo "<pre>";
            print_r($http_response_header);
        echo "</pre>";
    ?>
</body>
</html>