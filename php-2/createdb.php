<?php
    
    $db = new mysqli("localhost", "root", "");
    $name = "myDB" . date("YmdHis");
    $sql = "CREATE DATABASE $name";
    $db->query($sql)

?>