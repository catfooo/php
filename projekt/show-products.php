<?php

    // Set the content type to ISO-8859-1 //
    header('Content-Type: text/html; charset=ISO-8859-1');

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

    $sql = "SELECT * FROM produkter";
    $result = $db->query($sql);
    $items = $result->fetch_all(MYSQLI_ASSOC);

?>
<!-- Section-->
<section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 justify-content-center">
                    <?php foreach($items as $item){?>            
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/<?php echo $item["bildnamn"]?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $item["produktnamn"]?></h5>
                                    <p class="card-text"><?php echo $item["beskrivning"]?></p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="form.php?id=<?php echo $item["id"]?>"><?php echo $item["pris"]?> <span>maskrosor</span></a></div>
                            </div>
                        </div> <!-- card -->
                    </div> <!-- col -->

                <?php
                    } // foreach
                ?>
                    
                </div> <!-- row -->
            </div>
        </section>