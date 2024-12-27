<?php
    
    session_start();

    require "vendor/autoload.php";

    $client = new Google\Client;

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $client->setClientId($_ENV["OAUTH_CLIENTID"]);
    $client->setClientSecret($_ENV["OAUTH_CLIENTSECRET"]);
    //$client->setRedirectUri("http://redirectmeto.com/http://212.18.224.194/~okt2404/projekt/redirect.php");
    $client->setRedirectUri("http://localhost:8888/projekt/index.php");

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

    // to do next : save the value to the database, (use session to log on???)

    require_once "db.php";

    $name = $userinfo->name;
    $email = $userinfo->email;

    // (gpt:session.md) Retrieve the User ID: Using LAST_INSERT_ID(id) ensures that you can reliably get the id of the user, whether they were just inserted or already existed in the table.
    $sql = "INSERT INTO kunder (name, email) 
            VALUES ('$name', '$email')
            -- ON DUPLICATE KEY UPDATE id=LAST_INSERT_ID(id)
            ";

    $db->query($sql);

    // get the inserted user id
    $user_id = $db->insert_id;

    // save the user id in the session
    $_SESSION['user_id'] = $user_id;

    echo "<script>
                alert('du fick 10 maskrosor');
                window.onload = function() {
                    setTimeout(() => {
                        location.href = 'http://localhost:8888/projekt/index.php';
                    }, 5000);
                }
          </script>";

    // to do next: koppla maskros till processen. before confirm the order, check if there is tillägtlikt maskros. after the order, substract the maskros and save to db
    // things i rly wanted to do: collect maskros(like this undone project.. https://github.com/catfooo/grid) and once done, move to login process
    // things that i rly rly rly.. dreamed to do: once user gets every single maskros, save to db, and let them move to the store whenever they want to purchase. let the user make use of the item they bought(like eat the food, wear the hat, sleep while using bed etc...)

?>