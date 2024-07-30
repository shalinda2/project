<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['student-ID'] = $_POST['student-ID'];
    $_SESSION['student-first-name'] = $_POST['student-first-name'];
    $_SESSION['student-last-name'] = $_POST['student-last-name'];
    $_SESSION['student-email'] = $_POST['student-email'];
    $_SESSION['student-phone-number'] = $_POST['student-phone-number'];
    $_SESSION['course'] = $_POST['course'];
    $_SESSION['department'] = $_POST['department'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Ticket - Page 2</title>
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


        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo {
            height: 50px;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin: 0 15px;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }


        .middle-section {
            background-color: #DAE2E6;
            display: flex;
        }

        .form-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            width: 50%;
        }

        .form-container h2 {
            text-align: left;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container label {
            margin: 10px 0 5px;
            font-weight: bold;
        }

        .form-container input,
        .form-container select,
        .form-container textarea {
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            border-radius: 15px;
            border: 2px solid #d1d5db;
        }

        .form-container textarea {
            resize: vertical;
        }

        .image-container {
            width: 75%;
            display: flex;
            align-items: center;
            z-index: 3;
            justify-content: center;
            opacity: 50%;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        .next-button {
            background-color: paleturquoise;
            color: black;
            padding: 10px 30px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            margin-top: 10px;
            border-radius: 15px;
            border: 2px solid #d1d5db;
            text-align: center;
        }

        .button {
            background-color: paleturquoise;
            color: black;
            padding: 10px 30px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            margin-top: 10px;
            border-radius: 15px;
            border: 2px solid #d1d5db;
            text-align: center;
        }

        .right-section nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .right-section nav ul li {
            margin-bottom: 10px;
        }

        .right-section nav ul li a {
            color: #283e4a;
            text-decoration: none;
        }

        .buttons {
            display: flex;
            justify-content: center;
        }

        .right {
            width: 50%;
        }

        .previous {
            background-color: transparent;
            color: black;
            padding: 10px 30px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            margin-top: 10px;
            border-radius: 15px;
            text-align: center;
        }

        .previous img {
            margin-left: 10px;
            width: 16px;
            height: 16px;
        }

        .previous-container {
            display: flex;
            justify-content: flex-end;
        }

        .input-div {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .input-div label {
            margin-right: 10px;
            flex: 1;
            min-width: 150px;
        }

        .input-div .input {
            flex: 2;
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        .container {
            background-color: #DAE2E6;
            padding: 20px;
            width: 80%;
            max-width: 1200px;
            margin: auto;
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

        <div class="welcome-container">
            <div class="middle-section">
                <div class="form-container">
                    <h2>Create Ticket - Page 2</h2>
                    <form action="submit_ticket.php" method="POST">
                        <div class="input-div">
                            <label for="support-area">Support Need Area:</label>
                            <input type="text" id="support-area" name="support-area" required>
                        </div>
                        <div class="input-div">
                            <label for="ticket-description">Description</label>
                            <textarea id="ticket-description" name="ticket-description" rows="4" required></textarea>
                        </div>
                        <div class="input-div">
                            <label for="status">Ticket Status</label>
                            <select id="status" name="status" required>
                                <option value="open">Open</option>
                                <option value="closed">Closed</option>
                                <option value="inprogress">Inprogress</option>
                                <option value="non-attendance">Non-attendance</option>
                            </select>
                        </div>
                        <div class="input-div">
                            <label for="tutor">Assigned Tutor:</label>
                            <input type="text" id="tutor" name="tutor" required>
                        </div>
                        <div class="input-div">
                            <label for="ticket-created">Ticket Created By:</label>
                            <input type="text" id="ticket-created" name="ticket-created" required>
                        </div>
                        <div class="buttons">
                            <button type="submit" class="next-button">
                                Submit
                            </button>
                            <button type="button" class="next-button" onclick="window.location.href='cancel.php';">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
                <div class="right">
                    <div class="image-container">
                        <img src="Images/Data extraction-pana.png" alt="Ticket">
                    </div>
                    <div class="previous-container">
                        <button type="button" class="previous" onclick="window.location.href='create_ticket_1.php';">
                            <img src="Images/back.png" alt="Arrow"> Previous
                        </button>
                    </div>
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