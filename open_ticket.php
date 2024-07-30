<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Open Ticket</title>
</head>
<body>
    <div class="open-ticket-container">
        <!-- Navigation Bar -->
        <div class="navbar">
            <img src="Images/logo.PNG" alt="Logo" class="logo">
            <ul class="nav-links">
            <li><a href="welcome.php">Home</a></li>
            <li><a href="notifications.php">Notifications</a></li>
                <li><a href="#">Announcements</a></li>
            </ul>
        </div>
        <!-- Main Section -->
        <div class="open-ticket-main">
            <h2>Manage Ticket</h2>
            <div class="ticket-icons">
                <a href="accepted_ticket.php" class="ticket-box">
                    <img src="Images\account-accepted.png" alt="Accepted Tickets">
                    <span>Accepted Tickets</span>
                </a>
                <a href="non_accepted_ticket.php" class="ticket-box">
                    <img src="Images\reject.png" alt="Non-Accepted Tickets">
                    <span>Non Accepted Tickets</span>
                </a>
            </div>
        </div>
        <!-- Bottom Links -->
        <div class="bottom-links">
            <a href="#">Help & Support</a>
            <a href="#">About Us</a>
            <a href="#">Settings</a>
        </div>
    </div>
</body>
</html>
