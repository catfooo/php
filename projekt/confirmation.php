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
    

    if (isset($_POST['submit'])) {
        // databasuppkoppling
        require_once 'db.php';

        // h?mta fr?n form.php
        $articlenumber = $_POST['id'];
        $name = $_POST['name'];
        $telephonenumber = $_POST['telephonenumber'];
        $email = $_POST['email'];
        $address = $_POST['address'];

      
        
        echo "<h2>tack $name, du beställde produkt nr $articlenumber</h2>";
        echo "<h3>ditt telefonnummer är $telephonenumber</h3>";
        echo "<h3>ditt email är $email</h3>";
        echo "<h3>vi kommer att leverera produkten till $address</h3>";

        $sql = "INSERT INTO bestallningar (articlenumber, name, telephonenumber, email, address)
                VALUES ('$articlenumber', '$name', '$telephonenumber', '$email', '$address')";

        $db->query($sql);

    }

    ?>

</body>

</html>