<?php
    
    require_once "header.php";

    // visa formuläret
    echo "<h2>Beställningsformulär (varukorg)</h2>";

    require_once "db.php";

    // hämta id från urlen
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM films WHERE id = $id";
    $result = $db->query($sql);
    
    // hämta resultatet som en associativ array // en array tillbaka
    $film = $result->fetch_assoc();
    
    //skriv ut
    // print_r($film);
    
    // echo "Artiklenummer: $_GET[id]";
    echo "<h3>Artiklenummer: $id</h3>";
    echo "<h3> du har beställt " . $film['title'] . "</h3>";
    echo "<h3>pris: " . $film['price'] . "kr<h3>";
    // echo "<img src='images/" . $film['image'] . "'>";

    // visa beställningsformulär
    ?>

    <form action="order-process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <h3>ange e-post</h3>
        <input type="email" name="customer_email" requried>
        
        <input type="submit" name="submit" value="beställ">
    </form>

    <?php

    require_once "footer.php";
    
?>