<?php

// indexerad array

$cars = array("Volvo", "Saab", "BMW");
// Index         0        1       2

echo "<h1>Jag tycker om " . $cars[0] . "</h1>";
echo "<h1>Jag tycker om " . $cars[1] . "</h1>";
echo "<h1>Jag tycker om " . $cars[2] . "</h1>";
echo "<h1>Jag tycker om " . $cars[3] . "</h1>"; // varning

// skriv ut
echo "<pre>";
print_r($cars);
echo "</pre>";


// associativa arrayer
$age = array( 
    "Peter" => 34,
    "Kalle" => 20
);

echo "<h2>Peter är $age[Peter] år gammal</h2>";

// multidimensionella arrayer

$cars = array(
    array("Volvo XC40", 35, 5), 
    array("Volvo XC60", 30, 2), 
    array("Volvo XC80", 20, 4)
);

echo "<h2>" . $cars[0][0] . "</h2>";
echo $cars[0][1];
echo $cars[0][2];

// foreach-satsen
$colors = array("red", "green", "blue");
foreach ($colors as $color) {
    echo "<p>$color</p>";
}

echo "<table>";
echo "<tr>
        <th>Model</th>
      </tr>";
foreach ($cars as $car) {
    echo "<h1>". $car[0] ."</h1>";
    echo $car[1];
    echo $car[2];
}
echo "</table>";
?>