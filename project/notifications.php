<?php
session_start();
include 'db_config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "Error: User not logged in.";
    exit;
}

$userID = $_SESSION['user_id']; // Fetch the user ID from the session

// Fetch notifications from the database for the logged-in user
$query = "SELECT created_at, title, message FROM notifications WHERE user_id = ? ORDER BY created_at DESC";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $userID);
$stmt->execute();
$result = $stmt->get_result();
?>

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
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $date = date('Y/m/d', strtotime($row['created_at']));
                            $time = date('H:i:s', strtotime($row['created_at']));
                            echo "<tr>";
                            echo "<td><input type='checkbox'></td>";
                            echo "<td>" . htmlspecialchars($date) . "</td>";
                            echo "<td>" . htmlspecialchars($time) . "</td>";
                            echo "<td>" . htmlspecialchars($row['title']) . ": " . htmlspecialchars($row['message']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No notifications found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<?php
$stmt->close();
$conn->close();
?>