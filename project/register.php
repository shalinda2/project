<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Passwords do not match";
    }

    $conn->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - LearnLine</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="register-container container">
        <div class="left-section">
            <img src="Images\Login-pana.png" alt="Registration Image" class="registration-image">
        </div>
        <div class="right-section">
            <div class="logo-container">
                <img src="Images\logo.PNG" alt="LearnLine Logo" class="logo">
            </div>
            <h2>REGISTER</h2>
            <form action="register.php" method="post" class="register-form">
                <div class="form-group">
                    <label for="username">User Name</label>
                    
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <button type="submit" class="btnR">Register</button>
            </form>
            <p class="login-link">Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>
