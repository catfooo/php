<?php
    
    session_start();
    // if($_SESSION['bg']) {
    //     $bg = "bg";
    // }
    // var_dump($_SESSION);  // This will show all the session data to help you debug
    // session variable cant be accessed via internet or 3rd person. only via session id from local can access the variable. so.. is_(user)_attacked, needs to find other storage, such as db, bcs targeted user needs to browse this and info needed to shown based on this variable

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marken</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="<?php echo isset($_SESSION['bg']) ?  $_SESSION['bg'] : ''; ?>">
    
    
    
    <?php
    
    //session_start();
    
    require_once "db.php";
    
    // retrive the user info
    if (!isset($_SESSION['user_id'])) {
        echo '<a href="http://localhost:8888/projekt/landing.php">logga in</a>';        
    } else {
        $user_id = $_SESSION['user_id'];
        $result = $db->query("SELECT * FROM kunder WHERE id = $user_id");
        $user = $result->fetch_assoc();
        echo "<div style = 'display:none;'>";
        echo "v�lkommen " . $user['name'];  
        echo '<a href="http://localhost:8888/projekt/index.php">Maskrosaff�ren</a>';  
        echo "</div>";


        // echo user location
        echo $user['col'] . ', ' . $user['row'];

        // if robbed,
        // echo $user_id;
        // $is_user_robbed = "is_" . $user_id . "_robbed";
        // echo "session set: " . $_SESSION[$is_user_robbed]; 

        $sql = "SELECT * FROM handelser
                WHERE userid = $user_id";
        $result = $db->query($sql);
        //echo "ddd";
        $handelser = $result->fetch_assoc();
        if($handelser) {print_r($handelser);} //else {echo "nya";};

        // for web server, it was throwing undefined warning, so used 
        //if(isset($_SESSION[$is_user_robbed]) && $_SESSION[$is_user_robbed]) { 
        //     echo "mjau..."; // this block is not executing at all???
        // if(isset($_SESSION[$is_user_robbed])) {
        //     echo "robbed session set"; // not have been set at all
        // instead

        // might not related to this, but passive robbed check is not working for web server.. why???
        // not web server err. local started to become undefined. it wasnt like this like 1 week ago but nothing changed from then.. xD so whyyyy
        // if($_SESSION[$is_user_robbed]) {
        //     echo "meow meow"; // no here as well..
        if($result->num_rows > 0) {
            if($handelser['taken'] == 0) {
                echo "du träffade en hungrig ekorr men kunde inte födda den";
                // $is_user_robbed = "is_" . $user_id . "_robbed";
                // $_SESSION[$is_user_robbed] = false;
                // DELETE row
                $sql = "DELETE FROM handelser WHERE userid = $user_id";
                $db->query($sql);
            } else {
                $created_time = new DateTime($handelser['created']);
                $current_time = new DateTime();
                // Calculate the difference between the current time and the created time
                $interval = $created_time->diff($current_time);
                $minuter = $interval->i;
                echo "du har förlorat " . $handelser['taken'] . " maskrosor från user nr" . $handelser['attackedby'] . " för " . $minuter . " minuter sedan";
                // $is_user_robbed = "is_" . $user_id . "_robbed";
                // $_SESSION[$is_user_robbed] = false;
                // DELETE row
                $sql = "DELETE FROM handelser WHERE userid = $user_id";
                $db->query($sql);
            }
        } 

        // if rob
        // if users col and row is same with other value from kunder table 
        $sql = "SELECT * FROM kunder 
                WHERE `col` = {$user['col']} AND `row` = {$user['row']} AND id != $user_id";
        $result = $db->query($sql);
        //echo $result;
        if($result->num_rows > 0) {
            // echo "meow";
            while ($squ = $result->fetch_assoc()) {
                if($squ['dandelions'] == 0) {
                    echo "du hittade en ekorr men den såg ut som pank..";
                    // $is_user_robbed = "is_" . $squ["id"] . "_robbed";
                    // $_SESSION[$is_user_robbed] = true;
                    // echo $_SESSION[$is_user_robbed];
                    // instead of session, save to the db
                    $userid = $squ["id"];
                    $attackedby = $user_id;
                    $taken = $squ["dandelions"];
                    $sql = "INSERT INTO handelser (userid, attackedby, taken) VALUES ('$userid','$attackedby', '$taken')";
                    $db->query($sql);
                    // $_SESSION['is_user_dandelions'] = $squ['dandelions'];
                    // $_SESSION['is_user_attackedby'] = $user_id;
                } else {
                    // Echo each matching row(squrrel)'s data
                    // echo "ID: " . $squ['id'] . ", maskrosor: " . $squ['dandelions'] . "<br>";
                    echo "du fick " . $squ['dandelions'] . " maskrosor från user nr " . $squ['id'];
                    // delete all dandelions that targeted user has
                    $sql = "UPDATE kunder SET dandelions = dandelions - {$squ['dandelions']} WHERE id = {$squ['id']}";
                    $db->query($sql);
                    // add that dandelion to user, that targeted user had before
                    $sql = "UPDATE kunder SET dandelions = dandelions + {$squ['dandelions']} WHERE id = $user_id";
                    $db->query($sql);
                    // msg for when user förlorat
                    // session isrobbed user nr = true? // du har förlorat xx maskrosor från usr nr xx // and then make isrobbed false  // maskrosor, usrnr to be session
                    // $is_user_robbed = "is_" . $squ["id"] . "_robbed";
                    // $_SESSION[$is_user_robbed] = true;
                    // echo $_SESSION[$is_user_robbed];
                    $userid = $squ["id"];
                    $attackedby = $user_id;
                    $taken = $squ["dandelions"];
                    $sql = "INSERT INTO handelser (userid, attackedby, taken) VALUES ('$userid','$attackedby', '$taken')";
                    $db->query($sql);
                    // $_SESSION['is_user_dandelions'] = $squ['dandelions'];
                    // $_SESSION['is_user_attackedby'] = $user_id;
                }
            }
        } else {//echo "result is false";
        }
            

        echo '<div class="tileset">';
        for ($i = 1; $i <= 25; $i++) {
            // Check if the tile is 3
            if ($i == 3) {
                echo "<div class='tile shop'><a href='http://localhost:8888/projekt/index.php'>&#8962;</a></div>"; // Display the house symbol ?
            } elseif($i == 2) {
                echo "<div class='tile'><a href='http://localhost:8888/projekt/landing.php?exit=true'>☺☻</a></div>";
            } elseif ($i == 1) {
                echo "<div class=''><</div>";
            } elseif ($i == 13) {
                echo "<div class='tile player'>
                     O<br>
                    /|\\<br>
                    /\\  
                    </div>";
            } elseif ($i == 7) {
                echo "<div class='tile number'>1</div>";
            } elseif ($i == 8) {
                echo "<div class='tile number'>2</div>";
            } elseif ($i == 9) {
                echo "<div class='tile number'>3</div>";
            } elseif ($i == 12) {
                echo "<div class='tile number'>4</div>";
            } elseif ($i == 14) {
                echo "<div class='tile number'>6</div>";
            } elseif ($i == 17) {
                echo "<div class='tile number'>7</div>";
            } elseif ($i == 18) {
                echo "<div class='tile number'>8</div>";
            } elseif ($i == 19) {
                echo "<div class='tile number'>9</div>";
            } else {
                echo "<div class='tile number'>$i</div>"; // Display the number echo "<div class='tile'>$i</div>";
            }
        }
        echo '</div>';

        // listening keyboard might be interesting!

        // js to listen keyboard events
        echo '<script>
                document.addEventListener("keydown", (event) => {
                    console.log("key pressed: " + event.key);
                    
                    // construct the url with the "move(pressed key)" as a query parameter
                    const move = event.key;
                    window.location.href = `move.php?move=${move}`;

                });
            </script>';
        
    }
    
    ?>


</body>
</html>