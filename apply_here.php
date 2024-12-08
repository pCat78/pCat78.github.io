<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $business_name = htmlspecialchars($_POST['business_name']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $description = htmlspecialchars($_POST['description']);

    // Email settings
    $to = 'your-email@example.com'; // Change this to your email
    $subject = 'New Application Submission';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $message = "Business Name: $business_name\nName: $name\nEmail: $email\nPhone: $phone\n\nDescription:\n$description";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for applying, $name. We will review your application and get back to you shortly.";
    } else {
        echo "Sorry, an error occurred. Please try again later.";
    }
}
?>