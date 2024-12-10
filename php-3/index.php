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
    $result = $db->query($sql);

    // print
    if ($result) {
        // hämta alla rader som en array
        $movies = $result->fetch_all(MYSQLI_ASSOC);
        // print_r($movies);
    } else {
        die($db->error);
    }

    // visa filmer
    // movie is internal variable so not using '' unlike global $_GET?? idk
    foreach ($movies as $movie) {
        echo "<h2>$movie[title]</h2>";
        echo "<img src='images/$movie[image]'>";
        echo "<h3>pris: $movie[price] kr</h3>";
        // get
        echo "<a href='order.php?id=$movie[id]'>köp</a>";
    }

?>