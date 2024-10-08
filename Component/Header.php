<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <script src="https://kit.fontawesome.com/3d2fa990ba.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/login.css">
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
        color: black;
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

    /* Căn giữa dropdown menu dưới biểu tượng người dùng */
    .profile-icon {
        position: relative;
        /* Thiết lập vị trí tương đối để căn chỉnh dropdown menu */
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        /* Đặt dropdown menu ngay bên dưới biểu tượng người dùng */
        left: 50%;
        transform: translateX(-50%);
        background-color: #f9f9f9;
        min-width: 150px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }



    /* Style the dropdown menu items */
    .dropdown-menu ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .dropdown-menu li {
        padding: 8px 12px;
    }

    .dropdown-menu li a {
        text-decoration: none;
        color: black;
        display: block;
    }

    .dropdown-menu li a:hover {
        background-color: #ddd;
    }

    /* Show the dropdown menu when hovering over the profile icon */
    .profile-icon:hover .dropdown-menu {
        display: block;
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
                <a href="../Page/Course.php">COURSE</a>
                <a href="#">FINANCE</a>
                <a href="../Page/Q&A.php">Q&A</a>
            </div>
            <div class="profile-icon">
                <a>
                    <i class="fa-regular fa-user"></i>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a class="box-hidden show_login">Login</a></li>
                        <li><a href="../Page/Profile.php">Profile</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</body>
<script src="../js/login.js"></script>

</html>