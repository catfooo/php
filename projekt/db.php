<?php
    
    mysqli_report(MYSQLI_REPORT_OFF);
    /* @ is used to suppress warnings */
    $db = @new mysqli("localhost", "root", "root", "projekt");
    // latin tweak became not needed(server changed?)
    //$db->set_charset('latin1'); // This sets the database charset to ISO-8859-1
    // hahah issue persists
    //$db->set_charset("utf8mb3");// this not helps. only using selector default lang latin works but that breaks the whole site and then i need to rework with latin 1.... 


    // quit if failed
    if ($db->connect_error) {
        echo "kunde inte koppla till databas";
        die();
    }


?>