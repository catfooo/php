<?php

    $db = new mysqli("localhost", "root", "", "myDB20241203135749");
    $name = "myTable" . date("YmdHis");
    $sql = "CREATE TABLE $name (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $db->query($sql);

?>