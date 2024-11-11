<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gissa ett nummer</title>
</head>
<body>
    <h2>Gissa ett nummer</h2>
    <form action="" method="GET">
        <input type="number" name="nummer">
        <input type="submit" value="gissa">
    </form>
    <?php
        if(isset($_GET['nummer'])){
            if($_GET['nummer']==100){
                echo "Du vann!";
            } elseif ($_GET['nummer']>100){
                echo "Tyvärr. Det var för högt.";
            } else {
                echo "Tyvarr. Det var för lågt.";
            }
        }
    ?>
</body>
</html>