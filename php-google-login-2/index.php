<?php

    require 'vendor/autoload.php';

    $client = new Google\Client;

    $client->setClientId();
    $client->setClientSecret();
    $client->setRedirectUri();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>google login example</title>
</head>
<body>
    <a href="">sign in with google</a>
</body>
</html>