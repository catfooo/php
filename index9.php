<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slå två tärningar</title>
</head>
<body>
    <form method="GET">
        <input type="submit" name="dice" value="slå två tärningar">
    </form>
    <?php
      if (isset($_GET['dice'])) {
        $dice1 = rand(1,6);
        echo "dice1: ";
        echo $dice1;
        echo "<br>";
        $dice2 = rand(1,6);
        echo "dice2: ";
        echo $dice2;
        echo "<br>";
        echo "summan är ";
        echo $dice1 + $dice2;
      }
    ?>
</body>
</html>