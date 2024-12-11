<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intresseanmälan</title>
</head>

<body>
    <h1>anmäl intresse för den här utbildningen!</h1>
    <form action="" method="post">
        <label for="name">namn</label>
        <input type="text" id="name" name="name" placeholder="namn" required>
        <label for="email">e-post</label>
        <input type="email" id="email" name="email" placeholder="e-post" required>
        <input type="submit" name="submit">
    </form>
    <?php

    if (isset($_POST['submit'])) {
        $db = new mysqli("localhost", "root", "root", "anmalningar");
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sql = "INSERT INTO anmalningar (name, email) VALUES ('$name', '$email')";
        $db->query($sql);
        echo "tack $name($email)!";
    }

    ?>
</body>

</html>