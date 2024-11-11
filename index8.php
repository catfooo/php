<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slå en tärning</title>
</head>
<body>
    <form method="GET">
        <input type="submit" name="dice" value="slå en tärning">
    </form>
    <?php
      if (isset($_GET['dice'])) {
        echo rand(1,6);
      }
    ?>
</body>
</html>