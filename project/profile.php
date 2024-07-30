<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
        .container {
            background-color: #DAE2E6;
            padding: 20px;
            width: 80%;
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
        .outer-div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .inner-div {
            display: flex;
            flex-direction: row;

        }

        .p-titele {
            font-weight: bold;
        }

        .left {
            width: 50%;
            display: flex;
            flex-direction: column;
        }

        .right {
            width: 50%;
        }
        #sec1 {
            width: 100%;
            background-color: #DAE2E6;
        }
    </style>
</head>

<body>
<?php include("inc_navbar.php"); ?>

    <div id="sec1"> <div class="container">
        <h1>Profile</h1>
        <div class="outer-div">
            <div calss="left">
                <img src="Images/profile picture.PNG" alt="profile">
                <h1>Mark Evans</h1>
                <p>M.R.evens@ljmu.mu.ac.uk </p>
                <button>Edit Profile</button>
            </div>
            <div class="right">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, rem at incidunt non et tenetur debitis quasi exercitationem </p>
            </div>
        </div></div>
   

    </div>
</body>

</html>