<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Display the submitted data (you can modify this part to suit your needs)
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message <br>";
} else {
    // If the form is not submitted, redirect to the contact page
    header("Location: /#contact");
    exit();
}
?>