<?php
    
    require_once "header.php";

    
    // visa bekräftelse
    // folkuniversitet progr 1
    echo "<h2 class='alert alert-success my-5 py-5 text-primary text-center'>tack</h2>";
    
    // spara bekräftelse i databasen
    // print_r($_POST);

    require_once "db.php";
    
    // skapa en sql-sats

    // kör satsen
    // visa bekräftelse (visa ordernummer)

    // echo "ditt ordernummer : " //. $db->insert_id;
    //https://www.w3schools.com/php/php_mysql_insert.asp
    // tips! hämta last inserted id från databasen
    // https://www.w3schools.com/php/php_mysql_insert_lastid.asp

    $artikelnummer = $_POST['id'];
    $customer_email = $_POST['customer_email'];

    $sql = "INSERT INTO orders (artikelnummer, customer_email) VALUE ('$artikelnummer', '$customer_email')";

    $db->query($sql);

    $last_id = $db->insert_id;
    echo "ditt ordernumer: $last_id";
    
    require_once "footer.php";
    
?>