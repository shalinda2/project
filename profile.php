<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - LearnLine</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

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
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .profile-left {
            text-align: center;
            width: 30%;
        }

        .profile-left img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
        }

        .profile-left h1,
        .profile-left p {
            margin: 10px 0;
        }

        .profile-left button {
            background-color: #555;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .profile-left button:hover {
            background-color: #333;
        }

        .profile-right {
            width: 65%;
            background-color: #DAE2E6;
            border-radius: 10px;
            padding: 20px;
            position: relative;
        }

        .profile-right:before {
            content: '';
            position: absolute;
            top: 50%;
            left: -20px;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border: 10px solid transparent;
            border-right-color: #DAE2E6;
        }

        .profile-right p {
            margin: 0;
            font-size: 18px;
            color: #333;
            text-align: left;
        }

       
    </style>
</head>

<body>
    <header>
        <img src="Images/logo.PNG" alt="LearnLine Logo">
        <nav>
            <a href="welcome.php">Home</a>
            <a href="notifications.php">Notifications</a>
            <a href="annuncements.php">Announcements</a>
        </nav>
    </header>

    <div class="container">
        <div class="profile-left">
            <h1>Profile</h1>
            <img src="Images/profile picture.PNG" alt="Profile Picture">
            <h2>Mark Evans</h2>
            <p>M.R.Evans@ljmu.ac.uk</p>
            <button id="editProfileButton">Edit Profile</button>
        </div>
        <div class="profile-right">
            <p>Dr. Mark Evans is a senior lecturer (Software Engineering), School of Computer Science and Mathematics, Liverpool John Moores University.</p>
        </div>
    </div>

    <footer>
    <nav>
            <a href="help_support.php">Help & Support</a>
            <a href="about_us.php">About Us</a>
            <a href="settings.php">Settings</a>
        </nav>
    </footer>

    <script>
        document.getElementById('editProfileButton').onclick = function() {
            window.location.href = 'edit_profile.php';
        };
    </script>
</body>

</html>
