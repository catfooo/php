<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tre identiska tärningar</title>
</head>
<body>
    <form method="GET">
        <input type="submit" name="dice1" value="slå den första">
        <br>
        <input type="submit" name="dice2" value="slå den andra">
        <br>
        <input type="submit" name="dice3" value="slå den tredje">
    </form>
    <?php
      if (isset($_GET['dice1']) && !isset($_SESSION['dice1'])) {
        $_SESSION['dice1'] = rand(1,3);
        echo "den första är " . $_SESSION['dice1'];
      }
      if (isset($_GET['dice2']) && !isset($_SESSION['dice2']) ) {
        $_SESSION['dice2'] = rand(1,3);
        echo "den andra är " . $_SESSION['dice2'];
      }
      if (isset($_GET['dice3']) && !isset($_SESSION['dice3']) ) {
        $_SESSION['dice3'] = rand(1,3);
        echo "den tredje är " . $_SESSION['dice3'];
      }
      if (isset($_SESSION['dice1']) && isset($_SESSION['dice2']) && isset($_SESSION['dice3'])) {
          if ($_SESSION['dice1']==$_SESSION['dice2'] && $_SESSION['dice2']==$_SESSION['dice3']) {
            echo "<br>Du vann!";
            session_unset();
          } else {
            echo "<br>Du förlorade!";
            session_unset();
          }
      }
    ?>
</body>
</html>