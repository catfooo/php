<?php
    
    // ini_set('display_errors', 1); // Show errors in the browser

    $db = new mysqli("localhost", "root", "", "myDB20241203135749");
    $sql = "INSERT INTO myTable20241203145907 (firstname, lastname, email) 
            VALUES ('rr', 'rr', 'rr@rr')";
    if ($db->query($sql)) {
        $id = $db->insert_id; // Get the ID of the last inserted row
        // Fetch the inserted row using the ID
        $result = $db->query("SELECT firstname, lastname, email FROM myTable20241203145907 WHERE id = $id");
        print_r($result->fetch_assoc());
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

    $sql = "SELECT * FROM myTable20241203145907";
    $result = $db->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo $row;
    }

?>