<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Home.css">
</head>

<body>
    <?php include '../../Component/Header.php';?>
    <!--Banner Section-->
    <div class="container">
        <!-- Text Section -->
        <div class="text-section">
            <h3>WELCOME TO</h3>
            <h1>FASTLEARN,</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet
                dolo re magna.</p>
            <div class="buttons">
                <button class="login-btn">LOG IN</button>
                <button class="signin-btn">SIGN IN</button>
            </div>
        </div>

        <!-- Image Section -->
        <div class="image-section">
            <img src="../../img/BannerHomePage.png" alt="Learning illustration">
        </div>
    </div>

     <!-- About Us Section with Timeline -->
     <section class="about-us">
        <h2>About Us</h2>
        <div class="timeline">
            <div class="timeline-event left">
                <div class="content">
                    <p>2014-2015</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                </div>
            </div>

            <div class="timeline-event right">
                <div class="content">
                    <p>2014-2015</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Learning Path Section -->
    <div class="learning-path">
        <h2>Learning Path</h2>
        <div class="cards">
            <div class="card">
                <img src="front-end-image.png" alt="Front-End">
                <h3>Front-End</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod</p>
                <button>See More</button>
            </div>
            <div class="card">
                <img src="back-end-image.png" alt="Back-End">
                <h3>Back-End</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod</p>
                <button>See More</button>
            </div>
        </div>
    </div>

    <!-- Courses Section -->
    <div class="courses">
        <h2>Courses</h2>
        <div class="cards">
            <div class="card">
                <img src="html-image.png" alt="HTML">
                <h3>HTML</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <button>See More</button>
            </div>
            <div class="card">
                <img src="css-image.png" alt="HTML & CSS">
                <h3>HTML & CSS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <button>See More</button>
            </div>
            <div class="card">
                <img src="javascript-image.png" alt="JavaScript">
                <h3>JavaScript</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <button>See More</button>
            </div>
        </div>
        <a href="#" class="see-more">See More</a>
    </div>

    <!-- Review Section -->
    <div class="reviews">
        <h2>Review</h2>
        <div class="reviews-carousel">
            <div class="review">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod"</p>
            </div>
            <div class="review">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod"</p>
            </div>
            <div class="review">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod"</p>
            </div>
        </div>
    </div>
    <?php include '../../Component/Footer.php';?>
</body>

</html>