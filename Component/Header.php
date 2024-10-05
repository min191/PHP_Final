<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <script src="https://kit.fontawesome.com/3d2fa990ba.js" crossorigin="anonymous"></script>
    <style>
    /* Basic styling for the navigation bar */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .navbar {
        background-color: #f8f9fa;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 50px;
        border-bottom: 1px solid #ddd;
    }

    .navbar-left {
        display: flex;
        align-items: center;
    }

    .logo {
        display: flex;
        align-items: center;
        margin-right: 20px;
        text-decoration: none;
        color:black;
    }

    .logo img {
        height: 70px;
    }

    .logo span {
        font-size: 18px;
        font-weight: bold;
        margin-left: 10px;
    }

    .navbar-right {
        display: flex;
        align-items: center;
    }

    .nav-links {
        margin: 0 10px;
    }

    .nav-links a {
        text-decoration: none;
        color: #007bff;
        margin: 0 10px;
        font-size: 16px;
    }

    .nav-links a:hover {
        text-decoration: underline;
    }

    .profile-icon img {
        border-radius: 50%;
        width: 30px;
        height: 30px;
    }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="navbar-left">
            <a href="../Page/HomePage.php" class="logo">
                <img src="../img/Logo.png" alt="Logo">
                <span>LOGO</span>
            </a>
        </div>
        <div class="navbar-right">
            <div class="nav-links">
                <a href="../Page/LecturerPage.php">LECTURER</a>
                <a href="../Page/Blog.php">BLOG</a>
                <a href="#">COURSE</a>
                <a href="#">FINANCE</a>
                <a href="#">Q&A</a>
            </div>
            <div class="profile-icon">
                <a href="../Page/Profile.php">
                    <i class="fa-regular fa-user"></i>
                </a>
            </div>
        </div>
    </div>

</body>

</html>