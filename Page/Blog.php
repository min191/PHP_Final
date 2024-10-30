
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.84.0" />
    <title>Blog Template</title>
    <!-- Bootstrap core CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Favicons -->
    <link
      rel="apple-touch-icon"
      href="/docs/5.0/assets/img/favicons/apple-touch-icon.png"
      sizes="180x180"
    />
    <link
      rel="icon"
      href="/docs/5.0/assets/img/favicons/favicon-32x32.png"
      sizes="32x32"
      type="image/png"
    />
    <link
      rel="icon"
      href="/docs/5.0/assets/img/favicons/favicon-16x16.png"
      sizes="16x16"
      type="image/png"
    />
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json" />
    <link
      rel="mask-icon"
      href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg"
      color="#7952b3"
    />
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico" />
    <meta name="theme-color" content="#7952b3" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .bg-image {
    background-image: url('https://i.pinimg.com/564x/96/cf/a9/96cfa90d02e6b1d03be915dd71074e79.jpg'); /* Update this path */
    background-size: cover; /* Ensure the image covers the entire div */
    background-position: center; /* Center the image */
    color: white; /* Keep text color white for readability */
    height: 580px; /* Set a height for the div */
    border-radius: 10px; /* Add rounded corners */
    display: flex; /* Use flexbox for centering content */
    padding: 20px; /* Add padding inside the div */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Add a subtle shadow for depth */
}
    </style>

    <!-- Custom styles for this template -->
    <link
      href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  <?php include '../Component/Header.php';?>
  <main class="container mt-3 my-5">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-image">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic">
          Mình đã làm thế nào để hoàn thành dự án website trong 15 ngày
          </h1>
          <p class="lead my-3">
          Xin chào mọi người, mình là Lý Cao Nguyên. Mình đã làm một dự án website front-end với hơn 100 bài học và 200 bài viết.
          </p>
          <p class="lead mb-0">
            <a href="News3.php" class="text-blue fw-bold">Continue reading...</a>
          </p>
        </div>
      </div>

     <div class="row mb-2">
  <div class="col-md-6">
    <div style="height: 350px;" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-0">ReactJS with Typescript [Series]. Phần 1 Basic Typescript</h3>
        <div class="mb-1 text-muted">Nov 12</div>
        <p class="card-text mb-auto">
        Chào các bạn cộng đồng lập trình f8 mình cũng là một thành viên.Hôm nay mình muốn viết một series về
                ReactJS
                kết hợp với typescript . Mình mong mọi người sẽ đón nhận và trao đổi kiến thức với nhau.Bài viết này sẽ
                viết
                về những điều tuyệt vời và hay ho khi làm việc với typescript nhé.
        </p>
        <a href="News2.php" class="stretched-link">Continue reading</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div style="height: 350px;" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-0">Hướng dẫn chi tiết cách sử dụng Dev Mode trong khóa Pro</h3>
        <div class="mb-1 text-muted">Nov 11</div>
        <p class="mb-auto">
          Chào bạn! Nếu bạn đã là học viên khóa Pro của ..., chắc hẳn bạn đã biết tới "Dev Mode" - giúp thực hành code song song khi xem video (bạn không cần phải dùng tới VS Code nữa).
        </p>
        <a href="News1.php" class="stretched-link">Continue reading</a>
      </div>
    </div>
  </div>
</div>

      <div class="row g-5">
  <div class="col-md-8">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">Courses Available</h3>

    <article class="course-post">
      <h2 class="course-post-title">Web Development Basics</h2>
      <p class="course-post-meta">
        Start Date: November 1, 2024 | Instructor: <a href="https://codegym.vn/blog/co-ban-ve-lap-trinh-web/">Mark</a>
      </p>
      <p>
        This course covers the fundamental concepts of web development, including HTML, CSS, and JavaScript basics, along with practical exercises to build foundational skills.
      </p>
      <hr />
      <p>
        Students will learn to structure web pages, style with CSS, and add interactivity with JavaScript. Perfect for beginners looking to start a career in web development.
      </p>
      <h3>Course Content Highlights</h3>
      <ul>
        <li>Introduction to HTML and CSS</li>
        <li>Basic JavaScript functions</li>
        <li>Building a simple interactive webpage</li>
      </ul>
    </article>

    <article class="course-post">
      <h2 class="course-post-title">Advanced JavaScript Techniques</h2>
      <p class="course-post-meta">
        Start Date: December 15, 2024 | Instructor: <a href="https://www.coursera.org/learn/packt-advanced-javascript-concepts-bqnv1">Jacob</a>
      </p>
      <p>
        This course dives deep into JavaScript, focusing on advanced concepts like closures, asynchronous programming, and modern ES6+ syntax.
      </p>
      <blockquote>
        <p>
          "Understanding JavaScript at a deeper level unlocks the true power of modern web development." — Instructor Jacob
        </p>
      </blockquote>
      <p>Includes hands-on projects to apply each technique in a real-world setting.</p>
    </article>

    <article class="course-post">
      <h2 class="course-post-title">Introduction to Machine Learning</h2>
      <p class="course-post-meta">
        Start Date: January 10, 2025 | Instructor: <a href="https://www.udemy.com/course/khoa-hoc-machine-learning-hoc-may-tu-co-ban-en-nang-cao/?couponCode=LETSLEARNNOW">Chris</a>
      </p>
      <p>
        An introductory course on Machine Learning principles, covering topics like supervised and unsupervised learning, neural networks, and model evaluation.
      </p>
      <ul>
        <li>Understanding ML algorithms</li>
        <li>Data preprocessing techniques</li>
        <li>Building a basic ML model</li>
      </ul>
      <p>
        A perfect course for those interested in data science and artificial intelligence.
      </p>
    </article>
  </div>

  <div class="col-md-4">
    <div class="position-sticky" style="top: 2rem">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="fst-italic">About Our Courses</h4>
        <p class="mb-0">
          We offer a variety of courses to help you advance in your career, whether you're a beginner or looking to deepen your knowledge in specialized topics.
        </p>
      </div>
      <div class="p-4">
        <h4 class="fst-italic">Connect with Us</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </div>
  </div>
</div>
    </main>
    <?php include '../Component/Footer.php';?>
  </body>
</html>