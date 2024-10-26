<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Thông tin meta và các tài nguyên bên ngoài cho tài liệu -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Liên kết đến tệp CSS bên ngoài để định dạng giao diện -->
    <link rel="stylesheet" href="../css/Detail_product.css">
</head>

<body>
    <!-- Bao gồm phần đầu (header) từ một tệp PHP bên ngoài -->
    <?php include '../Component/Header.php';?>
    <div class="course-container">
        <div class="course-info">
            <h2 class="course-title">Basic JavaScript Programming</h2>
            <p class="course-description">
                Learning basic JavaScript is suitable for those who have never studied
                programming.<br /> With over 100 lessons and practical exercises after each
                lesson.
            </p>
        </div>
        <div class="course-card">
            <img src="../img/Courses/js.jpg" alt="" style="with:100px">
            <button class="buy-button">Buy Now</button>
            <div class="course-details">
                <p><span class="icon">🕒</span> Thời lượng: 82h30'</p>
                <p><span class="icon">👥</span> 123,132 lượt đăng kí</p>
                <p><span class="icon">📚</span> Số Bài Giảng: 37</p>
            </div>
        </div>
    </div>
    <!-- What will you learn ? -->
    <div style="
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70vh;
    margin: 0;
    ">
        <div class="container">
            <div class="title">What will you learn?</div>
            <div class="grid-container">
                <div class="item">
                    <div class="item-icon">✔</div>
                    <div class="item-text">Understand the basic concepts of JavaScript in detail</div>
                </div>
                <div class="item">
                    <div class="item-icon">✔</div>
                    <div class="item-text">Build your first website using JavaScript</div>
                </div>
                <div class="item">
                    <div class="item-icon">✔</div>
                    <div class="item-text">Have a strong foundation to learn JS libraries and frameworks</div>
                </div>
                <div class="item">
                    <div class="item-icon">✔</div>
                    <div class="item-text">Master the features introduced in ES6</div>
                </div>
                <div class="item">
                    <div class="item-icon">✔</div>
                    <div class="item-text">Become proficient in DOM APIs to interact with web pages</div>
                </div>
                <div class="item">
                    <div class="item-icon">✔</div>
                    <div class="item-text">Retain concepts through multiple-choice exercises</div>
                </div>
                <div class="item">
                    <div class="item-icon">✔</div>
                    <div class="item-text">Enhance problem-solving skills with tests involving test cases</div>
                </div>
                <div class="item">
                    <div class="item-icon">✔</div>
                    <div class="item-text">Hands-on projects such as Tabs, Music Player</div>
                </div>
                <div class="item">
                    <div class="item-icon">✔</div>
                    <div class="item-text">Receive a course completion certificate issued by FastLearn</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Khối chính cho nội dung khóa học -->

    <div id="course_content">
        <!-- Tiêu đề của phần nội dung khóa học -->
        <h1 id="course_content_title">
            Course Content:
        </h1>

        <!-- Phần phụ đề hiển thị số lượng chương và bài học -->
        <div id="course_content_subtitle">
            <div id="course_content_subtitle_chapterANDlesson">
                <span id="course_content_subtitle--chapter">
                    10 chapters
                </span>
                •
                <span id="course_content_subtitle--lesson">
                    37 lessons
                </span>
            </div>
        </div>

        <!-- Khối chứa các chương và bài học của khóa học dưới dạng các thẻ (cards) -->


        <div id="course_content_card">

            <!-- Thẻ chương -->
            <div class="course_content_card_chapterANDlesson">
                <div class="course_content_card_chapter">
                    <!-- Tiêu đề của chương -->
                    <div class="course_content_card_chapter--title">
                        1. Lorem ipsum
                    </div>
                    <!-- Số lượng bài học trong chương -->
                    <div class="course_content_card_chapter--lesson">
                        3 lessons
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    1. Lorem ipsum
                                </div>
                            </div>
                            <!-- Đường kẻ phân cách giữa các bài học -->

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    2. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    3. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Thẻ chương -->
            <div class="course_content_card_chapterANDlesson">
                <div class="course_content_card_chapter">
                    <div class="course_content_card_chapter--title">
                        <!-- Tiêu đề của chương -->
                        2. Lorem ipsum
                    </div>
                    <!-- Số lượng bài học trong chương -->
                    <div class="course_content_card_chapter--lesson">
                        3 lessons
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    1. Lorem ipsum
                                </div>
                            </div>
                            <!-- Đường kẻ phân cách giữa các bài học -->

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    2. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    3. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Thẻ chương -->
            <div class="course_content_card_chapterANDlesson">
                <div class="course_content_card_chapter">
                    <div class="course_content_card_chapter--title">
                        <!-- Tiêu đề của chương -->
                        3. Lorem ipsum
                    </div>
                    <!-- Số lượng bài học trong chương -->
                    <div class="course_content_card_chapter--lesson">
                        3 lessons
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    1. Lorem ipsum
                                </div>
                            </div>
                            <!-- Đường kẻ phân cách giữa các bài học -->

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    2. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    3. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Thẻ chương -->
            <div class="course_content_card_chapterANDlesson">
                <div class="course_content_card_chapter">
                    <!-- Tiêu đề của chương -->
                    <div class="course_content_card_chapter--title">
                        4. Lorem ipsum
                    </div>
                    <!-- Số lượng bài học trong chương -->
                    <div class="course_content_card_chapter--lesson">
                        3 lessons
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    1. Lorem ipsum
                                </div>
                            </div>
                            <!-- Đường kẻ phân cách giữa các bài học -->

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    2. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    3. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Thẻ chương -->
            <div class="course_content_card_chapterANDlesson">
                <div class="course_content_card_chapter">
                    <!-- Tiêu đề của chương -->
                    <div class="course_content_card_chapter--title">
                        5. Lorem ipsum
                    </div>
                    <!-- Số lượng bài học trong chương -->
                    <div class="course_content_card_chapter--lesson">
                        3 lessons
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    1. Lorem ipsum
                                </div>
                            </div>
                            <!-- Đường kẻ phân cách giữa các bài học -->

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    2. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    3. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Thẻ chương -->
            <div class="course_content_card_chapterANDlesson">
                <div class="course_content_card_chapter">
                    <!-- Tiêu đề của chương -->
                    <div class="course_content_card_chapter--title">
                        6. Lorem ipsum
                    </div>
                    <!-- Số lượng bài học trong chương -->
                    <div class="course_content_card_chapter--lesson">
                        3 lessons
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    1. Lorem ipsum
                                </div>
                            </div>
                            <!-- Đường kẻ phân cách giữa các bài học -->

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    2. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    3. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Thẻ chương -->
            <div class="course_content_card_chapterANDlesson">
                <div class="course_content_card_chapter">
                    <!-- Tiêu đề của chương -->
                    <div class="course_content_card_chapter--title">
                        7. Lorem ipsum
                    </div>
                    <!-- Số lượng bài học trong chương -->
                    <div class="course_content_card_chapter--lesson">
                        3 lessons
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    1. Lorem ipsum
                                </div>
                            </div>
                            <!-- Đường kẻ phân cách giữa các bài học -->

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    2. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    3. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Thẻ chương -->
            <div class="course_content_card_chapterANDlesson">
                <div class="course_content_card_chapter">
                    <!-- Tiêu đề của chương -->
                    <div class="course_content_card_chapter--title">
                        8. Lorem ipsum
                    </div>
                    <!-- Số lượng bài học trong chương -->
                    <div class="course_content_card_chapter--lesson">
                        3 lessons
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    1. Lorem ipsum
                                </div>
                            </div>
                            <!-- Đường kẻ phân cách giữa các bài học -->

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    2. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    3. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Thẻ chương -->
            <div class="course_content_card_chapterANDlesson">
                <div class="course_content_card_chapter">
                    <!-- Tiêu đề của chương -->
                    <div class="course_content_card_chapter--title">
                        9. Lorem ipsum
                    </div>
                    <!-- Số lượng bài học trong chương -->
                    <div class="course_content_card_chapter--lesson">
                        3 lessons
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    1. Lorem ipsum
                                </div>
                            </div>
                            <!-- Đường kẻ phân cách giữa các bài học -->

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    2. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    3. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Thẻ chương -->
            <div class="course_content_card_chapterANDlesson">
                <div class="course_content_card_chapter">
                    <!-- Tiêu đề của chương -->
                    <div class="course_content_card_chapter--title">
                        10. Lorem ipsum
                    </div>
                    <!-- Số lượng bài học trong chương -->
                    <div class="course_content_card_chapter--lesson">
                        3 lessons
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    1. Lorem ipsum
                                </div>
                            </div>
                            <!-- Đường kẻ phân cách giữa các bài học -->

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    2. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Bài học trong chương -->
                <div class="course_content_card_chapter_lesson">
                    <div>
                        <div class="course_content_card_lesson">
                            <!-- Tiêu đề của bài học -->
                            <div class="course_content_card_lesson--title">
                                <div class="course_content_card_lesson--line">
                                    3. Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Course Content -->
    <div style="margin: 20px 0;">
    <div class="title_Content">Course Content</div>
    <div>
        <div class="item">
            <div class="item-icon">✔</div>
            <div class="item-text">A computer with internet (Windows, Ubuntu, or macOS)</div>
        </div>
        <div class="item">
            <div class="item-icon">✔</div>
            <div class="item-text">High self-discipline and persistence</div>
        </div>
        <div class="item">
            <div class="item-icon">✔</div>
            <div class="item-text">Take your time with lessons and exercises</div>
        </div>
        <div class="item">
            <div class="item-icon">✔</div>
            <div class="item-text">Join the Q&A group for help</div>
        </div>
        <div class="item">
            <div class="item-icon">✔</div>
            <div class="item-text">Everything you need to know will be covered in the course</div>
        </div>
    </div>
    </div>
    <?php include '../Component/Footer.php';?>
</body>
<!-- Liên kết đến tệp JavaScript bên ngoài để xử lý tương tác -->
<script src="../js/Detail_product.js"></script>

</html>