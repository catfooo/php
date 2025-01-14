<?php

    session_start();
    
    require_once "header.php";

?>

<section class="container">
    <h1 class="text-primary text-center border-bottom border-primary">bekr?ftelse</h1>

    <?php
    

    if (isset($_POST['submit'])) {
        // databasuppkoppling
        require_once 'db.php';

        // h?mta fr?n form.php
        $articlenumber = $_POST['id'];
        $name = $_POST['name'];
        $telephonenumber = $_POST['telephonenumber'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        // h�mta fr�n sessionen
        $user_id = $_SESSION['user_id'];
        $price = $_SESSION['price'];
        
        

      
        
        echo "<h2>tack $name, du best?llde produkt nr $articlenumber</h2>";
        echo "<h3>ditt telefonnummer ?r $telephonenumber</h3>";
        echo "<h3>ditt email ?r $email</h3>";
        echo "<h3>vi kommer att leverera produkten till $address</h3>";

        $sql = "INSERT INTO bestallningar (articlenumber, user_id, name, telephonenumber, email, address)
                VALUES ('$articlenumber', '$user_id', '$name', '$telephonenumber', '$email', '$address')";

        $db->query($sql);

        // select what we just inserted to visa beställningsdatum
        $id = $db->insert_id;
        $sql = "SELECT created FROM bestallningar WHERE id = $id";
        $result = $db->query($sql);
        // h?mta result som 'en' associativ array
        $bestallning = $result->fetch_assoc();
        echo "orderdatumet är " . $bestallning['created'];


        // subtract used maskrosor
        $sql = "UPDATE kunder SET dandelions = dandelions - $price WHERE id = $user_id";
        $db->query($sql);

        echo "</section>";

    }

    require_once "footer.php";

    ?>

