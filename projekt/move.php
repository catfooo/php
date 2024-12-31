<?php
    
    session_start();

    $bg = ''; // for body class

    // get $move + enable bg
    if(isset($_GET['move'])) {
        $move = $_GET['move'];
        echo $move;
        if(!isset($_SESSION['times'])) {
            $times = 0;
            $times++;
            echo $times;
            $_SESSION['times'] = $times;
        } else {
            $times = $_SESSION['times'];
            $times++;
            echo $times;
            $_SESSION['times'] = $times;
        }
    }

    if($times > 9) {
        // $bg = "bg";
        $_SESSION['bg'] = "bg";
        // $times = 0; // just to reset this value, will commented out afterwards
        // $_SESSION['times'] = $times;
        // $_SESSION['bg'] = "";
    }
?>


<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marken</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="<?php echo $_SESSION['bg']; ?>">

<?php
    
    

    require_once "db.php";
    
    // define maskros for get related msg
    $maskros = '';

    // retrive the user info
    if (!isset($_SESSION['user_id'])) {
        echo '<a href="http://localhost:8888/projekt/landing.php">logga in</a>';        
    } else {
        $user_id = $_SESSION['user_id'];
        $result = $db->query("SELECT * FROM kunder WHERE id = $user_id");
        $user = $result->fetch_assoc();
        echo "<div id='msg' style = 'display:block;'>";
        // echo "v�lkommen " . $user['name'];  
        // echo '<a href="http://localhost:8888/projekt/index.php">Maskrosaff�ren</a>';  

        // $maskros = '';
        // if ($maskros) {echo $maskros;} else {echo 'var finns maskrosor?';}

        echo $maskros;
        echo "</div>";
        
       
        // display grid
        echo '<div class="tileset">';
        for ($i = 1; $i <= 25; $i++) {
            // Check if the tile is 3
            if ($i == 3) {
                echo "<div class='tile shop'><a href='http://localhost:8888/projekt/index.php'>&#8962;</a></div>"; // Display the house symbol ?
            } elseif($i == 2) {
                echo "<div class='tile nav'>☺☻</div>";
            } elseif ($i == 1) {
                echo "<div class=''><</div>";
                if($move == 'Backspace') {
                    $times = 0; 
                    $_SESSION['times'] = $times;
                    $_SESSION['bg'] = "";
                    header('Location: http://localhost:8888/projekt/grid.php');
                }
            } elseif ($i == 13) {
                if(!isset($move)) {
                    echo "<div class='tile player'>
                     O<br>
                    /|\\<br>
                    /\\  
                    </div>";
                } else {
                    echo "<div class='tile'>5</div>";
                }               
            } elseif ($i == 7) {
                echo "<div class='tile'>1</div>";
            } elseif ($i == 8) {
                if ($move == 'ArrowUp') {
                    echo "<div class='tile player'>
                     O<br>
                    /|\\<br>
                    /\\  
                    </div>";
                    // 'arrow up' har skillnaden med det andra, tredje försök... vill inte koda alla xD
                    $sql = "UPDATE kunder SET `row` = `row` + 1 WHERE id = $user_id";
                    $db->query($sql);

                    // if col*row is multiple of 3
                    $sql = "UPDATE kunder SET dandelions = dandelions + 1 
                        WHERE id = $user_id 
                        AND (`col` * `row`) % 3 = 0";
                    $db->query($sql);

                    // if we put $db->query($sql); to the condition, 
                    // The $db->query($sql) will return true bcs the SQL query executes successfully (even if no rows are affected). It will return false only if there is an actual error in executing the query (e.g., syntax error, connection problem, etc.).
                    if($db->affected_rows) {                        
                        echo "<script>                            
                                document.getElementById('msg').innerText = 'plockade en maskros';                            
                        </script>";
                    } else {
                        echo "<script>                           
                                document.getElementById('msg').innerText = '';                            
                        </script>";
                    }
                    
                    echo "<script>
                            setTimeout(function() {
                                window.location.href = 'http://localhost:8888/projekt/grid.php';
                            }, 2000);  // Redirect after 2 seconds
                    </script>";
                    
                } else {
                    echo "<div class='tile'>2</div>";
                }                
            } elseif ($i == 9) {
                echo "<div class='tile'>3</div>";
            } elseif ($i == 12) {
                if ($move == 'ArrowLeft') {
                    echo "<div class='tile player'>
                     O<br>
                    /|\\<br>
                    /\\  
                    </div>";
                    
                    $sql = "UPDATE kunder SET `col` = `col` - 1 WHERE id = $user_id";
                    $db->query($sql);

                    // if col*row is multiple of 3
                    $sql = "UPDATE kunder SET dandelions = dandelions + 1 
                        WHERE id = $user_id 
                        AND (`col` * `row`) % 3 = 0";
                    $db->query($sql);

                    if($db->affected_rows) {                        
                        echo "<script>                            
                                document.getElementById('msg').innerText = 'plockade en maskros';                            
                        </script>";
                    } else {
                        echo "<script>                           
                                document.getElementById('msg').innerText = '';                            
                        </script>";
                    }

                    echo "<script>
                            setTimeout(function() {
                                window.location.href = 'http://localhost:8888/projekt/grid.php';
                            }, 2000);  // Redirect after 2 seconds
                    </script>";
                    
                } else {
                    echo "<div class='tile'>4</div>";
                }
            } elseif ($i == 14) {
                if ($move == 'ArrowRight') {
                    echo "<div class='tile player'>
                     O<br>
                    /|\\<br>
                    /\\  
                    </div>";
                    
                    $sql = "UPDATE kunder SET `col` = `col` + 1 WHERE id = $user_id";
                    $db->query($sql);

                    // if col*row is multiple of 3
                    $sql = "UPDATE kunder SET dandelions = dandelions + 1 
                        WHERE id = $user_id 
                        AND (`col` * `row`) % 3 = 0";
                    $db->query($sql);

                    if($db->affected_rows) {                        
                        echo "<script>                            
                                document.getElementById('msg').innerText = 'plockade en maskros';                            
                        </script>";
                    } else {
                        echo "<script>                           
                                document.getElementById('msg').innerText = '';                            
                        </script>";
                    }

                    echo "<script>
                            setTimeout(function() {
                                window.location.href = 'http://localhost:8888/projekt/grid.php';
                            }, 2000);  // Redirect after 2 seconds
                    </script>";
                    
                } else {
                    echo "<div class='tile'>6</div>";
                }
            } elseif ($i == 17) {
                echo "<div class='tile'>7</div>";
            } elseif ($i == 18) {
                if ($move == 'ArrowDown') {
                    echo "<div class='tile player'>
                     O<br>
                    /|\\<br>
                    /\\  
                    </div>";
                    
                    $sql = "UPDATE kunder SET `row` = `row` - 1 WHERE id = $user_id";
                    $db->query($sql);

                    // if col*row is multiple of 3
                    $sql = "UPDATE kunder SET dandelions = dandelions + 1 
                        WHERE id = $user_id 
                        AND (`col` * `row`) % 3 = 0";
                    $db->query($sql);

                    if($db->affected_rows) {                        
                        echo "<script>                            
                                document.getElementById('msg').innerText = 'plockade en maskros';                            
                        </script>";
                    } else {
                        echo "<script>                           
                                document.getElementById('msg').innerText = '';                            
                        </script>";
                    }

                    echo "<script>
                            setTimeout(function() {
                                window.location.href = 'http://localhost:8888/projekt/grid.php';
                            }, 2000);  // Redirect after 2 seconds
                    </script>";
                    
                } else {
                    echo "<div class='tile'>8</div>";
                }
            } elseif ($i == 19) {
                echo "<div class='tile'>9</div>";
            } else {
                echo "<div class='tile number'>$i</div>"; // Display the number echo "<div class='tile'>$i</div>";
            }
        }
        echo '</div>';

        
        
    }

?>

</body>
</html>