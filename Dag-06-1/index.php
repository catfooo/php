<?php

    // echo "<h1>ddd</h1>";

    $books = "Bok 1";
    // echo $books;

    $books = array(
       
        array(
            "id" => 1,
            "title" =>"Webbutveckling med PHP och MySQL", 
            "description" => "PHP är ett av de ledande programmeringsspråken för webbutveckling. Det är ett flexibelt och enkelt språk som används för att skapa dyna miska webbplatser. Denna bok ger en lättillgänglig introduktion till PHP och databashantering. Läsaren får den kunskap som krävs för att snabbt utveckla egna webbapplikationer.", 
            "price" => 400, 
            "image" => "webbutveckling-med-php-och-mysql_haftad.jpeg"
        ),
        
        array(
            "id" => 2,
            "title" =>"Introduktion till HTML och CSS", 
            "description" => "Introduktion till HTML och CSS är avsedd att snabbt ge den kunskap som krävs för att utveckla webbsidor. Boken har mängder med exempel och övningar varvat med utförliga teoretiska delar. Den kan användas både för studier i ämnet eller som kurslitteratur vid högskola, yrkeshögskola eller i gymnasieskolan. Den fungerar också utmärkt som referens för att enkelt påminna sig exempelvis om en viss regel.", 
            "price" => 465, 
            "image" => "introduktion-till-html-och-css_haftad.jpeg"
        ),
      
        array(
            "id" => 3,
            "title" =>"PHP & MySQL", 
            "description" => "Apply bestselling author Jon Duckett's engaging and innovative style to learning PHP and MySQL Learn PHP, the programming language used to build sites like Facebook, Wikipedia and WordPress, then discover how these sites store information in a database (MySQL) and use the database to create the web pages. This full-color book is packed with inspiring code examples, infographics and photography that not only teach you the PHP language and how to work with databases, but also show you how to build new applications from scratch.", 
            "price" => 472, 
            "image" => "php-mysql.jpeg"
        ),
    ); // $books array

    // echo "<pre>";
    // print_r ($books);
    // echo "</pre>";

    //echo $books["book_001"]["price"]; // pris 
    // skriv ut filnamnet på den första bilden
    //echo $books["book_001"]["image"];

    // die();

    // skriv ut alla titlar

    /*foreach($books as $book){
        echo $book["title"] . "<br>";
        echo $book["description"] . "<br>";
        echo $book["price"] . "kr<br>";
        echo $book["image"] . "<br>";
    }*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>repetition</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="container">
    <h1 class="text-primary text-center border-bottom border-primary">my library</h1>

    <div class="row">
        <?php

foreach($books as $book){
   

    ?>


<div class="col-md-4 col-sm-6 mb-3">
            <div class="card">
                <img src="images/<?php echo $book["image"]; ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $book["image"]; ?></h5>
                    <p class="card-text"><?php echo $book["description"]; ?></p>
                    <a href="form.php?id=<?php echo $book["id"]; ?>" class="btn btn-primary"><?php echo $book["price"]; ?>kr</a>
                </div>
            </div><!--card-->
        </div><!--col-->
        
<?php
} // foreach // eller endforeach
?>

    </div><!--row-->
</body>

</html>