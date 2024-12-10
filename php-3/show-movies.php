<?php
    error_reporting(0);  // Disable all error reporting
    ini_set('display_errors', 0);  // Disable displaying errors in the browser
    

    require_once 'db.php';

    if ($db->connect_errno) {
        echo "failed";
    } else {
        echo "welcome";
    }
    

?>