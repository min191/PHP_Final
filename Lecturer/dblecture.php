<?php
function connectDatabase() {
    // Thông tin kết nối cơ sở dữ liệu
    $host = 'localhost'; // Địa chỉ host của MySQL, thường là 'localhost'
    $dbname = 'fastlearn'; // Tên cơ sở dữ liệu
    $username = 'root'; // Tên người dùng của cơ sở dữ liệu
    $password = ''; // Mật khẩu của cơ sở dữ liệu

    try {
        // Tạo đối tượng PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

        // Thiết lập chế độ lỗi cho PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo; // Trả về kết nối PDO để sử dụng

    } catch (PDOException $e) {
        // Nếu có lỗi, in ra lỗi và dừng chương trình
        die("Kết nối thất bại: " . $e->getMessage());
    }
}
