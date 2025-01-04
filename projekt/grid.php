<?php
    
    session_start();
    // if($_SESSION['bg']) {
    //     $bg = "bg";
    // }

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
        // if users col and row is same with other value from kunder table 
        //if($user['col'] == `col` && $user['row'] == `row`) {
        //    echo "meow";
        //}
        $sql = "SELECT * FROM kunder 
                WHERE `col` = {$user['col']} AND `row` = {$user['row']} AND id != $user_id";
        $result = $db->query($sql);
        //echo $result;
        if($result->num_rows > 0) {
            // echo "meow";
            while ($squ = $result->fetch_assoc()) {
                // Echo each matching row(squrrel)'s data/
                // echo "ID: " . $squ['id'] . ", maskrosor: " . $squ['dandelions'] . "<br>";
                echo "du fick " . $squ['dandelions'] . "från user nr " . $squ['id'];
                // delete all dandelions that targeted user has
                $sql = "UPDATE kunder SET dandelions = dandelions - {$squ['dandelions']} WHERE id = {$squ['id']}";
                $db->query($sql);
                // add that dandelion to user, that targeted user had before
                $sql = "UPDATE kunder SET dandelions = dandelions + {$squ['dandelions']} WHERE id = $user_id";
                $db->query($sql);
            }
        } else {//echo "result is false";
            }
            
        

        
        // (gpt) Display a 5�5 grid
        // echo '<div class="tileset" style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; width: 300px; margin: 20px auto;">';
        // for ($i = 1; $i <= 25; $i++) {
        //     echo "<div class='tile' style='border: 1px solid #ccc; padding: 20px; text-align: center;'>$i</div>";
        // }
        // echo '</div>';

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
                    // ajax, form, or fetch to send data to server so php can recognize
                    // or websocket (only if you can xD...)
                    // but oh no, form submitting navigates, which fetch doesnt. but this can be actually good way. you can show user that they are moved, and then, redirect to the main, with updates
                    // but fetch is interesting, bcs this makes seperate php made for move, executing at background. good to try if any energy is left xD
                    // you can use window.location to get via url instead of form. since i tried form(post) a lot time in this course, might good to start with classic get first?

                    // construct the url with the "move(pressed key)" as a query parameter
                    const move = event.key;
                    window.location.href = `move.php?move=${move}`;

                });
            </script>';
        
    }
    
    ?>


</body>
</html>