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
       if ($_GET['vikt'] = 50) {
        echo "Ditt pris är: 15";
       } else {
        echo "Ange vikt";
       }
       
    ?>
</body>
</html>