<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['student-ID'] = $_POST['student-ID'];
    $_SESSION['student-first-name'] = $_POST['student-first-name'];
    $_SESSION['student-last-name'] = $_POST['student-last-name'];
    $_SESSION['student-email'] = $_POST['student-email'];
    $_SESSION['student-phone-number'] = $_POST['student-phone-number'];
    $_SESSION['course'] = $_POST['course'];
    $_SESSION['department'] = $_POST['department'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Create Ticket - Page 2</title>
</head>
<body>
    <div class="welcome-container">
    <?php
        include("inc_navbar.php")
        ?>
        <div class="ticket-main">
            <div class="middle-section">
                <div class="form-container">
                    <h2>Create Ticket - Page 2</h2>
                    <form action="submit_ticket.php" method="POST">
                        <label for="support-area">Support Need Area:</label>
                        <input type="text" id="support-area" name="support-area" required>

                        <label for="ticket-description">Description</label>
                        <textarea id="ticket-description" name="ticket-description" rows="4" required></textarea>

                        <label for="status">Ticket Status</label>
                        <select id="status" name="status" required>
                            <option value="open">Open</option>
                            <option value="closed">Closed</option>
                            <option value="inprogress">Inprogress</option>
                            <option value="non-attendance">Non-attendance</option>
                        </select>

                        <label for="tutor">Assigned Tutor:</label>
                        <input type="text" id="tutor" name="tutor" required>

                        <label for="ticket-created">Ticket Created By:</label>
                        <input type="text" id="ticket-created" name="ticket-created" required>
                        
                        <button type="submit" class="next-button">
                            Submit 
                        </button>
                    </form>
                    <a href="create_ticket_1.php" class="next-button">
                        Back <img src="Images/back.png" alt="Arrow">
                    </a>
                    <a href="cancel.php" class="next-button">
                        Cancel 
                    </a>
                </div>
                <div class="image-container">
                    <img src="Images/Data extraction-pana.png" alt="Ticket">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
