<!-- using associative array by chatgpt -->

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
       // Define an associative array for weights and prices
       $prices = [
           50 => 15,
           100 => 30,
           250 => 45,
           500 => 60,
           1000 => 90,
           2000 => 120
       ];

       // Check if 'vikt' is set and retrieve its value
       if (isset($_GET['vikt'])) {
           $vikt = (int)$_GET['vikt']; // Cast to integer for comparison

           // Check if the weight exists in the array
           if (array_key_exists($vikt, $prices)) {
               echo "<h2>Ditt pris är: {$prices[$vikt]}</h2>";
           } else {
               echo "<p>Du får ha 50, 100, 250, 500, 1000, 2000 för vikt.</p>";
           }
       } else {
           echo "<p>Ange vikt.</p>";
       }
    ?>
</body>
</html>
