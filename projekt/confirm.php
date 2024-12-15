<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bekräftelse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <h1 class="text-primary">bekräftelse</h1>
    
    
<?php


if (isset($_POST['submit'])) {

    // $db = new mysqli("localhost", "root", "root", "projekt");
    // print_r($_POST);
    require_once "db.php";
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    echo "<h2>tack $firstname $lastname!</h2>";
    echo "<p>ditt telefonnummer är $phone</p>";
    echo "<p>vi kommer att ta kontakt med dig på följande e-post: 
         <span class='text-primary'>$email</span></p>";
    echo "<p>här nedan är ditt meddelande: <hr>$message<hr></p>";
    
    $sql = "INSERT INTO kontakter(firstname, lastname, phone, email, message) 
                VALUES ('$firstname', '$lastname', '$phone', '$email', '$message')";

$db->query($sql);


}

?>


</body>
</html>