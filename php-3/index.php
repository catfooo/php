<?php

    $db = new mysqli("localhost", "root", "root", "filmdb");

    if ($db->connect_error) {
        echo "failed to connect to MySQL";
        // no further code executed
        die();
    }

?>