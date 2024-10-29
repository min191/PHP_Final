<?php
include 'dblecture.php';
$pdo = connectDatabase();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastLearn - Course Manager</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="main-content" id="course-content" style="display: none;">
        <h2>Course Management</h2>
        <table>
            <tr>
                <th>STT</th>
                <th>Course Name</th>
                <th>Actions</th>
            </tr>
            <?php
            try {
                $query = "SELECT CourseID, CourseName FROM courses";
                $stmt = $pdo->query($query);
                $count = 1;

                while ($course = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $count . "</td>";
                    echo "<td>" . htmlspecialchars($course['CourseName']) . "</td>";
                    echo "<td><button onclick=\"window.location.href='edit_course_options.php?courseId=" . $course['CourseID'] . "'\">Edit</button></td>";
                    echo "</tr>";
                    $count++;
                }
            } catch (PDOException $e) {
                echo "<tr><td colspan='3'>Lỗi khi truy vấn dữ liệu: " . $e->getMessage() . "</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
