<?php
session_start();
include 'db_config.php';

$ticket_id = $_GET['ticket_id'] ?? null;  // Ensure ticket_id is set

if ($ticket_id) {
    // Prepare SQL statement with a placeholder
    $query = "SELECT t.ticket_id, t.student_id, t.first_name, t.last_name, t.email, t.phone_number, t.course, t.department, t.support_area, t.description, t.created_by, t.status, a.assign_time, a.assign_location, a.tutor
              FROM tickets t
              JOIN accepted_tickets a ON t.ticket_id = a.ticket_id
              WHERE t.ticket_id = ?";
    
    $stmt = $conn->prepare($query);
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind the ticket_id parameter
    $stmt->bind_param('s', $ticket_id);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    if ($result === false) {
        die("Error fetching result: " . $conn->error);
    }

    $ticket = $result->fetch_assoc();
    if (!$ticket) {
        die("Ticket not found.");
    }
} else {
    die("No ticket ID provided.");
}
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
                <p><strong>Student ID:</strong> <?php echo htmlspecialchars($ticket['student_id']); ?></p>
                <p><strong>Student First Name:</strong> <?php echo htmlspecialchars($ticket['first_name']); ?></p>
                <p><strong>Student Last Name:</strong> <?php echo htmlspecialchars($ticket['last_name']); ?></p>
                <p><strong>Student E-mail Address:</strong> <?php echo htmlspecialchars($ticket['email']); ?></p>
                <p><strong>Student Phone Number:</strong> <?php echo htmlspecialchars($ticket['phone_number']); ?></p>
                <p><strong>Course:</strong> <?php echo htmlspecialchars($ticket['course']); ?></p>
                <p><strong>Department:</strong> <?php echo htmlspecialchars($ticket['department']); ?></p>
                <p><strong>Support Needed Area:</strong> <?php echo htmlspecialchars($ticket['support_area']); ?></p>
                <p><strong>Description:</strong> <?php echo htmlspecialchars($ticket['description']); ?></p>
                <p><strong>Ticket Created By:</strong> <?php echo htmlspecialchars($ticket['created_by']); ?></p>
                <p><strong>Ticket Status:</strong> <?php echo htmlspecialchars($ticket['status']); ?></p>
            </div>
            <div class="form-section">
                <h2>Accept the Ticket</h2>
                <p><strong>Ticket ID:</strong> <?php echo htmlspecialchars($ticket['ticket_id']); ?></p>
                <p><strong>Accepted By:</strong> <?php echo htmlspecialchars($ticket['tutor']); ?></p>
                <p><strong>Meeting Date & Time:</strong> <?php echo htmlspecialchars($ticket['assign_time']); ?></p>
                <p><strong>Meeting Location:</strong> <?php echo htmlspecialchars($ticket['assign_location']); ?></p>
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
