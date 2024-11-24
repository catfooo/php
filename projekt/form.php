<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beställning</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body class="container">
    <h1 class="text-primary text-center border-bottom border-primary">beställning</h1>
    <h2>du har beställt produkt nr: <?php echo $_GET['id'] ?></h2>
    <h3>vart ska vi leverera?</h3>

    <form action="confirmation.php" method="POST">
        <label for="name">namn </label>
        <input id="name" type="text" name="name" class="form-control mb-3">
        <label for="address">address </label>
        <input id="address" type="text" name="address" class="form-control mb-3">
        <input type="submit" class="btn btn-primary">
    </form>
    
</body>
</html>