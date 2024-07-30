<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details - LearnLine</title>
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
            background-color: #DAE2E6;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .outer-div {
            display: flex;
            justify-content: space-between;
        }

        .left,
        .right {
            width: 48%;
        }

        .inner-div {
            display: flex;
            margin-bottom: 10px;
        }

        .p-title {
            font-weight: bold;
            width: 200px;
            color: #555;
        }

        .p-details {
            color: #333;
        }

        .image {
            text-align: center;
            margin-top: 20px;
        }

        .image img {
            max-width: 100%;
            height: auto;
            opacity: 0.5;
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
        <h1>Details</h1>
        <div class="outer-div">
            <div class="left">
                <div class="inner-div">
                    <p class="p-title">Student ID:</p>
                    <p class="p-details">1082991</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Student First Name:</p>
                    <p class="p-details">Dulmini</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Student Last Name:</p>
                    <p class="p-details">De Alvis</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Student E-mail Address:</p>
                    <p class="p-details">csmadeal@ljmu.ac.uk</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Student Phone Number:</p>
                    <p class="p-details">0112345698</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Course:</p>
                    <p class="p-details">Computing and Information Systems</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Department:</p>
                    <p class="p-details">Engineering</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Support Needed Area:</p>
                    <p class="p-details">Java Programming Language</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Description:</p>
                    <p class="p-details">Student needs support for Java arrays</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Ticket created by:</p>
                    <p class="p-details">Dr. Rubem Perera</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Ticket Status:</p>
                    <p class="p-details">Closed</p>
                </div>
            </div>

            <div class="right">
                <div class="inner-div">
                    <p class="p-title">Comment:</p>
                    <p class="p-details">Provided support with Java arrays</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Ticket ID:</p>
                    <p class="p-details">IN00001</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Accepted By:</p>
                    <p class="p-details">Dr. Mark Taylor</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Closed By:</p>
                    <p class="p-details">Dr. Mark Taylor</p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Meeting Date & Time:</p>
                    <p class="p-details">25/05/2024 <span>12:00:00</span></p>
                </div>
                <div class="inner-div">
                    <p class="p-title">Meeting Location:</p>
                    <p class="p-details">Room No: 616 - Byrom Street Building</p>
                </div>
                <div class="image">
                    <img src="Images/Contact us-pana.png" alt="Contact us illustration">
                </div>
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