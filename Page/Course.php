<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="../css/Course.css">
    <style>
        /* General styles for the course section */
        .course-section {
            padding: 40px 20px;
            background-color: #F9F0F3; /* Light background for contrast */
        }
        /* Grid layout for course cards */
        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Responsive grid */
            gap: 20px; /* Space between cards */
        }
        /* Individual course card styling */
        .course-card {
            background-color: white; /* Card background */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            overflow: hidden; /* Ensure rounded corners apply to content */
            transition: transform 0.2s; /* Smooth hover effect */
            text-align: center; /* Center align text */
            text-decoration: none; /* Remove underline from link */
            color: inherit; /* Inherit text color */
        }
        /* Image styling within the course card */
        .course-card img {
            width: 100%; /* Full width */
            height: 150px; /* Fixed height for uniformity */
            object-fit: cover; /* Cover the area without distortion */
        }
        /* Title styling */
        .course-card h3 {
            margin: 10px 0; /* Adjust margins */
            font-size: 1.2em; /* Font size for course title */
            font-family: 'Arial', sans-serif; /* Use a clean font */
        }
        /* Description styling */
        .course-card p {
            padding: 0 10px 10px; /* Padding for description text */
            color: #666; /* Gray text color for contrast */
            font-family: 'Arial', sans-serif; /* Use a clean font */
        }
        /* Hover effect for course cards */
        .course-card:hover {
            transform: translateY(-5px); /* Lift effect on hover */
        }
    </style>
</head>
<body>
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../Component/Header.php'; ?>

<!-- Featured Course -->
<section class="featured-course">
    <div class="container">
        <div class="featured-content">
            <h2>JavaScript</h2>
            <p>JavaScript is a powerful, versatile programming language primarily used for developing dynamic and interactive content on the web. If you are interested in taking a JavaScript course...</p>
            <button class="btn">Start Now</button>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
        </div>
        <div class="featured-image">
            <img src="../img/Courses/js co ban.jpg" alt="JavaScript Course">
        </div>
    </div>
</section>

<!-- Course Section -->
<section class="course-section">
    <div class="container">
        <h2>Course</h2>
        <div class="course-grid">
            <?php 
            include '../Connection/db_connection.php'; // Include your database connection file

            // Fetching course data
            $query = "SELECT CourseID, CourseName, Description, ImageUrl FROM courses"; // Include CourseID
            $stmt = $conn->prepare($query);

            if ($stmt) {
                $stmt->execute();
                $result = $stmt->get_result();
                http://localhost/b%C3%A0itaapj/PHP_Final-main/Page/Detail_product.php
                if ($result->num_rows > 0) {
                    while ($course = $result->fetch_assoc()) {
                        // Create a link to Detail-product.php with the course ID
                       // Inside your while loop when generating course cards
                        echo '<a href="http://localhost/bàitaapj/PHP_Final-main/Page/Detail_product.php?course_id=' . htmlspecialchars($course['CourseID']) . '" class="course-card">';
                        echo '<img src="' . htmlspecialchars($course['ImageUrl']) . '" alt="' . htmlspecialchars($course['CourseName']) . '">';
                        echo '<h3>' . htmlspecialchars($course['CourseName']) . '</h3>';
                        echo '<p>' . htmlspecialchars($course['Description']) . '</p>';
                        echo '</a>'; // Close course-card link
                    }
                } else {
                    echo "<p>No courses available.</p>";
                }
            } else {
                echo "Failed to prepare the SQL statement: " . $conn->error;
            }

            $stmt->close(); // Close the statement
            $conn->close(); // Close the database connection
            ?>
        </div>
    </div>
</section>

<?php include '../Component/Footer.php'; ?> 
</body>
</html>
