<?php

    session_start();
    
    // Set the content type to ISO-8859-1 //
    //header('Content-Type: text/html; charset=ISO-8859-1');
    //header('Content-Type: text/html; charset=UTF-8');// makes no change


    // echo "ddd";

    // $items = array(
    //     array("id" => 101, "name" => "bröd", "description" => "äta när hungrig", "price" => 3, "image" => "01.ico",),
    //     array("id" => 102, "name" => "vatten flaska", "description" => "dricka när törstig", "price" => 2, "image" => "02.ico",),
    //     array("id" => 103, "name" => "täcke", "description" => "engångstäcke för att sova", "price" => 5, "image" => "03.ico",),
    //     array("id" => 104, "name" => "godis", "description" => "när man är ledsen", "price" => 2, "image" => "04.ico",),
    //     array("id" => 105, "name" => "drömfångare", "description" => "undvik madröm(eller få madröm!)", "price" => 5, "image" => "05.ico",),
    //     array("id" => 106, "name" => "pajama", "description" => "sova lite", "price" => 3, "image" => "06.ico",),
    //     array("id" => 107, "name" => "mössa", "description" => "det hjälper att sömnar", "price" => 2, "image" => "07.ico",),
    //     array("id" => 108, "name" => "kudde", "description" => "så mjuk så sova bättre", "price" => 3, "image" => "08.ico",),
    //     array("id" => 109, "name" => "elstad", "description" => "sova varmt", "price" => 2, "image" => "09.ico",),
    //     array("id" => 110, "name" => "hus", "description" => "natt i huset(engång)?", "price" => 10, "image" => "10.ico",),
    // );

    
    require_once "db.php";

    // retrive the user info
    if (!isset($_SESSION['user_id'])) {
        echo "om du vill ha maskrosor, logga in";        
    } else {
        $user_id = $_SESSION['user_id'];
        $result = $db->query("SELECT * FROM kunder WHERE id = $user_id");
        $user = $result->fetch_assoc();
        echo "välkommen " . $user['name'];        
    }

    $sql = "SELECT * FROM produkter";
    $result = $db->query($sql);
    $items = $result->fetch_all(MYSQLI_ASSOC);

    // // Debug encoding for each row
    // echo '<pre>';
    // foreach ($items as $item) {
    //     echo "Produktnamn Encoding: " . mb_detect_encoding($item['produktnamn'], mb_detect_order(), true) . PHP_EOL;
    //     echo "Beskrivning Encoding: " . mb_detect_encoding($item['beskrivning'], mb_detect_order(), true) . PHP_EOL;
    // }
    // echo '</pre>';

    // Normalize encoding for all items//
foreach ($items as &$item) {
    $item['produktnamn'] = mb_convert_encoding($item['produktnamn'], 'UTF-8', 'auto');
    $item['beskrivning'] = mb_convert_encoding($item['beskrivning'], 'UTF-8', 'auto');
}

?>
<!-- Section-->
<section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 justify-content-center">
                    <?php foreach($items as $item){          
                    
                        require "show-product.php";

                
                    } // foreach
                ?>
                    
                </div> <!-- row -->
            </div>
        </section>