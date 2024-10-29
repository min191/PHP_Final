<?php
// Kiểm tra nếu có courseId trong URL
if (isset($_GET['courseId'])) {
    $courseId = $_GET['courseId'];
} else {
    die("Không tìm thấy ID khóa học.");
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Khóa Học</title>
    <style>
        /* Đặt nền màu hồng nhạt */
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .main-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        .main-content h2 {
            color: #b20000;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Thiết kế nút */
        button {
            background-color: #ff66b2; /* Màu hồng đậm */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #ff3385; /* Màu hồng đậm hơn khi hover */
        }

        button:focus {
            outline: none;
        }

        /* Căn đều hai nút đầu tiên */
        .button-group {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 15px;
        }

        /* Căn nút "Quay Lại" ở giữa */
        .center-button {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <h2>Chỉnh Sửa Khóa Học ID: <?php echo $courseId; ?></h2>
        <p>Chọn hành động bạn muốn thực hiện:</p>
        
        <!-- Hai nút đầu tiên nằm ngang nhau -->
        <div class="button-group">
            <button onclick="window.location.href='add_lesson.php?courseId=<?php echo $courseId; ?>'">Thêm Phần Bài Học</button>
            <button onclick="window.location.href='add_section.php?courseId=<?php echo $courseId; ?>'">Thêm Nội Dung Bài Học</button>
        </div>

        <!-- Nút "Quay Lại" nằm dưới và ở giữa -->
        <div class="center-button">
            <button onclick="window.location.href='index.php'">Quay Lại</button>
        </div>
    </div>
</body>
</html>
