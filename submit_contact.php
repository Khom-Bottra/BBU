<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // You can process the form data here (e.g., save it to a database, send an email, etc.)

    echo "<h1>Thank you, $name!</h1>";
    echo "<p>We have received your message and will get back to you shortly.</p>";
    echo "<a href='index.php'>Go back to home page</a>";
} else {
    echo "<h1>Invalid Request</h1>";
    echo "<a href='index.php'>Go back to home page</a>";
}
?>
