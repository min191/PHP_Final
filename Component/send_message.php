<?php
header('Content-Type: application/json');
require 'db.php';

// Get the JSON input
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['message_type']) && isset($data['content'])) {
    $message_type = $data['message_type'];
    $content = $data['content'];

    $stmt = $conn->prepare("INSERT INTO messages (message_type, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $message_type, $content);
    
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
    
    $stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input']);
}

$conn->close();
?>
