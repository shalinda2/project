<?php
session_start();
include 'db_config.php';

// Fetch accepted tickets from the database
$query = "SELECT t.ticket_id, t.status, t.created_at, t.created_by, a.assign_time, a.assign_location, a.sub_status, a.tutor 
          FROM tickets t 
          JOIN accepted_tickets a ON t.ticket_id = a.ticket_id 
          WHERE a.sub_status = 'Accepted'";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>



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
    <link rel="stylesheet" href="styles.css">
    <title>Accepted Open Tickets - LearnLine</title>
</head>
<body>
    <div class="accepted-ticket-container">
        <!-- Navigation Bar -->
        <?php
        include("inc_navbar.php")
        ?>
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
        <?php
       include("inc_footer_navbar.php")
       ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>
