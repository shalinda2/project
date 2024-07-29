<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Create Ticket</title>
</head>
<body>
    <div class="welcome-container">
    <?php
        include("inc_navbar.php")
        ?>
        <div class="ticket-main">
            <div class="middle-section">
                <div class="form-container">
                    <h2>Create Ticket</h2>
                    <form action="create_ticket_2.php" method="POST">
                        <label for="student-ID">Student ID:</label>
                        <input type="text" id="student-ID" name="student-ID" required>

                        <label for="student-first-name">Student First Name:</label>
                        <input type="text" id="student-first-name" name="student-first-name" required>

                        <label for="student-last-name">Student Last Name:</label>
                        <input type="text" id="student-last-name" name="student-last-name" required>

                        <label for="student-email">Student Email-address</label>
                        <input type="email" id="student-email" name="student-email" required>

                        <label for="student-phone-number">Student Phone Number</label>
                        <input type="text" id="student-phone-number" name="student-phone-number" required>

                        <label for="course">Course</label>
                        <select id="course" name="course" required>
                            <option value="cis">Computing and Information Systems</option>
                            <option value="cs">Cyber Security</option>
                            <option value="pm">Project Management</option>
                            <option value="ds">Data Science</option>
                        </select>

                        <label for="department">Department</label>
                        <select id="department" name="department" required>
                            <option value="eng">Engineering</option>
                            <option value="med">Medicine</option>
                            <option value="art">Arts</option>
                        </select>
                        
                        <button type="submit" class="next-button">
                            Next <img src="Images/next (1).png" alt="Arrow">
                        </button>
                    </form>
                </div>
                <div class="image-container">
                    <img src="Images/Data extraction-pana.png" alt="Ticket">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
