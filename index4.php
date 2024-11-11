<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medelvädret</title>
</head>
<body>
    <form method="GET">
        <h2>Ge oss poäng på tre olika prov!</h2>
        <input name="point1" type="number">
        <input name="point2" type="number">
        <input name="point3" type="number"><br>
        <input type="submit" value="beräkna medelvädret">
    </form>
    <?php
      if (isset($_GET['point1'], $_GET['point2'], $_GET['point3'])) {
        echo "Medelvädret är ";
        echo (int)(($_GET['point1'] + $_GET['point2'] + $_GET['point3']) / 3);
        if (($_GET['point1'] + $_GET['point2'] + $_GET['point3']) / 3>90) {
            echo "</br>Bra jobbat!";
        }
      }
    ?>
</body>
</html>