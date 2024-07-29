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

        .p-title {
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

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: antiquewhite;
        }

        tr {
            border: 1px solid rgba(0, 0, 0, 0);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Non Attendence Tickets</h1>
        <button>Dismiss All</button>
        <div class="outer-div">
            <table>
                <tr>
                    
                    <th>Ticket ID</th>
                    <th>Status</th>
                    <th>Created Date & Time</th>
                    <th>Created By</th>
                </tr>
                <tr>
                    <td>IN0001</td>
                    <td>Non-Attendence</td>
                    <td><span>2024/05/12</span> <span>10:00:00</span> </td>
                    <td>Dr.rubem Perera</td>
                </tr>
                <tr>
                    <td>IN0001</td>
                    <td>Non-Attendence</td>
                    <td><span>2024/05/12</span> <span>10:00:00</span> </td>
                    <td>Dr.rubem Perera</td>
                </tr>
                <tr>
                    <td>IN0001</td>
                    <td>Non-Attendence</td>
                    <td><span>2024/05/12</span> <span>10:00:00</span> </td>
                    <td>Dr.rubem Perera</td>
                </tr>
              
            </table>
        </div>
    </div>
</body>

</html>
