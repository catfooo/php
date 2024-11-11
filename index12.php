<!DOCTYPE html>
<html>
<body>

<form method="POST">
    <input name="name">
    <input type="submit" name="submit">
</form>

<?php
  
    if(isset($_POST['submit'])){
        echo "Hej $_POST[name]";
    
    }


?>

</body>
</html>
