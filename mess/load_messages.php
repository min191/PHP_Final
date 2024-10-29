<?php
header('Content-Type: application/json');
require 'db.php';

$sql = "SELECT * FROM messages ORDER BY timestamp ASC";
$result = $conn->query($sql);

$messages = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}

echo json_encode($messages);
?>