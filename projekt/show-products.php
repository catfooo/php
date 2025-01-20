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

 // Normalize encoding for all items
foreach ($items as &$item) {
    if (isset($item['produktnamn']) && !empty($item['produktnamn'])) {
        if (!mb_check_encoding($item['produktnamn'], 'UTF-8')) {
            $item['produktnamn'] = mb_convert_encoding($item['produktnamn'], 'UTF-8', 'ISO-8859-1');
        }
    }

    if (isset($item['beskrivning']) && !empty($item['beskrivning'])) {
        if (!mb_check_encoding($item['beskrivning'], 'UTF-8')) {
            $item['beskrivning'] = mb_convert_encoding($item['beskrivning'], 'UTF-8', 'ISO-8859-1');
        }
    }
}


?>
<!-- carousel -->
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
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