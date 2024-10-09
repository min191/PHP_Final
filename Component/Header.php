<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <script src="https://kit.fontawesome.com/3d2fa990ba.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/Header.css">
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
        margin: 0 40px;
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
                <label class="popup">
                  <input type="checkbox" />
                  <div tabindex="0" class="burger">
                    <i class="fa-regular fa-user"></i>
                  </div>
                  <nav class="popup-window">
                    <legend>Quick Start</legend>
                    <ul>
                      <li>
                        <button class="show_login">
                          <i class="fa-solid fa-right-to-bracket"></i>
                          <span>Log In</span>
                        </button>
                      </li>
                      <li>
                        <button onclick="window.location.href='../Page/Profile.php'">
                          <i class="fa-regular fa-address-card"></i>
                          <span>Profile</span>
                        </button>
                      </li>
                    </ul>
                  </nav>
                </label>
            </div>
            

        </div>
    </div>

</body>
<script src="../js/login.js"></script>

</html>