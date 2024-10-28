<!--En nyckel (key) och ett valfritt värde (value) kan skickas via URLen t.ex. http://localhost/index.php?name=kiki-->

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
       echo $_GET['name']
    ?>
</body>
</html>