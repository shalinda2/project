<?php
session_start();
include 'db_config.php';

// Fetch open tickets that have not been accepted from the database
$query = "SELECT ticket_id, status, created_at, created_by FROM tickets WHERE status='open'";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Non Accepted Open Tickets - LearnLine</title>
</head>
<body>
    <div class="non-accepted-ticket-container">
        <!-- Navigation Bar -->
        <?php
        include("inc_navbar.php")
        ?>
        <!-- Main Section -->
        <div class="main-content">
            <div class="text-section">
                <h1>Non Accepted Open Tickets</h1>
            </div>
            <div class="search-section">
                <input type="text" placeholder="Search..." class="search-input">
                <button type="button" class="search-button">
                    <img src="Images/loupe.png" alt="Search">
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td><a href='accept_ticket.php?ticket_id=" . $row['ticket_id'] . "'>" . $row['ticket_id'] . "</a></td>";
                                echo "<td>" . $row['status'] . "</td>";
                                echo "<td>" . $row['created_at'] . "</td>";
                                echo "<td>" . $row['created_by'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No open tickets found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
       include("inc_footer_navbar.php")
       ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>
