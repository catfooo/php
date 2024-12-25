<?php
    
    require "vendor/autoload.php";

    $client = new Google\Client;

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $client->setClientId($_ENV["OAUTH_CLIENTID"]);
    $client->setClientSecret($_ENV["OAUTH_CLIENTSECRET"]);
    $client->setRedirectUri("http://localhost:8888/php-google-login-2/redirect.php");

    // (from gpt)Authorization Code
    // After successful authentication, Google redirects the user back to your specified redirect_uri with the code parameter in the URL:
    // http://localhost/php-google-login-2/redirect.php?code=AUTHORIZATION_CODE
    // so get variable is passed through query string!
    // if so, exchange this to access token

    if ( ! isset($_GET["code"])) {
        exit("login failed");
    }

    // exchange the token by passing the auth code from query string
    $token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

    // set method on client obj, passing the token
    $client->setAccessToken($token["access_token"]);

    // obj of oauth class, passing client obj
    $oauth = new Google\Service\Oauth2($client);

    // obj for show userinfo, of userinfo class
    // https://github.com/googleapis/google-api-php-client-services/blob/main/src/Oauth2/Userinfo.php
    $userinfo = $oauth->userinfo->get();

    // output
    var_dump(
        $userinfo->email, 
        $userinfo->familyName, 
        $userinfo->givenName, 
        $userinfo->name
    );

    // to do next : save the value to the database, (use session to log on???)

?>