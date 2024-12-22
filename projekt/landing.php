<!-- Step 2: Update Your Site's Entry Point
Set welcome.php as the initial page your users see when visiting the site. You can achieve this by ensuring welcome.php is set as the default in your web server configuration. For example:

For Apache:

Modify your .htaccess file:

DirectoryIndex welcome.php -->


<?php

    require_once 'db.php';

    // kopplande msg
    if (!$db->connect_error) {
        echo "hej";
        
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vandrar</title>
</head>
<body>
    <script>
        window.onload() = function() {
            setTimeout(() => {
                location.href = "http://212.18.224.194/~okt2404/projekt/index.php";
            }, 5000);
        }
    </script>
</body>
</html>