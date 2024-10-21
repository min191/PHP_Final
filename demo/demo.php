<?php
include '../Component/Header.php';
include '../Connection/db_connection.php';

// Set the Lecturer ID to retrieve data (you can adjust this value or make it dynamic based on user input)
$lecturer_id = 1; // Example Lecturer ID, change this as needed

// SQL query to fetch lecturer data from the Lecturers table
$sql = "SELECT * FROM Lecturers WHERE Lecturer_ID = $lecturer_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch lecturer details from the database
    $row = $result->fetch_assoc();
    $lecturer_name = $row['Lecturer_Name'];
    $lecturer_email = $row['Lecturer_Email'];
    $lecturer_phone = $row['Lecturer_PhoneNumber'];
    $lecturer_department = $row['Lecturer_Department'];
} else {
    echo "Lecturer not found.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Details</title>
    <link rel="stylesheet" href="../css/Detail_lecturer.css">
</head>

<body>
    <!-- Lecturer Information Section -->
    <div class="lecturer-info">
        <h2>Lecturer Details</h2>
        <p><strong>Name:</strong> <?= $lecturer_name ?></p>
        <p><strong>Email:</strong> <?= $lecturer_email ?></p>
        <p><strong>Phone Number:</strong> <?= $lecturer_phone ?></p>
        <p><strong>Department:</strong> <?= $lecturer_department ?></p>
    </div>

    <!-- Banner Section -->
    <div class="banner">
        <div class="banner-text">
            <div class="badge">IT Educator</div>
            <div class="name"><?= $lecturer_name ?></div>
            <div class="university"><?= $lecturer_department ?></div>
            <div class="quote">
                <span class="quote-icon">“</span>Your motivation to learn is the driving force that makes exam preparation easier.
            </div>
        </div>
        <div class="banner-image">
            <img src="../img/default-lecturer.jpg" alt="<?= $lecturer_name ?>">
        </div>
    </div>

    <?php include '../Component/Footer.php'; ?>
</body>

</html>

<?php
$conn->close(); // Close the database connection
?>
