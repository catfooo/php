<?php
    
    session_start();

    // retrive the user info
    if (!isset($_SESSION['user_id'])) {
        echo '<a href="http://localhost:8888/projekt/landing.php">logga in</a>';        
    } else {
        $user_id = $_SESSION['user_id'];
        $result = $db->query("SELECT * FROM kunder WHERE id = $user_id");
        $user = $result->fetch_assoc();
        echo "välkommen " . $user['name'];  
        echo '<a href="http://localhost:8888/projekt/index.php">Maskrosaffären</a>';      
    }

?>