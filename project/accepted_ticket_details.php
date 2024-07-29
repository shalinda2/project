<?php
session_start();
include 'db_config.php';

$ticket_id = $_GET['ticket_id'];
$query = "SELECT t.ticket_id, t.student_id, t.first_name, t.last_name, t.email, t.phone_number, t.course, t.department, t.support_area, t.description, t.created_by, t.status, a.sub_status, a.assign_time, a.assign_location, a.tutor
          FROM tickets t
          JOIN accepted_tickets a ON t.ticket_id = a.ticket_id
          WHERE t.ticket_id = '$ticket_id'";
$result = $conn->query($query);
$ticket = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accepted Ticket Details - LearnLine</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="accepted-ticket-details-container">
        <!-- Navigation Bar -->
        <?php
        include("inc_navbar.php")
        ?>
        <!-- Main Section -->
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
                <p><strong>Comment:</strong> <?php echo $ticket['sub_status']; ?></p>
                <p><strong>Ticket ID:</strong> <?php echo $ticket['ticket_id']; ?></p>
                <p><strong>Accepted By:</strong> <?php echo $ticket['tutor']; ?></p>
                <p><strong>Meeting Date & Time:</strong> <?php echo $ticket['assign_time']; ?></p>
                <p><strong>Meeting Location:</strong> <?php echo $ticket['assign_location']; ?></p>
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
