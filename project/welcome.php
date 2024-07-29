<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - LearnLine</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        .welcome-container {
            width: 1200px;
        }

        .welcome-containerA {
            background-image: url("paper.gif");

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

        .main-content-welcome {
            display: flex;
            padding: 20px;
            margin-top: 30px;
            justify-content: space-between;
        }

        .text-section-welcome {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-start;
            padding: 20px;
            text-align: center;
            width: 50%;
        }

        .text-section h1 {
            font-size: 2em;
            margin-bottom: 10px;

        }

        .text-section p {
            font-size: 1.2em;
            font-style: italic;

        }

        .image-section {
            display: flex;
        }

        .image-section img {
            max-width: 50%;
            height: auto;
        }

        .button-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .button-section .btn {
            background-color: #98B3C1;
            color: black;
            padding: 50px;
            margin: 0 50px;
            text-align: center;
            border-radius: 2px;
            font-weight: bold;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
        }

        .button-section .btn img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <?php
        include("inc_navbar.php")
        ?>
    <div class="welcome-container">

        <div class="main-content-welcome">
            <div class="text-section-welcome">
                <h1>Welcome to LearnLine</h1>
                <p>LearnLine is a comprehensive academic support system designed to empower lecturers and students in managing and accessing additional support for academic success.</p>
            </div>
            <div class="image-section">
                <img src="Images\Consulting-pana.png" alt="Welcome Image">
            </div>
        </div>
        <div class="button-section">
            <a href="create_ticket_1.php" class="btn">
                <img src="Images\website.png" alt="Create Ticket">
                Create Ticket
            </a>
            <a href="manage_ticket.php" class="btn">
                <img src="Images\management.png" alt="Manage Tickets">
                Manage Tickets
            </a>
            <a href="#" class="btn">
                <img src="Images\accountant.png" alt="Profile">
                Profile
            </a>
        </div>
    </div>
</body>

</html>