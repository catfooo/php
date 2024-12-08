<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dd</title>
</head>
<body>
    <h1>kontakt</h1>

    <form action="kontakt.php" method="post">
        <label for="name">namn</label>
        <input type="text" id="name" name="customer_name" required><br>

        <label for="email">email</label>
        <input type="text" id="email" name="customer_email" required><br>

        <label for="message">meddelande</label>
        <textarea id="message" name="message" required></textarea><br>

        <input type="submit" value="skicka">
    </form>
</body>
</html>