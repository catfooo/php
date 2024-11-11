<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gissa ett nummer</title>
</head>
<body>
    <form method="GET">
        <h1>Gissa ett nummer</h1>
        <input type="number" name="number">
        <input type="submit" value="gissa">
    </form>
    <?php
      if (isset($_GET['number'])) {
          if ($_GET['number']==90) {
            echo "Du vann!";
          } elseif ($_GET['number']>90) {
            echo "Tyvärr. Det var för högt.";
          } else {
            echo "Tyvärr. Det var för lågt.";
          }
      }
    ?>
</body>
</html>