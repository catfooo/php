<?php

    require "vendor/autoload.php";

    $client = new Google\Client;

    // to exit session
    session_start();
    if(isset($_GET['exit'])) {
        // session_unset(); // Unset all session variables // seems not work? only reopening browser window works?
        session_destroy();
        // // Delete the session cookie by setting its expiration to a past time
        // if (isset($_COOKIE[session_name()])) {
        //     setcookie(session_name(), '', time() - 3600, '/');
        // }
    }

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // about setting pro eller dev url
    // if pro, use global, if not, usegetenv?
    if(isset($_ENV['NODE_ENV'])){
        $env = $_ENV['NODE_ENV'];
    }
    // + if isset env and env is pro ,
    $url = isset($env) && $env ==='production' ? 'http://212.18.224.194/~okt2404/projekt/' : 'http://localhost:8888/projekt/';
    //echo $url; 

    $client->setClientId($_ENV["OAUTH_CLIENTID"]);
    $client->setClientSecret($_ENV["OAUTH_CLIENTSECRET"]);

    // if production level(=web server has ini_get('variables_order'); setting, which spits out GPCS, which means $_ENV is enabled and getenv() is disabled), use uri that starts with redirectmeto.com
    if(isset($_ENV['NODE_ENV'])){
        $client->setRedirectUri("https://redirectmeto.com/". $url . "redirect.php");
    } else {$client->setRedirectUri($url . "redirect.php");}
    // $client->setRedirectUri("https://redirectmeto.com/". $url . "redirect.php");
    // $client->setRedirectUri("https://redirectmeto.com/http://212.18.224.194/~okt2404/projekt/redirect.php");
    //$client->setRedirectUri($url . "redirect.php"); // for web server, upper uri should be used

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
        <p>en dag, kunde inte somna .........</p>
    </div>
    <br>
    <a href="<?= $url ?>">logga in med google</a>
    <!-- <script src="js/scripts.js"></script> -->
</body>
</html>