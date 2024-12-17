<?php

    // Set the content type to ISO-8859-1 //
    header('Content-Type: text/html; charset=ISO-8859-1');

    // echo "ddd";

    // $items = array(
    //     array("id" => 101, "name" => "br�d", "description" => "�ta n�r hungrig", "price" => 3, "image" => "01.ico",),
    //     array("id" => 102, "name" => "vatten flaska", "description" => "dricka n�r t�rstig", "price" => 2, "image" => "02.ico",),
    //     array("id" => 103, "name" => "t�cke", "description" => "eng�ngst�cke f�r att sova", "price" => 5, "image" => "03.ico",),
    //     array("id" => 104, "name" => "godis", "description" => "n�r man �r ledsen", "price" => 2, "image" => "04.ico",),
    //     array("id" => 105, "name" => "dr�mf�ngare", "description" => "undvik madr�m(eller f� madr�m!)", "price" => 5, "image" => "05.ico",),
    //     array("id" => 106, "name" => "pajama", "description" => "sova lite", "price" => 3, "image" => "06.ico",),
    //     array("id" => 107, "name" => "m�ssa", "description" => "det hj�lper att s�mnar", "price" => 2, "image" => "07.ico",),
    //     array("id" => 108, "name" => "kudde", "description" => "s� mjuk s� sova b�ttre", "price" => 3, "image" => "08.ico",),
    //     array("id" => 109, "name" => "elstad", "description" => "sova varmt", "price" => 2, "image" => "09.ico",),
    //     array("id" => 110, "name" => "hus", "description" => "natt i huset(eng�ng)?", "price" => 10, "image" => "10.ico",),
    // );

    
    require_once "db.php";

    $sql = "SELECT * FROM produkter";
    $result = $db->query($sql);
    $items = $result->fetch_all(MYSQLI_ASSOC);

?>

<!-- <?php
// echo "Maskrosaff?ren vi s?ljer saker f?r maskrosor!";
?> -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <meta charset="utf-8" /> -->
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Maskrosaff?ren</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Maskrosaff?ren</h1>
                    <p class="lead fw-normal text-white-50 mb-0">vi s?ljer saker f?r maskrosor!</p>
                </div>
            </div>
        </header>
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
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><a href="contact.php"><p class="m-0 text-center text-white">Kontakt</p></a></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
