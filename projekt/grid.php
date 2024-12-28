<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marken</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    
    <?php
    
    session_start();
    
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
            } elseif ($i == 13) {
                echo "<div class='tile player'>
                     O<br>
                    /|\\<br>
                    /\\  
                    </div>";
            } elseif ($i == 7) {
                echo "<div class='tile'>1</div>";
            } elseif ($i == 8) {
                echo "<div class='tile'>2</div>";
            } elseif ($i == 9) {
                echo "<div class='tile'>3</div>";
            } elseif ($i == 12) {
                echo "<div class='tile'>4</div>";
            } elseif ($i == 14) {
                echo "<div class='tile'>6</div>";
            } elseif ($i == 17) {
                echo "<div class='tile'>7</div>";
            } elseif ($i == 18) {
                echo "<div class='tile'>8</div>";
            } elseif ($i == 19) {
                echo "<div class='tile'>9</div>";
            } else {
                echo "<div class='tile number'>$i</div>"; // Display the number echo "<div class='tile'>$i</div>";
            }
        }
        echo '</div>';

        // listening keyboard might be interesting!

        // js to listen keyboard events
        echo "<script>
                document.addEventListener('keydown', function(event) {
                    console.log('key pressed: ' + event.key);
                    // ajax, form, or fetch to send data to server so php can recognize
                    // or websocket (only if you can xD...)
                });
            </script>";
        
    }
    
    ?>


</body>
</html>