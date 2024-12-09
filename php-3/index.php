<?php

    $db = new mysqli("localhost", "root", "ro000ot", "filmdb");

    if ($db->connect_error) {
        echo "failed to connect to MySQL";
    }

?>