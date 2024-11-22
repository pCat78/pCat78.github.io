<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $content = htmlspecialchars($_POST['content']);

    $to = 'maua@purdue.edu'; 
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $message = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$content";


    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us, $name. We will get back to you shortly.";
    } else {
        echo "Sorry, an error occurred. Please try again later.";
    }
}
?>
