<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
        .container {
            background-color: lightgrey;
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
        .left{
            width: 50%;
        }
        .right{
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Details</h1>
        <div class="outer-div">
            <div calss="left"> 
                <div class="inner-div">
                    <p class="p-titele ">Student ID:</p>
                    <p class="p-details">1082991</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Student Frist Name:</p>
                    <p class="p-details">Dulmini</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Student Last Name:</p>
                    <p class="p-details">De Alvis</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Student E-mail Address:</p>
                    <p class="p-details">csmadeal@ljmu.ac.uk</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Student Phone Number:</p>
                    <p class="p-details">0112345698</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Course:</p>
                    <p class="p-details">Computing and information systems</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Department:</p>
                    <p class="p-details">Engineering</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Support Needed Area:</p>
                    <p class="p-details">Java Programming Langauge</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Description:</p>
                    <p class="p-details">Student need support for java arrays</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Ticket created by:</p>
                    <p class="p-details">Dr.Rubem Perera</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Ticket Status:</p>
                    <p class="p-details">Closed</p>
                </div>
            </div>


            <div class="right">
                <div class="inner-div">
                    <p class="p-titele ">Comment:</p>
                    <p class="p-details">Provided support with java arrays</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Ticket ID:</p>
                    <p class="p-details">IN00001</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Accepted By:</p>
                    <p class="p-details">Dr.mark Taylor</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Closed By:</p>
                    <p class="p-details">Dr.mark Taylor</p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Meeting Date & Time:</p>
                    <p class="p-details">25/05/2024 <span>12:00:00</span></p>
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Meeting Location:</p>
                    <p class="p-details">Room No: 616-Byrom Street Building</p>
                </div>

                <h1> Add New Comment</h1>
                <div class="inner-div">
                    <p class="p-titele ">New Comment:</p>
                   <input type="text">
                </div>
                <div class="inner-div">
                    <p class="p-titele ">Change the Ticket Status:</p>
                   <input type="text">
                   <button>Submit</button>
                   <button>Cancel</button>
                </div>
            </div>
        </div>

    </div>
</body>

</html>