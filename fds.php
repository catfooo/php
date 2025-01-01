<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for divs sake</title>
    <link rel="stylesheet" href="projekt/css/style.css">
</head>
<body>
    <div>☺☻</div>
    <?php
        // echo '<div>☺☻</div>';
        echo "<div class='tile'>$i ☺☻</div>";
        echo '<div class="">';
        for ($i=1; $i <=25; $i++) { 
            echo "<div class='tile'>$i ☺☻</div>";
        }
        echo '</div>';

    ?>
    
</body>
</html>