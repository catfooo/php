<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Variabler och strängar i PHP</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">

<form action="" method="get">

        <label for="firstName" class="form-label">Ange förnamn *</label>
        <input type="text" name="firstName" id="firstName" class="form-control" required>

        <label for="lastName" class="form-label">Ange efternamn</label>
        <input type="text" name="lastName" id="lastName" class="form-control">
   
        <label for="DOB"  class="form-label">Ange födelseår t.ex. 1995 *</label>
        <input type="number" name="DOB" id="DOB" class="form-control" required>

        <input type="submit" value="Logga in" class="btn btn-success mt-3">

        <p class="text-primary mt-1"> * Obligatoriska fält</p>

</form>

<?php

/*********************************************
 *  Tester för att dölja varningar från PHP 
 * 
 *********************************************/ 
if(isset($_GET['firstName'])) 
    $firstName  = $_GET['firstName'];

if(isset($_GET['lastName']))
    $lastName   = $_GET['lastName'];

if(isset($_GET['DOB']))
    $DOB = $_GET['DOB']; // Versaler = Konstant eller förkortning


/****************************************************
 * 
 *   Visa välkomstmeddelande om det finns ett förnamn
 * 
 ***************************************************/
if(isset($firstName)){
    
    // Utskrift med dubbelcitat
    echo "<h1>Hello $firstName $lastName<h1>";
    // Utskrift med enkelcitat
    echo '<h1>Hello $firstName $lastName<h1>';
    
    // Testa om kunden är över 18 år
    if((date("Y") - $DOB) >= 18  ){   
        echo "<h2>Du är välkommen att handla hos oss</h2>";
        ?>

        <hr>
        <h2>Ange pris</h2>

        <!-- Hidden inputs to keep previous data -->
        
        <form method="GET">
            <input type="hidden" name="firstName" value="<?php echo $firstName; ?>">
            <input type="number" name="price" id="">
            <input type="submit" value="Beräkna">
        </form>


        <?php
        if(isset($_GET['price'])){
            $pris = $_GET['price'];
        
            echo "<h3>Pris exkl. moms = $pris Kr</h3>";
            // Övning
            // Beräkna och visa priset inkl. moms
            // Anta att moms är 25%
            $moms = 0.25;
            echo "<h3>Pris inkl. moms = " . $pris * (1+$moms) . " Kr </h3>";

        }
    }
    else{
        echo "<h2 class='alert alert-danger'>Du får dessvärre inte handla hos oss!</h2>";
    }
    
} // stänger firstName

?>  


</body>
</html>