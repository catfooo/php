<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gissa ett nummer - bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-image: url(https://picsum.photos/200);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="GET" class="my-3">
          <h1>Gissa ett nummer mellan 10 och 100</h1>
          <input type="number" name="number" class="form-control">
          <input type="submit" value="gissa" class="btn btn-success my-2">
        </form>
        <?php
            if (isset($_GET['number'])) {
                if (!isset($_SESSION['number'])) {
                    $_SESSION['number'] = rand(10, 100);
                    $_SESSION['tries'] = 0;
                }
                
                $_SESSION['tries']++;

                if ($_GET['number']==$_SESSION['number']) {
                    echo '<p class="alert alert-success">Du vann!</p>';
                    echo "Du försökte ";
                    print_r($_SESSION['tries']);
                    echo " gånger!";
                    session_unset();
                } elseif ($_GET['number']>$_SESSION['number']) {
                    echo '<p class="alert alert-danger">Tyvärr. Det var för högt.</p>';
                } else {
                    echo '<p class="alert alert-warning">Tyvärr. Det var för lågt.</p>';
                }
            }
        ?>
    </div>
</body>
</html>