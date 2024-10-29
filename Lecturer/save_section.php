<?php
include 'dblecture.php'; // Kết nối đến database thông qua file kết nối
$pdo = connectDatabase();

// Kiểm tra nếu form đã gửi dữ liệu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $lessonId = $_POST['lessonId'];
    $sectionTitle = $_POST['sectionTitle'];
    $sectionURL = $_POST['sectionURL']; // Lấy URL từ form

    // Chuẩn bị truy vấn SQL để chèn dữ liệu vào bảng sections
    $query = "INSERT INTO sections (SectionTitle, SectionContent, LessonID) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);

    // Thực hiện truy vấn và kiểm tra nếu chèn thành công
    if ($stmt->execute([$sectionTitle, $sectionURL, $lessonId])) { // Lưu URL vào SectionContent
        echo "Thêm phần nội dung thành công!";
        echo "<br><a href='edit_course_options.php?courseId=" . $_POST['courseId'] . "'>Quay Lại</a>";
    } else {
        echo "Lỗi khi thêm phần nội dung.";
    }
} else {
    echo "Không có dữ liệu để lưu.";
}
?>
