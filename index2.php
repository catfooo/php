<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Beräkna porto för brev</h1>
    <form method="GET">
        Ange vikt
        <input type="text" name="vikt">
        <input type="submit" value="beräkna pris">
    </form>
    <?php
       if (isset($_GET['vikt'])) {
           if ($_GET['vikt'] == 50) {
            echo "<h2>Ditt pris är: 15</h2>";
           } elseif ($_GET['vikt'] == 100) {
            echo "<h2>Ditt pris är: 30</h2>";
           } elseif ($_GET['vikt'] == 250) {
            echo "<h2>Ditt pris är: 45</h2>";
           } elseif ($_GET['vikt'] == 500) {
            echo "<h2>Ditt pris är: 60</h2>";
           } elseif ($_GET['vikt'] == 1000) {
            echo "<h2>Ditt pris är: 90</h2>";
           } elseif ($_GET['vikt'] == 2000) {
            echo "<h2>Ditt pris är: 120</h2>";
           } else {
            echo "Du får ha 50, 100, 250, 500, 1000, 2000 för vikt";
           }
       } else {
        echo "Ange vikt";
       }
       
       
    ?>
</body>
</html>