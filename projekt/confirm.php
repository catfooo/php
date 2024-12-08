<?php


if (isset($_POST['submit'])) {
        $db = new mysqli("localhost", "root", "root", "projekt");
        print_r($_POST);
    }

?>