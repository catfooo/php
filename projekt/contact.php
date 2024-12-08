<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontaktformulär</title>
</head>
<body>
    <h1>Kontaktformulär</h1>
    <form action="confirm.php" method="post">
        <label for="firstname">förnamn</label>
        <input type="text" id="firstname" name="firstname" required placeholder="förnamn"><br>
        <label for="lastname">efternamn</label>
        <input type="text" id="lastname" name="lastname" required placeholder="efternamn"><br>
        <label for="phone">telefonnummer</label>
        <input type="text" id="phone" name="phone" required placeholder="telefonnummer"><br>
        <label for="email">e-post</label>
        <input type="email" id="email" name="email" required placeholder="e-post"><br>
        <label for="message">meddelande</label>
        <textarea name="message" id="message" required placeholder="skriv ett meddelande"></textarea><br>
        <input type="submit" name="submit" value="skicka meddelandet">
    </form>
</body>
</html>