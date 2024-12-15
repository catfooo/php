<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beställning</title>
</head>
<body>
    <h1>beställning</h1>

    <?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "filmdb";

$conn = new mysqli($host, $user, $password, $database);
    
    // hämta id från urlen
    $id = $_GET['id'];
    // echo "Artiklenummer: $_GET[id]";
    echo "Artiklenummer: $id";

    $sql = "SELECT * FROM films WHERE id = $id";
    $result = $conn->query($sql);

    // hämta resultatet som en associativ array // en array tillbaka
    $film = $result->fetch_assoc();

    //skriv ut
    // print_r($film);

    echo "<h3> du har beställt " . $film['title'] . "</h3>";
    echo "<h3>pris: " . $film['price'] . "kr<h3>";
    // echo "<img src='images/" . $film['image'] . "'>";

    // visa beställningsformulär
    ?>

    <form action="order.php?id=<?php echo $id; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <h3>ange e-post</h3>
        <input type="email" name="customer_email" required>
        
        <input type="submit" name="submit" value="beställ">
    </form>




    <?php

    // visa bekräftelse
    if (isset($_POST['submit'])) {
        echo "du har beställt: " . $film['title'];
        echo "<br>";

        // hemuppgift
        // spara beställningen i databasen
        // tid, numer, epost, eget id(beställningsnummer)
        // insert into
        // INSERT INTO `orders` ( `artikelnummer`, `customer_email`) VALUES (NULL, '2', 'ttest@test', CURRENT_TIMESTAMP);

        $artikelnummer = $_POST['id'];
        $customer_email = $_POST['customer_email'];
        $sql = "INSERT INTO orders (artikelnummer, customer_email) VALUES ('$artikelnummer', '$customer_email')";
        $conn->query($sql);

        // visa ordernummer
        $ordernummer = $conn->insert_id;
        echo "ditt ordernummer: $ordernummer";


    }

    ?>
</body>
</html>