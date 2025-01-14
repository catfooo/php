<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontaktformul�r</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <h1 class="text-primary">Kontaktformul�r</h1>
    <img src="assets/70469440.png">
    <p>vi ska visa världen genom era webbläsare</p>
    <form action="confirm.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <label for="firstname">f�rnamn</label>
                <input type="text" id="firstname" name="firstname" required placeholder="f�rnamn" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="lastname">efternamn</label>
                <input type="text" id="lastname" name="lastname" required placeholder="efternamn" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="phone">telefonnummer</label>
                <input type="text" id="phone" name="phone" required placeholder="telefonnummer" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="email">e-post</label>
                <input type="email" id="email" name="email" required placeholder="e-post"
                class="form-control">
            </div>
            <div class="col-md-12">
                <label for="message">meddelande</label>
                <textarea name="message" id="message" required placeholder="skriv ett meddelande" class="form-control"></textarea>
            </div>
            <div class="col-md-4">
                <input type="submit" name="submit" value="skicka meddelandet" class="btn btn-primary">
            </div>
        </div>
    </form>
</body>
</html>