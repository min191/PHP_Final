<?php
include 'dblecture.php';

// Kết nối cơ sở dữ liệu
$pdo = connectDatabase();

// Xác định số lượng khóa học tải và vị trí bắt đầu
$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 5;
$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

try {
    $query = "SELECT CourseID, CourseName FROM courses LIMIT :limit OFFSET :offset";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($courses);
} catch (PDOException $e) {
    echo json_encode([]);
}
?>
