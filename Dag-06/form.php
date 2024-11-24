<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beställning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body class="container">
<h1 class="text-primary text-center border-bottom border-primary">Beställning</h1>    

<h2>Du har beställt bok nr: <?php echo $_GET['id']; ?></h2>
<h3>Fyll i leveransinformation</h3>

<form action="confirmation.php" method="POST">

    <label for="customer_name">Namn </label>
    <input id="customer_name" type="text" name="customer_name" class="form-control mb-3">

    <label for="customer_address">Adress </label>
    <input id="customer_address" type="text" name="customer_address" class="form-control mb-3">

    <input type="submit" value="Skicka beställningen" class="btn btn-primary">
</form>



</body>
</html>