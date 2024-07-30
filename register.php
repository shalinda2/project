<?php
// Include the database configuration file
include 'db_config.php';

// Initialize variables
$error = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted form data
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $role = trim($_POST['role']);
    $contact_number = trim($_POST['contact_number']);

    // Validate form data
    if (empty($username) || empty($password) || empty($confirm_password) || empty($role) || empty($contact_number)) {
        $error = "All fields are required.";
    } elseif ($password != $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if username already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        if ($stmt) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $error = "Username is already taken.";
            } else {
                // Insert new user with contact number
                $stmt = $conn->prepare("INSERT INTO users (username, password, role, contact_number) VALUES (?, ?, ?, ?)");
                if ($stmt) {
                    $stmt->bind_param("ssss", $username, $hashed_password, $role, $contact_number);

                    if ($stmt->execute()) {
                        $success = "Registration successful! You can now <a href='login.php'>login</a>.";
                    } else {
                        $error = "Error executing query: " . $stmt->error;
                    }
                } else {
                    $error = "Error preparing insert query: " . $conn->error;
                }
            }

            $stmt->close();
        } else {
            $error = "Error preparing select query: " . $conn->error;
        }
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
            <img src="Images/Login-pana.png" alt="Registration Image" class="registration-image">
        </div>
        <div class="right-section">
            <div class="logo-container">
                <img src="Images/logo.PNG" alt="LearnLine Logo" class="logo">
            </div>
            <h2>REGISTER</h2>
            <?php if ($error) echo "<p class='error'>$error</p>"; ?>
            <?php if ($success) echo "<p class='success'>$success</p>"; ?>
            <form action="register.php" method="post" class="register-form">
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" id="contact_number" name="contact_number" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>

                <div class="reg-role">
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select id="role" name="role" required>
                            <option value="helpdesk">Help Desk</option>
                            <option value="lecturer">Lecturer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <select id="position" name="position" required>
                            <option value="helpdesk">Adjunct Lecturer</option>
                            <option value="lecturer">Lecturer</option>
                            <option value="lecturer">Senior Lecturer</option>
                            <option value="lecturer">Assistant Professor</option>
                            <option value="lecturer">Associate Professor</option>
                            <option value="lecturer">Full Professor</option>
                            <option value="lecturer">Teaching Professor</option>
                            <option value="lecturer">Clinical Professor</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btnR">Register</button>
            </form>
            <p class="login-link">Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>

</html>