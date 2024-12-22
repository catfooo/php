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