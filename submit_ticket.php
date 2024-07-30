<?php
session_start();
include 'db_config.php';

function generateTicketID($conn) {
    $result = $conn->query("SELECT COUNT(*) as count FROM tickets");
    $row = $result->fetch_assoc();
    $count = $row['count'] + 1;
    return "IN" . $count;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from session
    $studentID = $_SESSION['student-ID'];
    $firstName = $_SESSION['student-first-name'];
    $lastName = $_SESSION['student-last-name'];
    $email = $_SESSION['student-email'];
    $phoneNumber = $_SESSION['student-phone-number'];
    $course = $_SESSION['course'];
    $department = $_SESSION['department'];
    // Retrieve data from the current form submission
    $supportArea = $_POST['support-area'];
    $description = $_POST['ticket-description'];
    $status = $_POST['status'];
    $tutor = $_POST['tutor'];
    $createdBy = $_POST['ticket-created'];

    // Generate Ticket ID
    $ticketID = generateTicketID($conn);

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO tickets (ticket_id, student_id, first_name, last_name, email, phone_number, course, department, support_area, description, status, tutor, created_by) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $ticketID, $studentID, $firstName, $lastName, $email, $phoneNumber, $course, $department, $supportArea, $description, $status, $tutor, $createdBy);

    if ($stmt->execute()) {
        echo "Ticket created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // Clear session data
    session_unset();
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Submitted</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="welcome-container">
    <?php
        include("inc_navbar.php")
        ?>
        <div class="ticket-main">
            <div class="middle-section">
                <div class="form-container">
                    <h2>Ticket Submitted</h2>
                    <p>Your ticket has been created successfully.</p>
                </div>
                <div class="image-container">
                    <img src="Images/Data extraction-pana.png" alt="Ticket">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
