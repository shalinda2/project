<?php
$servername = "localhost";
$username = "root"; // My database username
$password = "shali@2000"; // My database password
$dbname = "learnline"; // My database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


