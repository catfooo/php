<!-- for web server, needed to add confirmation, such as UPDATE. this is copy of deployed redirect php, which shows i consumed last 1 weeks doing nothing xD -->

<?php
    
    session_start();

    require "vendor/autoload.php";

    $client = new Google\Client;

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $client->setClientId($_ENV["OAUTH_CLIENTID"]);
    $client->setClientSecret($_ENV["OAUTH_CLIENTSECRET"]);
    $client->setRedirectUri("https://redirectmeto.com/http://212.18.224.194/~okt2404/projekt/redirect.php");
    //$client->setRedirectUri("http://localhost:8888/projekt/redirect.php");

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
    // echo $name;
    // echo $email;

    //// (gpt:session.md) Retrieve the User ID: Using LAST_INSERT_ID(id) ensures that you can reliably get the id of the user, whether they were just inserted or already existed in the table.
    $sql = "INSERT INTO kunder (name, email) 
            VALUES ('$name', '$email')
            ON DUPLICATE KEY UPDATE id=LAST_INSERT_ID(id)
            ";
    // $sql = "INSERT INTO kunder (name, email) VALUES ('test', 'test')";
    //  $sql = "INSERT INTO kunder (name, email) 
    //          VALUES ('$name', '$email')
             
    //          ";
    //  $sql = "INSERT INTO kunder (name, email) 
    //         VALUES ('$name', '$email')
    //         ON DUPLICATE KEY UPDATE id=LAST_INSERT_ID(id), name = VALUES(name), email = VALUES(email)
    //         ";

    $db->query($sql);
    
    if (!$db->query($sql)) {
    echo "Database error: " . $db->error;
}

    // get the inserted user id
    $user_id = $db->insert_id;
    //echo "inserted id";
    echo $user_id;

    // save the user id in the session
    $_SESSION['user_id'] = $user_id;
    //echo "session saved userid from login";
    //echo "session";
    //echo $_SESSION['user_id'];

    echo "<script>
                // alert('du fick 10 maskrosor');
                window.onload = function() {
                    setTimeout(() => {
                        location.href = 'http://212.18.224.194/~okt2404/projekt/grid.php';
                    }, 500);
                }
          </script>";

    // to do next: let the user make use of the item they bought(like eat the food, wear the hat, sleep while using bed etc...)

    // Revoke the token to force user manually log in every trial to test other player
    if ($client->getAccessToken()) {
        $client->revokeToken(); 
    }

?>