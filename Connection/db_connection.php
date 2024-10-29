<?php
$servername = "localhost"; // Địa chỉ máy chủ MySQL
$username = "root";        // Tên người dùng MySQL
$password = "";            // Mật khẩu MySQL
$database = "fastlearn"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
