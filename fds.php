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
    <div style="display: grid; grid-template-columns: 1fr 1fr;">
  <div style="background: lightblue;">Item 1</div>
  <div style="background: lightcoral;">Item 2</div>
</div>

    <?php
        // echo '<div>☺☻</div>';
        echo "<div class='tile'>$i ☺☻</div>";
        echo '<div class="tileset">';
        for ($i=1; $i <=25; $i++) { 
            echo "<div class='tile'>$i ☺☻</div>";
        }
        echo '</div>';
        echo '<div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr 1fr; gap: 10px; margin: 20px auto;">';
        for ($i=1; $i <=25; $i++) { 
            echo "<div class='tile'>$i ☺☻</div>";
        }
        echo '</div>';

    ?>
    
</body>
</html>