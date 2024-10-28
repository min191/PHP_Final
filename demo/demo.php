<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Hàm đăng nhập và kiểm tra phân quyền
function login($conn, $username, $password) {
    // Truy vấn lấy thông tin người dùng từ database
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Kiểm tra mật khẩu
        if (password_verify($password, $user['password'])) {
            // Đăng nhập thành công, trả về thông tin người dùng
            return $user;
        } else {
            return null; // Mật khẩu không đúng
        }
    } else {
        return null; // Người dùng không tồn tại
    }
}

// Xử lý đăng nhập
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $user = login($conn, $username, $password);
    
    if ($user) {
        // Kiểm tra vai trò người dùng
        if ($user['role'] === 'admin') {
            echo "Welcome Admin!";
            // Điều hướng đến trang quản trị
        } elseif ($user['role'] === 'lecturer') {
            echo "Welcome Lecturer!";
            // Điều hướng đến trang giảng viên
        } elseif ($user['role'] === 'user') {
            echo "Welcome User!";
            // Điều hướng đến trang người dùng
        } else {
            echo "Invalid role!";
        }
    } else {
        echo "Invalid username or password!";
    }
}
?>

<!-- Form đăng nhập -->
<form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Login">
</form>
