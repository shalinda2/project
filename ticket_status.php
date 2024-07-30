<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Status - LearnLine</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="ticket-status-container">
        <div class="overlay"></div>
        <!-- Navigation Bar -->
        <?php
        include("inc_navbar.php")
        ?>
        <!-- Ticket Status Content -->
        <div class="ticket-status-content">
            <div class="ticket-box">
                <img src="Images\account-accepted.png" alt="Accepted Tickets">
                <span>Accepted Tickets</span>
            </div>
            <div class="ticket-box">
                <img src="Images\reject.png" alt="Non Accepted Tickets">
                <span>Non Accepted Tickets</span>
            </div>
        </div>

    </div>
</body>
</html>
