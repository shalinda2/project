<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
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

        .container {
            background-color: #DAE2E6;
            padding: 20px;
            width: 80%;
            max-width: 1200px;
            margin: auto;
        }

        .outer-div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .inner-div {
            display: flex;
            flex-direction: row;
            margin-bottom: 5px;
        }

        .p-title {
            font-weight: bold;
            width: 200px; 
        }

        .left, .right {
            width: 48%; 
        }

        .right img {
            max-width: 60%;
            height: auto;
            display: block;
            margin-top: 20px; 
        }
        .image {
            display: flex;
            justify-content: flex-end;
            opacity: 50%;
        }

    </style>
</head>

<body>
    <?php include("inc_navbar.php"); ?>
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
</body>

</html>
