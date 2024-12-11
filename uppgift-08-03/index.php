<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inköpslista</title>
</head>
<body>
    <h1>inköpslista</h1>
    <h2>vad vill du handla idag?</h2>
    <form action="" method="post">
        <input type="text" name="item">
        <input type="submit" name="submit" value="lägg till">
    </form>
    <?php

        $db = new mysqli("localhost", "root", "root", "items");
        if (isset($_POST['submit'])) {
            $item = $_POST['item'];
            $sql = "INSERT INTO items (item) VALUES ('$item')";
            $db->query($sql);
        }

        $result = $db->query("SELECT * FROM items");
        if ($result) {
            $items = $result->fetch_all(MYSQLI_ASSOC);
            // print_r($items);
            echo "<ul>";
            foreach ($items as $item) {
                echo "<li>" . $item['item'] . "</li>";
            }
            echo "</ul>";
        }

    ?>
</body>
</html>