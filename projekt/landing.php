<?php
//
    require "vendor/autoload.php";

    $client = new Google\Client;

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $client->setClientId($_ENV["OAUTH_CLIENTID"]);
    $client->setClientSecret($_ENV["OAUTH_CLIENTSECRET"]);
    // $client->setRedirectUri("http://redirectmeto.com/http://212.18.224.194/~okt2404/projekt/redirect.php");
    $client->setRedirectUri("http://localhost:8888/projekt/redirect.php");

    $client->addScope("email");
    $client->addScope("profile");

    $url = $client->createAuthUrl();

?>



<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vandrar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- this is fully css. to see js alternative, see typewriter.md -->
    <div class="typewriter">
        <p>en dag, kunde du inte somna .........</p>
    </div>
    <br>
    <a href="<?= $url ?>">logga in med google</a>
    <!-- <script>
        // redirect (id integration to be done in future)
        window.onload = function() {
            setTimeout(() => {
                location.href = "http://212.18.224.194/~okt2404/projekt/index.php";
            }, 5000);
        }
    </script> -->
    <!-- <script src="js/scripts.js"></script> -->
</body>
</html>