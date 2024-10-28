<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        Vad heter du?:
        <input name="fname">
        <input type="submit">
    </form>
    <?php
       if (isset($_GET['fname'])) {
        echo "Hej $_GET[fname]";
       }
    ?>
</body>
</html>