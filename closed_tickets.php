<?php
session_start();
include 'db_config.php';

// Fetch closed tickets from the database
$query = "SELECT ticket_id, status, created_at, closed_at, created_by, closed_by FROM closed_tickets";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Closed Tickets - LearnLine</title>
</head>
<body>
    <div class="closed-ticket-container">
        <!-- Navigation Bar -->
        <?php
        include("inc_navbar.php")
        ?>
        <!-- Main Section -->
        <div class="main-content">
            <div class="text-section">
                <h1>Closed Tickets</h1>
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
                            <th>Closed Date & Time</th>
                            <th>Created By</th>
                            <th>Closed By</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['ticket_id']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['created_by']) . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No closed tickets found</td></tr>";
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
