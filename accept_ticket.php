<?php
session_start();
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ticket_id = $_POST['ticket_id'];
    $assign_time = $_POST['assign_time'];
    $assign_location = $_POST['assign_location'];
    $sub_status = $_POST['sub_status'];
    $tutor = $_POST['tutor'];

    // Update the tickets table to set the status to 'accepted'
    $update_query = "UPDATE tickets SET status='accepted' WHERE ticket_id='$ticket_id'";
    $conn->query($update_query);

    // Insert into the accepted_tickets table
    $insert_query = "INSERT INTO accepted_tickets (ticket_id, assign_time, assign_location, sub_status, tutor) VALUES ('$ticket_id', '$assign_time', '$assign_location', '$sub_status', '$tutor')";
    $conn->query($insert_query);

    header('Location: accepted_tickets.php');
    exit();
}

if (isset($_GET['ticket_id'])) {
    $ticket_id = $_GET['ticket_id'];
    $query = "SELECT * FROM tickets WHERE ticket_id='$ticket_id'";
    $result = $conn->query($query);
    $ticket = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Accept Ticket - LearnLine</title>
</head>
<body>
    <div class="accept-ticket-container">
        <?php include("inc_navbar.php"); ?>
        <div class="main-content">
            <div class="details-section">
                <h2>Details</h2>
                <p><strong>Student ID:</strong> <?php echo $ticket['student_id']; ?></p>
                <p><strong>Student First Name:</strong> <?php echo $ticket['first_name']; ?></p>
                <p><strong>Student Last Name:</strong> <?php echo $ticket['last_name']; ?></p>
                <p><strong>Student E-mail Address:</strong> <?php echo $ticket['email']; ?></p>
                <p><strong>Student Phone Number:</strong> <?php echo $ticket['phone_number']; ?></p>
                <p><strong>Course:</strong> <?php echo $ticket['course']; ?></p>
                <p><strong>Department:</strong> <?php echo $ticket['department']; ?></p>
                <p><strong>Support Needed Area:</strong> <?php echo $ticket['support_area']; ?></p>
                <p><strong>Description:</strong> <?php echo $ticket['description']; ?></p>
                <p><strong>Ticket Created By:</strong> <?php echo $ticket['created_by']; ?></p>
                <p><strong>Ticket Status:</strong> <?php echo $ticket['status']; ?></p>
            </div>
            <div class="form-section">
                <h2>Accept the Ticket</h2>
                <form action="accept_ticket.php" method="POST">
                    <input type="hidden" name="ticket_id" value="<?php echo $ticket['ticket_id']; ?>">
                    <label for="assign_time">Assign a Time:</label>
                    <input type="datetime-local" id="assign_time" name="assign_time" required>
                    <label for="assign_location">Assign a Location:</label>
                    <input type="text" id="assign_location" name="assign_location" required>
                    <label for="sub_status">Change the Ticket Status:</label>
                    <select id="sub_status" name="sub_status" required>
                        <option value="Accepted">Accepted</option>
                        <option value="Rejected">Rejected</option>
                    </select>
                    <label for="tutor">Assigned Tutor:</label>
                    <input type="text" id="tutor" name="tutor" required>
                    <button type="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel">Cancel</button>
                </form>
            </div>
        </div>
        <?php include("inc_footer_navbar.php"); ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>
