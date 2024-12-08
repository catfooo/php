<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kontakt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">


<?php


//kontrollera
if (isset($_POST['submit'])) {

    // logga in till databas
    // variabln $db kommer att innehålla en koppling till databasen
    $db = new mysqli("localhost", "root", "root", "webshop");
    //                  server, användare, lösenord, databas

    // okt2404_webshop
    // lösenord

    // skriv ut post-arrayen som innehåller all data från formularen
    // print_r($_POST);

    // hämta data från formularen
    $customer_name = $_POST['customer_name'];
    
    $customer_email = $_POST['customer_email'];
    
    $message = $_POST['message'];

    // visa bekräftelse
    echo "<h1>du har skickat ett meddelande till oss!</h1>";
   

    // skicka data till databasen

    // skapa sats
    $sql = "INSERT INTO contacts (name, email, message) 
            VALUES ('$customer_name', '$customer_email', '$message')";
    
    // kör satsen
    $db->query($sql);
    
}

?>



</body>
</html>