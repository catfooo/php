<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array för böcker</title>
</head>

<body>

    <?php
    $books = array(
        array("Nilla's Kitchen : sju steg till ett friskare jag", " Nilla Gunnarsson", "https://image.bokus.com/images/9789171266545_383x_nillas-kitchen-sju-steg-till-ett-friskare-jag_haftad"),
        array("Fuskbygget : Så knäckte bostadsmarknaden Sverige och världen", "Andreas Cervenka", "https://image.bokus.com/images/9789100803902_383x_fuskbygget-sa-knackte-bostadsmarknaden-sverige-och-varlden"),
        array("Väninnorna på Nordiska Kompaniet", "Ruth Kvarnström-Jones", "https://image.bokus.com/images/9789177718482_383x_vaninnorna-pa-nordiska-kompaniet")
    );

    echo "title: " . $books[0][0] . "<br> author: " . $books[0][1] . "<br><img src='" . $books[0][2] . "'><br>title: " . $books[1][0] . "<br> author: " . $books[1][1] . "<br><img src='" . $books[1][2] . "'><br>title: " . $books[2][0] . "<br> author: " . $books[2][1] . "<br><img src='" . $books[2][2] . "'>";
    ?>

</body>

</html>