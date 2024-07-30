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

        .left,
        .right {
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

        .inner-div {
            display: flex;
            align-items: center;
            margin-bottom: 4px;
        }

        .inner-div p {
            margin-right: 10px;
            flex: 1;
            min-width: 150px;
        }

        .inner-div input {
            flex: 2;
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            border-radius: 10px;
        }

        .inner-div .input,
        .inner-div select {
            flex: 2;
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .inner-div .input:focus,
        .inner-div select:focus {
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        button {
            padding: 10px 15px;
            margin: 5px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        button:focus {
            outline: none;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
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

                <h1> Add New Comment</h1>
                <div class="inner-div">
                    <p class="p-titele ">New Comment:</p>
                    <input type="text">
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Change the Ticket Status:</p>
                    <select id="status" name="status" required>
                        <option value="open">Open</option>
                        <option value="closed">Closed</option>
                        <option value="inprogress">Inprogress</option>
                        <option value="non-attendance">Non-attendance</option>
                    </select>
                    <div><button>Submit</button>
                        <button>Cancel</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
   
</body>

</html>