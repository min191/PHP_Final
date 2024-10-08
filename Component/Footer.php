<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3d2fa990ba.js" crossorigin="anonymous"></script>
    <style>
    /* Basic styling for the footer */
    .footer {
        background-color: #333;
        color: white;
        padding: 40px 20px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        font-family: Arial, sans-serif;
    }

    .footer div {
        flex: 1;
        margin: 0 20px;
    }

    .footer h3 {
        font-size: 22px;
        margin-bottom: 20px;
        position: relative;
    }

    .footer h3::after {
        content: '';
        display: block;
        width: 50px;
        height: 2px;
        background-color: #e30052;
        position: absolute;
        bottom: -5px;
        left: 0;
    }

    .footer p,
    .footer li {
        color: #bbb;
        margin: 10px 0;
    }

    .footer ul {
        list-style-type: none;
        padding: 0;
    }

    .footer ul li a {
        color: #bbb;
        text-decoration: none;
    }

    .footer ul li a:hover {
        color: white;
        text-decoration: underline;
    }

    .footer .subscribe-form {
        display: flex;
        align-items: center;
        margin-top: 20px;
    }

    .subscribe-form input[type="email"] {
        padding: 10px;
        border: none;
        border-radius: 4px;
        margin-right: 10px;
        font-size: 14px;
    }

    .subscribe-form button {
        background-color: #e30052;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    .social-container {
        display: flex;
        justify-content: center;
        padding: 20px 0;
    }

    .social-icons a {
        margin: 0 10px;
        color: #bbb;
        font-size: 20px;
        text-decoration: none;
    }

    .social-icons a:hover {
        color: white;
    }
    </style>
</head>

<body>

    <div class="footer">
        <!-- Left Column: Home Links -->
        <div>
            <h3>Home</h3>
            <ul>
                <li><a href="#">LECTURER</a></li>
                <li><a href="#">NOTICE</a></li>
                <li><a href="#">COURSE</a></li>
                <li><a href="#">FINANCE</a></li>
                <li><a href="#">Q&A</a></li>
            </ul>
        </div>

        <!-- Middle Column: About Us -->
        <div>
            <h3>About us</h3>
            <p>
                At Fast Learn, we are committed to providing high-quality coding courses that help you master tech
                skills
                in the shortest time possible. With modern learning methods and experienced instructors, we believe
                anyone
                can become a programmer, whether you're a beginner or have prior experience.
            </p>
        </div>

        <!-- Right Column: Address and Contact -->
        <div>
            <h3>Address</h3>
            <p><i class="fa fa-phone"></i> +84 376602009</p>
            <p><i class="fa fa-map-marker"></i> Hà Nội, Việt Nam, Trái Đất, Hệ Mặt trời</p>
            <p><i class="fa fa-envelope"></i> Example@gmail.com</p>
        </div>
    </div>

    <div class="footer social-container">
        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
        </div>
    </div>

</body>

</html>