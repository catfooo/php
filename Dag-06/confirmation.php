<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bekräftelse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">   
</head>
<body class="container">
<h1 class="text-primary text-center border-bottom border-primary">Bekräftelse</h1>    

<?php

    echo "<h2>Tack " . $_POST['customer_name'] . "<h2>";
    echo "<h3>Vi kommer att leverea boken till <mark>" . $_POST['customer_address'] . "</mark><h3>";

?>
    
</body>
</html>