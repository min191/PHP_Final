<?php
if (isset($_GET['courseId'])) {
    $courseId = $_GET['courseId'];
} else {
    die("Không tìm thấy ID khóa học.");
}

// Kết nối tới cơ sở dữ liệu để lấy danh sách các bài học của khóa học này
include 'dblecture.php';
$pdo = connectDatabase();

$query = "SELECT LessonID, LessonTitle FROM lessons WHERE CourseID = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$courseId]);
$lessons = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Nội Dung Bài Học</title>
</head>
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
            margin: 10px 5px;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #ff3385; /* Màu hồng đậm hơn khi hover */
        }

        button:focus {
            outline: none;
        }

        /* Căn đều các nút */
        .button-group {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }
    </style>
<body>
    <div class="main-content">
        <h2>Thêm Nội Dung cho Khóa Học ID: <?php echo $courseId; ?></h2>
        <form action="save_section.php" method="POST">
            <input type="hidden" name="courseId" value="<?php echo $courseId; ?>">

            <label for="lessonId">Chọn Bài Học:</label>
            <select id="lessonId" name="lessonId" required>
                <?php
                foreach ($lessons as $lesson) {
                    echo "<option value='" . $lesson['LessonID'] . "'>" . htmlspecialchars($lesson['LessonTitle']) . "</option>";
                }
                ?>
            </select><br><br>

            <label for="sectionTitle">Tiêu Đề Nội Dung:</label>
            <input type="text" id="sectionTitle" name="sectionTitle" required><br><br>

            <label for="sectionURL">Liên Kết Trang Web:</label>
            <input type="url" id="sectionURL" name="sectionURL" placeholder="https://example.com" required><br><br>

            <button type="submit">Lưu Nội Dung</button>
            <button type="button" onclick="window.location.href='edit_course_options.php?courseId=<?php echo $courseId; ?>'">Quay Lại</button>
        </form>
    </div>
</body>
</html>
