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

        .left {
            width: 50%;
            display: flex;
            flex-direction: column;
        }

        .right {
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="container">
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
        </div>

    </div>
</body>

</html>