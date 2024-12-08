<?php


if (isset($_POST['submit'])) {
        $db = new mysqli("localhost", "root", "root", "projekt");
        // print_r($_POST);

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        echo "<h2>tack $firstname $lastname!</h2>";
        echo "<p>ditt telefonnummer är $phone</p>";
        echo "<p>vi kommer att ta kontakt med dig på följande e-post: $email</p>";
        echo "<p>här nedan är ditt meddelande: <hr>$message<hr></p>";

        $sql = "INSERT INTO kontakter(firstname, lastname, phone, email, message) 
                VALUES ('$firstname', '$lastname', '$phone', '$email', '$message')";

        $db->query($sql);


    }

?>