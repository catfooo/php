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
    <h1 class="text-primary text-center border-bottom border-primary">bekräftelse</h1>

    <?php
    ini_set('display_errors', 1);

    if (isset($_POST['submit'])) {
        // databasuppkoppling
        // require_once 'db.php';
        $db = new mysqli("localhost", "ro00ot", "root", "projekt");

        // quit if failed
        if ($db->connect_error) {
            echo "kunde inte koppla till databas";
            die();
        }

        echo "<h2>tack " . $_POST['name'] . "</h2>";
        echo "<h3>ditt telefonnummer är " . $_POST['telephonenumber'] . "</h3>";
        echo "<h3>ditt email är " . $_POST['email'] . "</h3>";
        echo "<h3>vi kommer att leverera produkten till " . $_POST['address'] . "</h3>";
    }

    ?>

</body>

</html>