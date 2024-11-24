<?php

    echo "ddd";

    $items = array(
        array("id" => 01, "name" => "bröd", "description" => "äta när hungrig", "price" => 3, "image" => "01.ico",),
        array("id" => 02, "name" => "vatten flaska", "description" => "dricka när törstig", "price" => 2, "image" => "02.ico",),
        array("id" => 03, "name" => "täcke", "description" => "engångstäcke för att sova", "price" => 5, "image" => "03.ico",),
    );

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Maskrosaffären</h1>
                    <p class="lead fw-normal text-white-50 mb-0">vi säljer saker för maskros!</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 justify-content-center">
                    <?php foreach($items as $item){?>            
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/<?php echo $item["image"]?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $item["name"]?></h5>
                                    <p class="card-text"><?php echo $item["description"]?></p>
                                    <!-- Product price-->
                                    <?php echo $item["price"]?>maskros
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div> <!-- card -->
                    </div> <!-- col -->

                <?php
                    } // foreach
                ?>
                    
                </div> <!-- row -->
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyleft &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
