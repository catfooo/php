<?php

if (isset($_POST['submit'])) {
    $db = new mysqli("localhost", "root", "root", "newslist2");
    $customer_email = $_POST['customer_email'];
    $sql = "INSERT INTO emails (email) VALUES ('$customer_email')";
    $db->query($sql);
    echo "<h2>Tack $customer_email </h2>";
}

?>