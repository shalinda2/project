<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - LearnLine</title>
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

        .profile-right {
            width: 65%;
            background-color: #DAE2E6;
            border-radius: 10px;
            padding: 20px;
            position: relative;
        }

       
        .profile-right p {
            margin: 0;
            font-size: 18px;
            color: #333;
            text-align: left;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: calc(100% - 22px);
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form-buttons {
            margin-top: 20px;
            display: flex;
            justify-content: flex-end;
        }

        .form-buttons button {
            background-color: #555;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .form-buttons button:hover {
            background-color: #333;
        }

        footer {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .main{
            display: flex;
            justify-content: center;
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
        <div class="main">
           
            <div class="profile-right">
                <form action="save-profile.php" method="post">
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
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" id="contact_number" name="contact_number" required>
                    </div>
                    <div class="form-buttons">
                        <button type="submit">Save</button>
                        <button type="button" onclick="window.history.back();">Cancel</button>
                    </div>
                </form>
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