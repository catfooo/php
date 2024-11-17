<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrayer i PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="container">
<?php

// Indexerad array

$cars = array("Volvo", "Saab" , "BMW");
//   Index       0       1        2

echo "<h3>Jag tycker om " . $cars[0] . "</h3>";
echo "<h3>Jag tycker om " . $cars[1] . "</h3>";
echo "<h3>Jag tycker om " . $cars[2] . "</h3>";
echo "<h3>Jag tycker om " . $cars[3] . "</h3>"; // OBS! Visar en varning

// Skriv ut en array
echo "<pre>";
print_r($cars);
echo "</pre>";

// Associativa arrayer
$age = array(
    "Peter" => 34,
    "Kalle" => 20
);

echo "<h3>Peter är $age[Peter] år gammal</h3>";
echo "<h3>Kalle är $age[Kalle] år gammal</h3>";

// Multidimensionella arrayer
$cars = array(
    array("Volvo XC40", 35, 5),
    //       0           1  2
    array("Volvo XC60", 30, 2),
    array("Volvo XC90", 20, 4)
);

echo "<h2>" . $cars[0][0] . "</h2>";
echo "<h3>In stock: " . $cars[0][1] . "</h3>";
echo "<h3>Sold: " . $cars[0][2] . "</h3>";
echo "<hr>";

echo "<h2>" . $cars[1][0] . "</h2>";
echo "<h3>In stock: " . $cars[1][1] . "</h3>";
echo "<h3>Sold: " . $cars[1][2] . "</h3>";
echo "<hr>";

// Foreach-satsen
$colors = array("Red", "Green", "Blue");
foreach ($colors as $color) {
    echo "<p>$color</p>";
}

echo "<hr>";


$cars = array(
    array("Volvo XC40", 35, 5),
    array("Volvo XC60", 30, 2),
    array("Volvo XC90", 20, 4),
);

echo "<table class='table'>";
echo "<tr>
        <th>Model</th>
        <th>In Stock</th>
        <th>Sold</th>
      </tr>
";
foreach ($cars as $car) {
   echo "<tr>"; 
   echo "<td>$car[0]</td>";
   echo "<td>$car[1]</td>";
   echo "<td>$car[2]</td>";
   echo "</tr>";
}
echo "</table>";


?>
</body>
</html>