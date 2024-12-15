<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>butiken</title>
</head>
<body>
    <h1>videobutiken</h1>

    <?php
    
    // hämta produkter från databasen
    // Skapa en anslutning till MySQL-databasen
    $conn = new mysqli("localhost", "root", "root", "filmdb");

    // $host = "localhost";
    // $user = "root";
    // $password = "root";
    // $database = "filmdb";

    // $conn = new mysqli($host, $user, $password, $database);

    // visa inte varningar
    // https://www.php.net/manual/en/mysqli.connect-error.php
    //mysqli_report(MYSQLI_REPORT_OFF);
    // $conn = @new mysqli($host, $user, $password, $database);


    // // Kontrollera anslutningen
    // if ($conn->connect_error){
    //     // echo "Failed to connect to MySQL";
    //     die("anslutningen misslyckades: " . $conn->connect_error);
    // }

    // echo "anslutningen lyckades";

    // hämta alla filmer
    $sql = "SELECT * FROM films";

    // skicka sql-fråga till databasen
    $result = $conn->query($sql);

    // echo $result; // obs! vi kan inte skriva ut ett objekt

    // kontrollera  resultat
    //if ($result) {
        // echo "<h2>alla filmer</h2>";

        // hämta data från resultatet och spara i en array
        $films = $result->fetch_all(MYSQLI_ASSOC);

        // skriv ut arrayen (för att visa att det funkar)
        // print_r($films);
    // }

    // iterera över alla filmer som finns i arrayen
    foreach ($films as $film) {
        // echo "<h3>" . $film['title'] . "</h3>";
        echo "<h3>$film[title]</h3>";
        // echo "<img src='images/" . $film['image'] . "'>";
        echo "<img src='images/$film[image]'>";
        echo "<p>pris: $film[price] kr</p>";
        echo "<a href='order.php?id=$film[id]'>Köp</a>";
        echo "<hr>";    
    }


    ?>
</body>
</html>