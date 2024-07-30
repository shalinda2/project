<?php
session_start();
include 'db_config.php';

// Fetch accepted tickets from the database
$query = "SELECT t.ticket_id, t.status, t.created_at, t.created_by, a.assign_time, a.assign_location, a.sub_status, a.tutor 
          FROM tickets t 
          JOIN accepted_tickets a ON t.ticket_id = a.ticket_id 
          WHERE a.sub_status = 'Accepted' AND t.status = 'open'";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accepted Open Tickets - LearnLine</title>
    <style>
        .container {
            padding: 20px;
            width: 80%;
            max-width: 1200px;
            margin: auto;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header,
        footer {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header img {
            width: 150px;
        }

        nav a {
            color: #333;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: url('Images/non_accepted_ticket_background.png') no-repeat center center fixed;
            /* Background Image */
            background-size: cover;
            padding: 20px;
            margin-top: 80px;
            /* Adjust based on navbar height */
            text-align: center;
        }

        .main-content h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }

        .search-section {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
        }

        .search-button {
            background-color: #ccc;
            border: none;
            padding: 10px;
            margin-left: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .search-button img {
            width: 16px;
            height: 16px;
        }

        .table-section {
            width: 80%;
            max-width: 800px;
        }

        .ticket-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .ticket-table th,
        .ticket-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .ticket-table th {
            background-color: #ddd;
        }

        .bottom-links {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            padding: 20px 0;
            width: 100%;
        }

        .bottom-links a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        /* Navbar styles */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
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

        /* Responsive design adjustments */
        @media (max-width: 768px) {
            .ticket-table {
                width: 100%;
                max-width: 100%;
            }

            .ticket-table th,
            .ticket-table td {
                padding: 5px;
            }

            .main-content h1 {
                font-size: 1.5em;
            }

            .search-input {
                width: 150px;
            }
        }
    </style>
</head>

<body>
    <header>
        <img src="Images/logo.PNG" alt="LearnLine Logo">
        <nav>
            <a href="welcome.php">Home</a>
            <a href="notifications.php">Notifications</a>
            <a href="announcements.php">Announcements</a>
        </nav>
    </header>
    <div class="container">
        <div class="accepted-ticket-container">
            <!-- Main Section -->
            <div class="main-content">
                <div class="text-section">
                    <h1>Accepted Open Tickets</h1>
                </div>
                <div class="search-section">
                    <input type="text" placeholder="Search..." class="search-input">
                    <button type="button" class="search-button">
                        <img src="Images/search.png" alt="Search">
                    </button>
                </div>
                <div class="table-section">
                    <table class="ticket-table">
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Status</th>
                                <th>Created Date & Time</th>
                                <th>Created By</th>
                                <th>Accepted By</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td><a href='accepted_ticket_details.php?ticket_id=" . $row['ticket_id'] . "'>" . $row['ticket_id'] . "</a></td>";
                                    echo "<td>" . $row['status'] . "</td>";
                                    echo "<td>" . $row['created_at'] . "</td>";
                                    echo "<td>" . $row['created_by'] . "</td>";
                                    echo "<td>" . $row['tutor'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>No accepted tickets found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <nav>
            <a href="help_support.php">Help & Support</a>
            <a href="about_us.php">About Us</a>
            <a href="settings.php">Settings</a>
        </nav>
    </footer>

</body>

</html>

<?php
$conn->close();
?>