<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Blog.css">
</head>

<body>
    <?php include '../Component/Header.php';?>
    <h1 class="Banner">
        <span style="color:blue">Home</span>/Blog
    </h1>
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
    <section class="qa">
        <div class="qa-item">
            <p><strong>Nguyễn Đức Độ:</strong> Tại sao phải học lập trình?</p>
            <div class="actions">
                <span>Thích</span> | <span>Bình Luận</span> | <span>Chia Sẻ</span>
            </div>
        </div>
        <div class="qa-item">
            <p><strong>Nguyễn Quang Minh:</strong> Tại sao phải học lập trình?</p>
            <div class="actions">
                <span>Thích</span> | <span>Bình Luận</span> | <span>Chia Sẻ</span>
            </div>
        </div>
    </section>
    <?php include '../Component/Footer.php';?>
</body>

</html>