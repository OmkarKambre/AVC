<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "final_year_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement with a placeholder for the id
$sql = "DELETE FROM registration WHERE sr_no=?";

// Bind the id parameter to the prepared statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET['sr_no']);

// Execute the prepared statement
if ($stmt->execute()) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
