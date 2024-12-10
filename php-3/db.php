<?php
    
    mysqli_report(MYSQLI_REPORT_OFF);
    /* @ is used to suppress warnings */
    $db = @new mysqli("localhost", "root", "root", "filmdb");

?>