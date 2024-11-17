<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable och stränger i php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <form action="" method="get">

        <label for="firstName" class="form-label">ange förnamn *</label>
        <input type="text" name="firstName" id="firstName" class="form-control" required>

        <label for="lastName" class="form-label">ange efternamn</label>
        <input type="text" name="lastName" id="lastName">

        <label for="DOB">ange födelseår t.ex. 1995 *</label>
        <input type="number" name="DOB" id="DOB" required>

       
        <input type="submit" value="logga in" class="btn btn-success mt-3">

    </form>
<p class="text-primary mt-1"> * Obligatoriska fält </p>


<!-- <h2>ange namn</h2>
<form action="" method="GET">
    <input type="text" name="fname" id="">
    <input type="text" name="lname" id="">
    <input type="number" name="year">
    <input type="submit" value="skicka">
</form> -->

    
<?php
/***************************** 
// Test för att dölja varningar från PHP
***********/
if(isset($_GET['firstName']))
    $firstName = $_GET['firstName'];

if(isset($_GET['lastName']))
    $lastName = $_GET['lastName'];

if(isset($_GET['DOB']))
    $DOB = $_GET['DOB'];


/***********************
 * 
 * visa välkomstmeddelande om det finns ett namn
 * 
 **********************************************/
if(isset($firstName)){
    // utskrift med dubbelcitat
echo "<h1>hello $firstName $lastName<h1>";
// utskrift med enkelcitat
echo '<h1>hello $firstName $lastName<h1>';

// vi får t.ex
// akuellt år
// testa om kunden är
if((date("Y") - $DOB ) > 18){
// konkatenering med en punkt-operator
echo "<h2> du är välkommen att handla hos oss</h2>";
} 
else {
    echo "<h2 class='alert alert-danger'>du får dessvärre inte handla hos oss!</h2>";
}
}
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$DOB = $_GET['DOB'];

// if(isset($_GET['fname'])){
//     $fname = $_GET['fname'];
//     $lname = $_GET['lname'];
//     echo "<h1>hello $fname $lname<h1>";
// }

if(isset($_GET['fname'])){
    if(isset($_GET['lname'])){

        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        echo "<h1>hello $fname $lname<h1>";
        // $DOB = $_GET['year']; //1988; // versaler = konstant eller förkortning
       // echo "<h2> du är " . 2024 - $DOB . " år gammal!</h2>";
    }
}

// $firstName  = "soyoun";
// $middleName = "...";
// $lastName   = "choi";
// $DOB = 1988; // versaler = konstant eller förkortning

// // utskrift med dubbelcitat
// echo "<h1>hello $firstName $lastName<h1>";
// // utskrift med enkelcitat
// echo '<h1>hello $firstName $lastName<h1>';

// // konkatenering med en punkt-operator
// echo "<h2> du är " . 2024 - $DOB . " år gammal!</h2>";

// echo "<h2>ange pris</h2>";

?>


<h2>ange pris</h2>
<form action="" method="GET">
    <input type="number" name="price" id="">
    <input type="submit" value="beräkna">
</form>

<?php

if(isset($_GET['price'])){

    $pris = $_GET['price'];
    
    echo "<h3>pris exkl. moms = $pris</h3>";
    
    $moms2 = 0.25;
    echo "<h3>pris inkl. moms = " . $pris * (1+$moms2) . "kr</h3>";
    // övning
    // beräkna och visa priset inkl. moms
    // anta att moms är 25%
}

?>
</body>
</html>
