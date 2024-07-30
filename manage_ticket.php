<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Manage Ticket</title>
</head>

<body> <?php
        include("inc_navbar.php")
        ?>
    <div class="manage-ticket-container">
        <!-- Navigation Bar -->

        <!-- Main Section -->
        <div class="manage-ticket-main">

            <h2>Manage Ticket</h2>
            <div class="ticket-icons">
                <a href="open_ticket.php" class="ticket-box">
                    <img src="Images\book.png" alt="Open Tickets">
                    <span>Open Tickets</span>
                </a>
                <a href="closed_tickets.php" class="ticket-box">
                    <img src="Images\eyebrow.png" alt="Closed Tickets">
                    <span>Closed Tickets</span>
                </a>
                <a href="in_progress_tickets.php" class="ticket-box">
                    <img src="Images\processing-time.png" alt="In Progress Tickets">
                    <span>In Progress Tickets</span>
                </a>
                <a href="non_attendance_tickets.php" class="ticket-box">
                    <img src="Images\people.png" alt="Non-Attendance Tickets">
                    <span>Non-Attendance Tickets</span>
                </a>
            </div>
        </div>
        
        
    </div>
</body>

</html>