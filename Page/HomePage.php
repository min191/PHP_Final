<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Home.css">

</head>

<body>
    <?php include '../Component/Header.php';?>
    <!--Banner Section-->
    <div class="container">
        <!-- Text Section -->
        <div class="text-section">
            <h3>WELCOME TO</h3>
            <h1>FASTLEARN,</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet
                dolo re magna.</p>
        </div>

        <!-- Image Section -->
        <div class="image-section">
            <img src="../img/Banner_Home.png" alt="Learning illustration">
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
        <div class="slide-container-Learning">
            <div class="slide-content-Learning">

                <div class="card">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="../img/Courses/java.jpg" alt="" class="card-img" />
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name-Learning">Front-end</h2>
                        <p class="description-Learning">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem
                            fuga animi dignissimos eos autem minus placeat possimus aliquid
                            aspernatur accusantium a explicabo sint, sequi officiis nesciunt
                            repellat veniam modi reprehenderit.
                        </p>

                        <button class="button-Learning ">See more</button>
                    </div>
                </div>


                <div class="card">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="../img/Courses/java.jpg" alt="" class="card-img" />
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name-Learning">Front-end</h2>
                        <p class="description-Learning">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem
                            fuga animi dignissimos eos autem minus placeat possimus aliquid
                            aspernatur accusantium a explicabo sint, sequi officiis nesciunt
                            repellat veniam modi reprehenderit.
                        </p>

                        <button class="button-Learning ">See more</button>
                    </div>
                </div>


                <div class="card">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="../img/Courses/java.jpg" alt="" class="card-img" />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name-Learning">Front-end</h2>
                        <p class="description-Learning">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem
                            fuga animi dignissimos eos autem minus placeat possimus aliquid
                            aspernatur accusantium a explicabo sint, sequi officiis nesciunt
                            repellat veniam modi reprehenderit.
                        </p>

                        <button class="button-Learning ">See more</button>
                    </div>
                </div>

                <div class="card">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="../img/Courses/java.jpg" alt="" class="card-img" />
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name-Learning">Front-end</h2>
                        <p class="description-Learning">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem
                            fuga animi dignissimos eos autem minus placeat possimus aliquid
                            aspernatur accusantium a explicabo sint, sequi officiis nesciunt
                            repellat veniam modi reprehenderit.
                        </p>

                        <button class="button-Learning ">See more</button>
                    </div>
                </div>


                <div class="card">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="../img/Courses/java.jpg" alt="" class="card-img" />
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name-Learning">Front-end</h2>
                        <p class="description-Learning">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem
                            fuga animi dignissimos eos autem minus placeat possimus aliquid
                            aspernatur accusantium a explicabo sint, sequi officiis nesciunt
                            repellat veniam modi reprehenderit.
                        </p>

                        <button class="button-Learning ">See more</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="carousel-controls-Learning">
            <button class="prev-btn-Learning" onclick="slideCards('prev')">&#10094;</button>
            <button class="next-btn-Learning" onclick="slideCards('next')">&#10095;</button>
        </div>

    </div>

    <!-- Courses Section -->
    <h2>Courses</h2>
    <div class="card-wrapper">
        <!-- Card slides container -->
        <ul class="card-list wrapper">
            <li class="card-item">
                <a href="#" class="card-link">
                    <img src="../img/Courses/HTML&Css.jpg" alt="Card Image" class="card-image">
                    <p class="badge badge-designer">Front-end</p>
                    <h2 class="card-title">HTML structures web content with text, images, and links. CSS styles HTML
                        elements, controlling colors and layouts.</h2>
                    <button class="card-button"><i class="fa-solid fa-angle-right"></i></button>
                </a>
            </li>
            <li class="card-item">
                <a href="#" class="card-link">
                    <img src="../img/Courses/js co ban.jpg" alt="Card Image" class="card-image">
                    <p class="badge badge-developer">Front-end</p>
                    <h2 class="card-title">JavaScript is a popular programming language primarily used to create dynamic
                        interactions on the web.</h2>
                    <button class="card-button"><i class="fa-solid fa-angle-right"></i></button>
                </a>
            </li>
            <li class="card-item">
                <a href="#" class="card-link">
                    <img src="../img/Courses/java.jpg" alt="Card Image" class="card-image">
                    <p class="badge badge-marketer">Back-end</p>
                    <h2 class="card-title">Java is a powerful, object-oriented programming language developed by Sun
                        Microsystems in the mid-1990s.</h2>
                    <button class="card-button"><i class="fa-solid fa-angle-right"></i></button>
                </a>
            </li>
            <li class="card-item">
                <a href="#" class="card-link">
                    <img src="../img/Courses/pts.webp" alt="Card Image" class="card-image">
                    <p class="badge badge-gamer">Design</p>
                    <h2 class="card-title">Adobe Photoshop is a professional image editing software developed by Adobe
                        Systems.</h2>
                    <button class="card-button"><i class="fa-solid fa-angle-right"></i></button>
                </a>
            </li>
            <li class="card-item">
                <a href="#" class="card-link">
                    <img src="../img/Courses/sql.jpg" alt="Card Image" class="card-image">
                    <p class="badge badge-editor">Database</p>
                    <h2 class="card-title">SQL (Structured Query Language) is a programming language used to manage and
                        manipulate relational databases.</h2>
                    <button class="card-button"><i class="fa-solid fa-angle-right"></i></button>
                </a>
            </li>
        </ul>

        <!-- Navigation Buttons -->
        <button class="slide-button button-prev">&#9664;</button>
        <button class="slide-button button-next">&#9654;</button>
        <!-- Pagination -->
        <!-- <div class="pagination"></div> -->

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
    <?php include '../Component/Footer.php';?>
</body>
<!-- <script src="../js/login.js"></script> -->
<script src="../js/Carousel_home.js"></script>
<script src="../js/Learning_home.js"></script>


</html>