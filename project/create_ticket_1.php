<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Ticket - LearnLine</title>
    <link rel="stylesheet" href="common.css">
    <style>
        .welcome-container {
            max-width: 1200px;
            margin: auto;
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

        .nav-links a:hover {
            text-decoration: underline;
        }

        .ticket-main {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            height: calc(120vh - 100px);
        }

        .form-container {
            width: 75%;
        }

        .form-container h2 {
            text-align: left;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .form-group label {
            margin-right: 10px;
            flex: 1;
            min-width: 150px; 
        }

        .form-group .input {
            flex: 2;
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        .image-container {
            width: 50%;
            display: flex;
            align-items: center;
            z-index: 3;
            justify-content: center;
            opacity: 50%;
        }

        .image-container img {
            max-width: 80%;
            height: auto;
        }

        .next-button {
            background-color: transparent;
            color: black;
            padding: 10px 30px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: flex-end;
        }

        .next-button img {
            margin-left: 10px;
            width: 16px;
            height: 16px;
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

        #sec1 {
            background-color: #DAE2E6;
            padding: 20px;
        }

        #sec1_main {
            display: flex;
        }

        .submit {
            display: flex;
            justify-content: flex-end;
        }

        .input {
            width: 100%;
            padding: 0.5rem 0.75rem;
            border-radius: 15px;
            border: 2px solid #d1d5db;
            margin-bottom: 0.75rem;
            box-sizing: border-box;
            width: 70%;
        }

        
        
    </style>
</head>

<body>
    <div class="navbar">
        <img src="Images/logo.png" alt="LearnLine Logo" class="logo">
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="welcome-container">
        <div id="sec1">
            <div id="sec1_main">
                <div class="form-container">
                    <h2>Create Ticket</h2>
                    <form action="create_ticket_2.php" method="POST">
                        <div class="form-group">
                            <label for="student-ID">Student ID:</label>
                            <input class="input" type="text" id="student-ID" name="student-ID" required>
                        </div>

                        <div class="form-group">
                            <label for="student-first-name">Student First Name:</label>
                            <input class="input" type="text" id="student-first-name" name="student-first-name" required>
                        </div>

                        <div class="form-group">
                            <label for="student-last-name">Student Last Name:</label>
                            <input class="input" type="text" id="student-last-name" name="student-last-name" required>
                        </div>

                        <div class="form-group">
                            <label for="student-email">Student Email-address:</label>
                            <input class="input" type="email" id="student-email" name="student-email" required>
                        </div>

                        <div class="form-group">
                            <label for="student-phone-number">Student Phone Number:</label>
                            <input class="input" type="text" id="student-phone-number" name="student-phone-number" required>
                        </div>

                        <div class="form-group">
                            <label for="course">Course:</label>
                            <select class="input" id="course" name="course" required>
                                <option value="cis">Computing and Information Systems</option>
                                <option value="cs">Cyber Security</option>
                                <option value="pm">Project Management</option>
                                <option value="ds">Data Science</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="department">Department:</label>
                            <select class="input" id="department" name="department" required>
                                <option value="eng">Engineering</option>
                                <option value="med">Medicine</option>
                                <option value="art">Arts</option>
                            </select>
                        </div>

                       
                    </form>
                </div>
                <div class="image-container">
                    <img src="Images/Data extraction-pana.png" alt="Ticket">
                </div>
                <div class="submit">
                            <button type="submit" class="next-button">
                                Next <img src="Images/next (1).png" alt="Arrow">
                            </button>
                        </div>
            </div>
        </div>
    </div>
</body>

</html>
