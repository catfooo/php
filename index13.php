<!-- what would happen to send.php here?(made by gpt)
<form action="send.php" method="POST"> -->

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data using POST method
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Example: Sending the form data via email
    $to = "your-email@example.com";
    $subject = "New Message from $name";
    $body = "You have received a new message:\n\nName: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // If email is sent successfully, display a success message
        echo "<p>Thank you for your message, $name. We will get back to you shortly!</p>";
    } else {
        // If the email sending fails, show an error
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
}
?>
