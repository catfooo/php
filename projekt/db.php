<?php
    
    mysqli_report(MYSQLI_REPORT_OFF);
    /* @ is used to suppress warnings */
    $db = @new mysqli("localhost", "root", "root", "projekt");

    // quit if failed
    if ($db->connect_error) {
        echo "kunde inte koppla till databas";
        die();
    }


?>