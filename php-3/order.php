<?php

    $db = new mysqli("localhost", "root", "root", "filmdb");

    // sök film i databas med id
    // MySQL, string is ''. if number, '' becomes number
    $id = $_GET['id'];
    $sql ="SELECT * FROM films WHERE id='$id'";

    $result = $db->query($sql);

    $film = $result->fetch_assoc();

    print_r($film);

?>