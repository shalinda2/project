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
        <h1>Notifications</h1>
        <button>Dismiss All</button>
        <div class="outer-div">
            <table>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Title</th>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>2024/05/20</td>
                    <td>10:00:00</td>
                    <td>You have new Open ticket with ticket ID IN00005</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Title</td>
                    <td>12:00:00</td>
                    <td>You have new Open ticket with ticket ID IN00003</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
