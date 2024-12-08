<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kontakt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <h1 class="text-primary">kontakt</h1>
    <form action="confirm.php" method="post">
        
        <div class="row">
            <div class="col-md-6">
                <label for="fname">förnamn</label>
                <input type="text" id="fname" name="customer_firstname" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="lname">efternamn</label>
                <input type="text" id="lname" name="customer_lastname" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="phone">mobiltelefon</label>
                <input type="text" id="phone" name="customer_phone" class="form-control" required><br>
            </div>
            <div class="col-md-6">
                <label for="email">email</label>
                <input type="text" id="email" name="customer_email" class="form-control" required><br>
            </div>
            <div class="col-md-12">
                <label for="message">meddelande</label>
                <textarea id="message" name="message" class="form-control" required></textarea><br>
            </div>
            <div class="col-md-4">
                <input type="submit" name="submit" value="skicka" class="btn btn-primary">
            </div>
        </div>
        
        

        
        
        
    </form>
   

</body>
</html>