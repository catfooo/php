<?php
    
    session_start();

    require "vendor/autoload.php";

    $client = new Google\Client;

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
    //$client->setRedirectUri("https://redirectmeto.com/http://212.18.224.194/~okt2404/projekt/redirect.php");
    $client->setRedirectUri($url . "redirect.php"); // for google cloud for web server this part not works so we still need upper uri but we will find way, afterwards, not now xD, inget energi kvar
//     //Blockerad åtkomst: Auktoriseringsfel

// mail@mail.com

// You can't sign in to this app because it doesn't comply with Google's OAuth 2.0 policy for keeping apps secure.

// You can let the app developer know that this app doesn't comply with one or more Google validation rules.
// Läs mer om det här felet
// Om du är utvecklaren av php-google-login-3 läser du felinformationen.
// Fel 400: invalid_request

// ***************
// if pro, upper uri, else, downer?
// *************

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
    // var_dump(
    //     $userinfo->email, 
    //     $userinfo->familyName, 
    //     $userinfo->givenName, 
    //     $userinfo->name
    // );

    

    

    require_once "db.php";

    $name = $userinfo->name;
    $email = $userinfo->email;

    //// (gpt:session.md) Retrieve the User ID: Using LAST_INSERT_ID(id) ensures that you can reliably get the id of the user, whether they were just inserted or already existed in the table.
    $sql = "INSERT INTO kunder (name, email) 
            VALUES ('$name', '$email')
            ON DUPLICATE KEY UPDATE id=LAST_INSERT_ID(id)
            ";

    $db->query($sql);

    // get the inserted user id
    $user_id = $db->insert_id;

    // save the user id in the session
    $_SESSION['user_id'] = $user_id;

    echo "<script>
                // alert('du fick 10 maskrosor');
                window.onload = function() {
                    setTimeout(() => {
                        location.href = '" . $url . "grid.php';
                    }, 500);
                }
          </script>";

    // to do next: let the user make use of the item they bought(like eat the food, wear the hat, sleep while using bed etc...)

    // Revoke the token to force user manually log in every trial to test other player
    if ($client->getAccessToken()) {
        $client->revokeToken(); 
    }

?>