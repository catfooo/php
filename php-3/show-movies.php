<?php

    require_once 'db.php';

    if ($db->connect_error) {
        echo "failed";
    } else {
        echo "welcome";
    }
    

?>