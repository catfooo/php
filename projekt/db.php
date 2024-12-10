<?php

    $db = new mysqli("localhost", "ro00ot", "root", "projekt");

    // quit if failed
    if ($db->connect_error) {
        echo "kunde inte koppla till databas";
        die();
    }


?>