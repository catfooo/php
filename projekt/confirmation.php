<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bekräftelse</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body class="container">
    <h1 class="text-primary primary-center border-bottom border-primary">bekräftelse</h1>

    <?php
        echo "<h2>tack " . $_POST['name'] . "</h2>";
        echo "<h3>vi kommer att leverera produkten till " . $_POST['address'] . "</h3>";
    ?>
    
</body>
</html>