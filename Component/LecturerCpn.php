<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
      <div class="card">
        <div class="card__img">
          <svg xmlns="http://www.w3.org/2000/svg" width="100%">
            <rect fill="#ffffff" width="540" height="450"></rect>
            <defs>
              <linearGradient
                id="a"
                gradientUnits="userSpaceOnUse"
                x1="0"
                x2="0"
                y1="0"
                y2="100%"
                gradientTransform="rotate(222,648,379)"
              >
                <stop offset="0" stop-color="#ffffff"></stop>
                <stop offset="1" stop-color="#FC726E"></stop>
              </linearGradient>
              <pattern
                patternUnits="userSpaceOnUse"
                id="b"
                width="300"
                height="250"
                x="0"
                y="0"
                viewBox="0 0 1080 900"
              ></pattern>
            </defs>
            <rect x="0" y="0" fill="url(#a)" width="100%" height="100%"></rect>
            <rect x="0" y="0" fill="url(#b)" width="100%" height="100%"></rect>
          </svg>
        </div>
        <div class="card__avatar">
          <img src="../img/khoa.jpg" alt="" />
        </div>
        <div class="card__title">Cameron Williamson</div>
        <div class="card__subtitle">Web Development</div>
        <button class="card__btn">
          <a style="color:black;" href="../page/Detail_lecturer.php">See more</a>
        </button>
      </div>
</body>
</html>
