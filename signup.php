<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = htmlspecialchars($_POST['new_username']);
    $new_password = password_hash(htmlspecialchars($_POST['new_password']), PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $new_username, $new_password);

    if ($stmt->execute()) {
        echo "Sign up successful! You can now log in with your username: $new_username";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
