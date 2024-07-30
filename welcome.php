<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - LearnLine</title>
    <link rel="stylesheet" href="common.css">
    <style>
        .welcome-container {
            max-width: 1200px;
            margin: auto;
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
            justify-content: space-between;
        }

        .text-section-welcome {
            display: flex;
            flex-direction: column;
            padding: 20px;
            width: 50%;
            justify-content: center;
        }

        .text-section-welcome h1 {
            font-size: 2em;
            margin-bottom: 10px;
            text-align: right;
        }

        .text-section-welcome p {
            font-size: 1.2em;
            font-style: italic;
            text-align: right;
        }

        .image-section {
            display: flex;
            width: 50%;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
        }

        .button-section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            bottom: 75px;
            position: relative;
        }

        .button-section .btn {
            background-color: #98B3C1;
            color: black;
            padding: 20px;
            margin: 0 15px;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            width: 15%;
        }

        .button-section .btn img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .container {
            .container {
            background-color: #DAE2E6;
            padding: 20px;
            width: 80%;
            max-width: 1200px;
            margin: auto;
        }
        }

        #sec1 {
            width: 100%;
            background-color: #DAE2E6;
        }
    </style>
</head>

<body>
    <?php include("inc_navbar.php"); ?>
    <div id="sec1">
        <div class="container">
            <div class="welcome-container">
                <div class="main-content-welcome">
                    <div class="text-section-welcome">
                        <h1>Welcome to LearnLine</h1>
                        <p>LearnLine is a comprehensive academic support system designed to empower lecturers and students in managing and accessing additional support for academic success.</p>
                    </div>
                    <div class="image-section">
                        <img src="Images/Consulting-pana.png" alt="Welcome Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sec2">
        <div class="button-section container">
            <a href="create_ticket_1.php" class="btn">
                <img src="Images/website.png" alt="Create Ticket">
                Create Ticket
            </a>
            <a href="manage_ticket.php" class="btn">
                <img src="Images/management.png" alt="Manage Tickets">
                Manage Tickets
            </a>
            <a href="profile.php" class="btn">
                <img src="Images/accountant.png" alt="Profile">
                Profile
            </a>
        </div>
    </div>

</body>

</html>