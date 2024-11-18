<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Böcker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    
<?php
    $books = array(array("Python från början", "Jan Skansholm", "https://bilder.akademibokhandeln.se/images_akb/9789144187617_200/python-fran-borjan"), array("SQL-introduktion", "Mikael Segerlund", "https://bilder.akademibokhandeln.se/images_akb/9789186536411_200/sql-introduktion"), array("Java - steg för steg", "Jan Skansholm", "https://bilder.akademibokhandeln.se/images_akb/9789144150789_200/java-steg-for-steg"));

    echo "<table class='table'>";
    echo "<tr>
              <th>titel</th>
              <th>författare</th>
              <th>bild</th>
          </tr>";
    foreach ($books as $book) {
        echo "<tr>";
        echo "<td>$book[0]</td>";
        echo "<td>$book[1]</td>";
        echo "<td><img src='$book[2]'></td>";
        echo "</tr>";
    }

    echo "</table>";
?>

</body>
</html>