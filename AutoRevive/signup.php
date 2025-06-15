<?php
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $mobile = trim($_POST["mobile"]);
    $address = trim($_POST["address"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate inputs
    if ($password !== $confirm_password) {
        echo "❌ Passwords do not match!";
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Connect to database
    $db = getConnection();

    // Check if email already exists
    $stmt = $db->prepare("SELECT id FROM users WHERE email = :email");
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $result = $stmt->execute();

    if ($result->fetchArray()) {
        echo "⚠️ Email already registered. <a href='login.html'>Login</a>";
    } else {
        // Insert user
        $stmt = $db->prepare("INSERT INTO users (name, email, password, mobile, address) VALUES (:name, :email, :password, :mobile, :address)");
        $stmt->bindValue(':name', $name, SQLITE3_TEXT);
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
        $stmt->bindValue(':password', $hashed_password, SQLITE3_TEXT);
        $stmt->bindValue(':mobile', $mobile, SQLITE3_TEXT);
        $stmt->bindValue(':address', $address, SQLITE3_TEXT);

        if ($stmt->execute()) {
            echo "✅ Account created successfully. <a href='login.html'>Login now</a>";
        } else {
            echo "❌ Failed to create account. Please try again.";
        }
    }

    $db->close();
}
?>
