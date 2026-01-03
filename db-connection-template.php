<?php
// Database Connection Configuration
// Rename this file to db-connection.php and update with your database credentials

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');           // Change to your MySQL username
define('DB_PASS', '');               // Change to your MySQL password
define('DB_NAME', 'serenemind');     // Database name

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4 for emoji and international character support
$conn->set_charset("utf8mb4");

// Example usage:
/*
// Select query
$sql = "SELECT * FROM services WHERE is_active = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['title'];
    }
}

// Insert with prepared statement (safer)
$stmt = $conn->prepare("INSERT INTO contact_messages (first_name, last_name, email, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstName, $lastName, $email, $message);
$stmt->execute();
$stmt->close();

// Always close connection when done
$conn->close();
*/
?>
