<?php

    require "vendor/autoload.php";

    $client = new Google\Client;

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $client->setClientId($_ENV["OAUTH_CLIENTID"]);
    $client->setClientSecret($_ENV["OAUTH_CLIENTSECRET"]);
    $client->setRedirectUri("http://localhost/php-google-login-2/redirect.php");

    $client->addScope("email");
    $client->addScope("profile");

    $url = $client->createAuthUrl();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>google login example</title>
</head>
<body>
    <!-- <?//= $url ?> is equivalent to <?//php echo $url ?> -->
    <a href="<?= $url ?>">sign in with google</a>
</body>
</html>