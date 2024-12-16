<?php
    
    mysqli_report(MYSQLI_REPORT_OFF);
    /* @ is used to suppress warnings */
    $db = @new mysqli("localhost", "root", "root", "projekt");
    $db->set_charset('latin1'); // This sets the database charset to ISO-8859-1

    // quit if failed
    if ($db->connect_error) {
        echo "kunde inte koppla till databas";
        die();
    }


?>