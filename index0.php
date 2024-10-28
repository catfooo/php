<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="?id=1">produkt 1</a>
    <a href="?id=2">produkt 2</a>
    <hr>
    <?php
       if (isset($_GET['id'])) {
        echo "Här kommer info om produkt nr $_GET[id]";
       } else {
        echo "Valj en produkt";
       }
       
    ?>
</body>
</html>