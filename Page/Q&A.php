<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Q&A.css">
</head>

<body>
    <?php include '../Component/Header.php';?>
    <div class="content-profile">
    <h2 style="padding: 30px;">What our Guests Say</h2>
    <div class="carousel-container">
        <button class="control-button prev" onclick="prevSlide()">❮</button>
        <div class="carousel-wrapper">
            <div class="carousel-item testimonial">
                <img src="./images/khoa.jpg" alt="Guest Image">
                <p>
                    Quang Minh, bạn là một người đặc biệt, có nhiều phẩm chất đáng khen ngợi. Sự thông minh và sáng tạo của bạn là nguồn động viên lớn, <br>
                    không chỉ giúp bạn tỏa sáng mà còn là nguồn động lực cho những người xung quanh.
                </p>
            </div>
            <div class="carousel-item testimonial">
                <img src="./images/dat.jpg" alt="Guest Image">
                <p>
                    Tinh thần làm việc của bạn rất tích cực và kiên trì. Bạn luôn hướng tới mục tiêu của mình một cách quyết tâm, không ngần ngại khó khăn.<br> Sự cam kết của bạn là điều đáng nể, đồng hành với đó là khả năng giải quyết vấn đề linh hoạt và sáng tạo, giúp bạn vượt qua mọi thách thức.
                </p>
            </div>
            <div class="carousel-item testimonial">
                <img src="./images/quang2.jpg" alt="Guest Image">
                <p>
                    Quang Minh, sự xuất sắc và lòng nhiệt thành của bạn không chỉ làm cho bạn nổi bật mà còn là nguồn động viên và hỗ trợ quý báu cho mọi người xung quanh. <br> Tôi tin rằng với tất cả những phẩm chất tích cực này, bạn sẽ tiếp tục chinh phục những thành công mới trong cuộc sống và sự nghiệp của mình.
                </p>
            </div>
        </div>
        <button class="control-button next" onclick="nextSlide()">❯</button>
    </div>
</div>
 <script  src="../js/Q&A.js"></script>
</body>

</html>