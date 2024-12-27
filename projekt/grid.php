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
        echo "välkommen " . $user['name'];  
        echo '<a href="http://localhost:8888/projekt/index.php">Maskrosaffären</a>';  
        echo "</div>";
        
        // (gpt) Display a 5×5 grid
        // echo '<div class="tileset" style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; width: 300px; margin: 20px auto;">';
        // for ($i = 1; $i <= 25; $i++) {
        //     echo "<div class='tile' style='border: 1px solid #ccc; padding: 20px; text-align: center;'>$i</div>";
        // }
        // echo '</div>';

        echo '<div class="tileset">';
        for ($i = 1; $i <= 25; $i++) {
            echo "<div class='tile'>$i</div>";
        }
        echo '</div>';
        
    }
    
    ?>


</body>
</html>