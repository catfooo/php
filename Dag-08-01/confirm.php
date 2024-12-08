<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kontakt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <h1 class="text-primary">Bekräftelse</h1>


<?php


//kontrollera
if (isset($_POST['submit'])) {

    // logga in till databas
    // variabln $db kommer att innehålla en koppling till databasen
    // $db = new mysqli("localhost", "root", "root", "webshop");
    $db = new mysqli("localhost", "okt2404_webshop", "lösenord", "okt2404_webshop");
    //                  server, användare, lösenord, databas

    // okt2404_webshop
    // lösenord

    // skriv ut post-arrayen som innehåller all data från formularen
    // print_r($_POST);

    // hämta data från formularen
    $customer_firstname = $_POST['customer_firstname'];
    $customer_lastname = $_POST['customer_lastname'];
    $customer_phone = $_POST['customer_phone'];
    $customer_email = $_POST['customer_email'];
    
    $message = $_POST['message'];

    // visa bekräftelse
    echo "<h2>tack $customer_firstname $customer_lastname</h2>";
    echo "<p>ditt telefonnummer är: <span class='text-primary'> $customer_phone </span></p>";
    echo "<p>vi kommer att ta kontakt med dig på följande e-post: <span class='text-primary'> $customer_email </span></p>";
    echo "<p>här nedan kommer en kopia på ditt meddelande: <hr> $message <hr> </p>";
   

    // skicka data till databasen

    // skapa sats
    $sql = "INSERT INTO contacts (firstname, lastname, phone, email, message) 
            VALUES ('$customer_firstname', '$customer_lastname','$customer_phone', '$customer_email', '$message')";
    
    // kör satsen
    $db->query($sql);
    
}

?>



</body>
</html>