<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - LearnLine</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header,
        footer {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header img {
            width: 150px;
        }

        nav a {
            color: #333;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #DAE2E6;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .settings-option {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }

        .settings-option img {
            width: 50px;
            height: 50px;
            margin-right: 20px;
        }

        .settings-option h2 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }

        .settings-option p {
            margin: 5px 0 0 0;
            color: #666;
        }

        footer nav {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        footer nav a {
            color: #333;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <img src="Images/logo.PNG" alt="LearnLine Logo">
        <nav>
            <a href="welcome.php">Home</a>
            <a href="notifications.php">Notifications</a>
            <a href="announcements.php">Announcements</a>
        </nav>
    </header>

    <div class="container">
        <h1>Settings</h1>
        <div class="settings-option">
            <img src="user-profile-icon.png" alt="User Profile">
            <div>
                <h2>User Profile</h2>
                <p>Manage your personal information and settings.</p>
            </div>
        </div>
        <div class="settings-option">
            <img src="notification-settings-icon.png" alt="Notification Settings">
            <div>
                <h2>Notification Settings</h2>
                <p>Set your notification preferences and email alerts.</p>
            </div>
        </div>
        <div class="settings-option">
            <img src="privacy-settings-icon.png" alt="Privacy Settings">
            <div>
                <h2>Privacy Settings</h2>
                <p>Control your data and privacy settings.</p>
            </div>
        </div>
        <div class="settings-option">
            <img src="system-settings-icon.png" alt="System Settings">
            <div>
                <h2>System Settings</h2>
                <p>Manage system settings and configurations.</p>
            </div>
        </div>
    </div>

    <footer>
        <nav>
            <a href="help_support.php">Help & Support</a>
            <a href="about_us.php">About Us</a>
            <a href="settings.php">Settings</a>
        </nav>
    </footer>

</body>

</html>
