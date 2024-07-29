<?php
include 'db_config.php';
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        $error_message = "User Name is empty";
    } elseif (empty($password)) {
        $error_message = "Password is empty";
    } else {
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                header("Location: welcome.php");
                exit();
            } else {
                $error_message = "Password is incorrect";
            }
        } else {
            $error_message = "User name is incorrect";
        }

        $stmt->close();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LearnLine</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container container">
        <div class="left-section">
            <img src="Images/Learning-pana.png" alt="Login Image" class="login-image">
        </div>
        <div class="right-section">
            <div class="logo-container">
                <img src="Images/logo.PNG" alt="LearnLine Logo" class="logo">
            </div>
            <h2>LOGIN</h2>
            <?php if (!empty($error_message)): ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <form action="login.php" method="post" class="login-form">
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btnR">Login</button>
            </form>
            <div class="social-login">
                <a href="#"><img src="Images/google.png" alt="Google Login"></a>
                <a href="#"><img src="Images/facebook.png" alt="Facebook Login"></a>
                <a href="#"><img src="Images/apple-logo.png" alt="Apple Login"></a>
            </div>
            <p class="register-link">Do not have an account? <a href="register.php">Register</a></p>
        </div>
    </div>
</body>
</html>
