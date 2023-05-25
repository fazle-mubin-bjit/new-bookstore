<?php
$servername = "192.168.20.158"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "bookstore"; // Replace with the name of your MySQL database

// Create a connection object
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform your database operations here

// Close the connection
$conn->close();
?>
