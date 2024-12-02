<?php

    if (isset($_POST['submit'])) {
        
        print_r($_POST);

        $db = new mysqli("localhost", "root", "", "contacts");

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO tabell(name, email, message)
                VALUES('$name', '$email', '$message')";
        
        if ($db->query($sql)) {
            echo "<h1>Tack $name <br>Vi återkommer inom 24 timmar</h1>";
        } else {
            echo $db->error;
        }
        

    }

?>