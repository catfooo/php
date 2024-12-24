<?php

//
//use Dotenv\Dotenv;

    require "vendor/autoload.php";

    $client = new Google\Client;

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $client->setClientId(getenv($_ENV["OAUTH_CLIENTID"]));
    $client->setClientSecret(getenv($_ENV["OAUTH_CLIENTSECRET"]));
    $client->setRedirectUri("http://localhost/php-google-login-2/redirect.php");

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