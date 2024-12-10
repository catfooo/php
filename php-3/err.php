<?php

mysqli_report(MYSQLI_REPORT_OFF);
/* @ is used to suppress warnings */
$mysqli = @new mysqli('localhost', 'fake_user', 'wrong_password', 'does_not_exist');
if ($mysqli->connect_error) {
    /* Use your preferred error logging method here */
    echo "kys";
    error_log('Connection error: ' . $mysqli->connect_error);
}