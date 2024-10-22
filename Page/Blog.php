<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Blog.css">
    <link rel="stylesheet" href="../css/Blog-Q&A.css">
</head>

<body>
    <?php include '../Component/Header.php';?>
    <h2>News</h2>
    <section class="news">
        <div class="cards-new">
            <!-- Repeatable Card Structure -->
            <div class="card">
                <img src="news-image1.png" alt="News 1">
                <h3>News Title 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button>Read More</button>
            </div>
            <div class="card">
                <img src="news-image1.png" alt="News 1">
                <h3>News Title 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button>Read More</button>
            </div>
            <div class="card">
                <img src="news-image1.png" alt="News 1">
                <h3>News Title 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button>Read More</button>
            </div>
            <!-- More cards can go here -->
        </div>
    </section>

    <h2>Team Building</h2>
    <section class="team-building">
        <div class="cards-team">
            <div class="card">
                <img src="team-building-image.png" alt="Team Building">
                <h3>Summer 2022</h3>
            </div>
            <div class="card">
                <img src="team-building-image.png" alt="Team Building">
                <h3>Summer 2022</h3>
            </div>
        </div>
    </section>

    <h2>Q&A</h2>
    <section class="content-profile">
        <div class="carousel-container">
            <div class="carousel-wrapper">
                <div class="carousel-item testimonial">
                    <img src="../img/mint.jpg" alt="Guest Image">
                    <p>
                        Quang Minh, bạn là một người đặc biệt, có nhiều phẩm chất đáng khen ngợi. Sự thông minh và sáng
                        tạo của bạn là nguồn động viên lớn, <br>
                        không chỉ giúp bạn tỏa sáng mà còn là nguồn động lực cho những người xung quanh.
                    </p>
                </div>
                <div class="carousel-item testimonial">
                    <img src="../img/mint.jpg" alt="Guest Image">
                    <p>
                        Tinh thần làm việc của bạn rất tích cực và kiên trì. Bạn luôn hướng tới mục tiêu của mình một
                        cách quyết tâm, không ngần ngại khó khăn.<br> Sự cam kết của bạn là điều đáng nể, đồng hành với
                        đó là khả năng giải quyết vấn đề linh hoạt và sáng tạo, giúp bạn vượt qua mọi thách thức.
                    </p>
                </div>
            </div>
            <button class="control-button prev" onclick="prevSlide()">❮</button>
            <button class="control-button next" onclick="nextSlide()">❯</button>
        </div>
    </section>
    </div>
    <?php include '../Component/Footer.php';?>
</body>
<script  src="../js/Q&A.js"></script>   

</html>