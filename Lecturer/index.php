<?php
include 'dblecture.php';

// Kết nối cơ sở dữ liệu
$pdo = connectDatabase();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastLearn - Instructor Dashboard</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <img src="./img/Logo.png" alt="FastLearn Logo">
                <h1>FastLearn</h1>
            </div>
            <div class="profile">
                <img src="img/flowers.jpg" alt="Profile Image">
                <p><a href="#">Dat Beo</a></p>
            </div>
            <ul>
                <li><a href="#" id="course-manager-link">Course Manager</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Account</a>
                    <ul class="submenu">
                        <li><a href="#">Change Password</a></li>
                        <li><a href="#">Exit</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Header -->
        <header class="header"></header>

        <!-- Phần Chào Mừng -->
        <div class="main-content" id="welcome-content">
            <h2>Welcome to FastLearn!</h2>
            <p>This is the trainer dashboard. You can manage your courses, news, and account here.</p>
        </div>

        <!-- Course Manager -->
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
        </div>

        <!-- Edit Course Material -->
        <div class="main-content" id="edit-course-material-content" style="display: none;">
            <h2>Edit Course Material</h2>
            <form id="edit-course-material-form">
                <label for="course-material-title">Course Material Title:</label><br>
                <input type="text" id="course-material-title" name="course-material-title" required><br><br>
                <label for="course-material-content">Content:</label><br>
                <textarea id="course-material-content" name="course-material-content" rows="6" required></textarea><br><br>
                <button type="submit">Save Material</button>
                <button type="button" onclick="cancelEditCourseMaterial()">Cancel< /button>
            </form>
        </div>
    </div>

    <script src="index.js"></script>
   
</body>
</html>
