<?php
$host = 'localhost'; // Change if necessary
$user = 'root'; // Your MySQL username
$password = ''; // Your MySQL password
$dbname = 'fastlearn'; // Your database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>