<?php

    if (isset($_POST['submit'])) {
        
        print_r($_POST);

        $db = new mysqli("localhost", "root", "root", "contacts");

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

    }

?>