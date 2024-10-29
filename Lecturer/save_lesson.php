<?php
include 'dblecture.php'; // Kết nối đến database thông qua file kết nối
$pdo = connectDatabase();

// Kiểm tra nếu form đã gửi dữ liệu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $courseId = $_POST['courseId'];
    $lessonTitle = $_POST['lessonTitle'];

    // Chuẩn bị truy vấn SQL để chèn dữ liệu vào bảng lessons
    $query = "INSERT INTO lessons (LessonTitle, CourseID) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);

    // Thực hiện truy vấn và kiểm tra nếu chèn thành công
    if ($stmt->execute([$lessonTitle, $courseId])) {
        // Chuyển hướng về trang edit_course_options.php sau khi thêm thành công
        header("Location: edit_course_options.php?courseId=$courseId");
        exit(); // Dừng script để đảm bảo không có mã nào được thực thi sau chuyển hướng
    } else {
        echo "Lỗi khi thêm chương.";
    }
} else {
    echo "Không có dữ liệu để lưu.";
}
?>
