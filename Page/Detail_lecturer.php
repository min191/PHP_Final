<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail_lecturer</title>
    <link rel="stylesheet" href="../css/Detail_lecturer.css">

</head>

<body>
    <?php include '../Component/Header.php';?>
    <!--Banner Section-->
    <div class="banner">
        <!-- Text section of the banner -->
        <div class="banner-text">
            <!-- Badge indicating educator's title -->
            <div class="badge">Innovative IT Educator</div>
            <!-- Educator's name -->
            <div class="name">ĐỖ VĂN TIẾN ĐẠT</div>
            <!-- University name -->
            <div class="university">Thủ Đô University</div>
            <!-- Educator's quote -->
            <div class="quote">
                <span class="quote-icon">“</span>Cảm hứng học tập là nguồn động lực quan trọng giúp các bạn học sinh dễ
                dàng trải qua giai đoạn chuẩn bị cho các kỳ thi khó nhằn
            </div>
        </div>
        <!-- Image section of the banner -->
        <div class="banner-image">
            <img src="../img/khoa.jpg" alt="Đỗ Văn Tiến Đạt">
        </div>
    </div>
    <!-- About -->
    <div class="about_lecturer">
        <h2> Triết lý giáo dục</h2>
        <iframe style="
        width:550px;
        height:350px;
        border: 1px solid white;
        border-radius: 10px;
        margin:20px;
        " src="https://www.youtube.com/embed/0SJE9dYdpps?list=PL_-VfJajZj0VgpFpEVFzS5Z-lkXtBe-x5" frameborder="0"
            allowfullscreen></iframe>
        <div style="padding:0 200px">
            <p>Đối với thầy Đạt, cảm hứng học tập là nguồn động lực quan trọng giúp các bạn học sinh dễ dàng trải qua
                giai
                đoạn chuẩn bị cho các kỳ thi khó nhằn. Theo thầy Đạt, bản thân các bài thi đã gây căng thẳng cao, mà
                giai
                đoạn học luyện thi cũng cực kỳ khô khan và dễ gây nản chí. Chính vì thế các bạn cần phải có một nguồn
                động
                lực, một nguồn cảm hứng giúp các bạn thấy được việc học luyện thi chuẩn hoá không còn là một điều đáng
                sợ và
                biến việc ôn luyện trở thành “sở thích” của mình.Để giúp các học sinh có được nguồn cảm hứng học tập,
                thầy
                Đạt sử dụng nhiều phương pháp, bao gồm phương pháp kể những câu chuyện về các cựu học sinh thành công
                của
                thầy Đạt, giúp các bạn có động lực quyết tâm giành chiến thắng. Hoặc phong cách giảng bài hài.......</p>
        </div>
        <div>
            <h2>Các lớp đang dạy</h2>
            <ul class="card-list wrapper">
                <li class="card-item">
                    <a href="#" class="card-link">
                        <img src="../img/Courses/HTML&Css.jpg" alt="Card Image" class="card-image">
                        <p class="badge badge-designer">Front-end</p>
                        <h2 class="card-title">HTML structures web content with text, images, and links. CSS styles HTML
                            elements, controlling colors and layouts.</h2>
                    </a>
                </li>
                <li class="card-item">
                    <a href="#" class="card-link">
                        <img src="../img/Courses/js co ban.jpg" alt="Card Image" class="card-image">
                        <p class="badge badge-developer">Front-end</p>
                        <h2 class="card-title">JavaScript is a popular programming language primarily used to create
                            dynamic
                            interactions on the web.</h2>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <?php include '../Component/Footer.php';?>
</body>

</html>