<?php
    
    // hämta produkter från databasen
    
    // logga in till databasen
    require_once "db.php";

    // hämta alla filmer
    $sql = "SELECT * FROM films";

    // skicka sql-fråga till databasen
    $result = $db->query($sql);

    // hämta data från resultatet och spara i en array
    $films = $result->fetch_all(MYSQLI_ASSOC);

    //print_r($films);

     // iterera över alla filmer som finns i arrayen
    echo "<div class='row'>";

     foreach ($films as $film) {
        require "show-movie.php";
    }

    echo "</div>";
?>