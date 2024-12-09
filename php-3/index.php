<?php

    $db = new mysqli("localhost", "root", "root", "filmdb");

    if ($db->connect_error) {
        echo "failed to connect to MySQL";
        // no further code executed if err
        die();
    }

    // fetch
    $sql = "SELECT * FROM films";

    // kör
    // -> : obj accesses query
    // $result = $db->query($sql);

    // print
    if ($result) {
        // hämta alla rader som en array
        $movies = $result->fetch_all(MYSQLI_ASSOC);
        print_r($movies);
    } else {
        $db->error;
    }

?>