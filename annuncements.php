<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements - LearnLine</title>
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

        .announcement {
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }

        .announcement h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .announcement p {
            margin: 5px 0;
            color: #666;
        }

        .announcement .date {
            font-size: 14px;
            color: #999;
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
        <h1>Announcements</h1>
        <div class="announcement">
            <h2>New Course Available: Advanced PHP</h2>
            <p class="date">July 28, 2024</p>
            <p>We are excited to announce a new course on Advanced PHP. This course is designed for developers looking to enhance their skills in PHP development, covering topics like security, performance optimization, and modern PHP frameworks.</p>
        </div>
        <div class="announcement">
            <h2>Scheduled Maintenance on August 1, 2024</h2>
            <p class="date">July 25, 2024</p>
            <p>Our platform will undergo scheduled maintenance on August 1, 2024, from 2:00 AM to 4:00 AM. During this time, the website will be unavailable. We apologize for any inconvenience this may cause and appreciate your understanding.</p>
        </div>
        <div class="announcement">
            <h2>New Feature: Dark Mode</h2>
            <p class="date">July 20, 2024</p>
            <p>We have added a new Dark Mode feature to our platform! You can now switch between light and dark themes to reduce eye strain and enhance your viewing experience. Find the toggle in your account settings.</p>
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
