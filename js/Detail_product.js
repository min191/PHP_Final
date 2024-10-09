document.querySelectorAll('.course_content_card_chapter').forEach((chapter) => {
    chapter.addEventListener('click', function() {
        // Tìm các lesson liên quan
        let lessons = this.parentElement.querySelectorAll('.course_content_card_chapter_lesson');
        
        // Kiểm tra trạng thái hiện tại và toggle
        lessons.forEach((lesson) => {
            if (lesson.style.display === 'none' || lesson.style.display === '') {
                lesson.style.display = 'block';
            } else {
                lesson.style.display = 'none';
            }
        });

        // Đổi icon từ + sang - và ngược lại
        let icon = this.querySelector('img');
        if (icon.src.includes('plus-small-svgrepo-com.svg')) {
            icon.src = 'svg/minus-small-svgrepo-com.svg';
        } else {
            icon.src = 'svg/plus-small-svgrepo-com.svg';
        }
    });
});

const courseHTML = `
<div class="course_card">
    <div class="course_card--img">
        <img src="https://i.pinimg.com/564x/6f/2d/87/6f2d8730ac53479d39e440b84e2e9cdc.jpg" alt="Course Image">
    </div>
    <div class="course_card--content">
        <div class="course_card--content--title">
            Master of Business Administration (iMBA)
        </div>
        <div class="course_card--content--price">
            $ 200.000
        </div>
        <div class="course_card--content--star">
            <span>0</span>
            <span>
                <img src="svg/small_star_notfill.svg" alt="Star">
                <img src="svg/small_star_notfill.svg" alt="Star">
                <img src="svg/small_star_notfill.svg" alt="Star">
                <img src="svg/small_star_notfill.svg" alt="Star">
                <img src="svg/small_star_notfill.svg" alt="Star">
            </span>
        </div>
    </div>
</div>`;

const courseList = document.getElementById('course_similar_cards');

// Lặp lại 12 lần và thêm thẻ vào DOM
for (let i = 0; i < 3; i++) {
courseList.innerHTML += courseHTML;
}

const review = `
    <div class="review_card">
        <div class="review_info">
            <div class="review_info_avatar">
                <img src="https://i.pinimg.com/564x/27/75/b8/2775b828cdc64132837206ee68971469.jpg">
            </div>
            <div class="review_info_text">
                <div class="review_info_text--name">
                    Lorem ipsum
                </div>
                <div class="review_info_text--starANDdate">
                    <div class="review_info_text--reviewpoint">
                        5 / 5
                    </div>
                    <div class="review_info_text--reviewstar">
                        <img src="svg/tiny_star_fill.svg" alt="Star">
                        <img src="svg/tiny_star_fill.svg" alt="Star">
                        <img src="svg/tiny_star_fill.svg" alt="Star">
                        <img src="svg/tiny_star_fill.svg" alt="Star">
                        <img src="svg/tiny_star_fill.svg" alt="Star">
                    </div>
                    <div class="review_info_text--reviewdate">
                        Feb 12, 2024
                    </div>
                </div>
            </div>
        </div>
        <div class="review_detail">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, ratione veritatis, doloremque nesciunt tempore esse corrupti voluptatem minus ipsam, placeat unde amet dignissimos aut inventore dolorem aspernatur ipsum. Recusandae, in!
        </div>
    </div>`;

const reviewlist = document.getElementById('course_review');

// Lặp lại 12 lần và thêm thẻ vào DOM
for (let i = 0; i < 5; i++) {
    reviewlist.innerHTML += review;
}

window.addEventListener("scroll", function () {
    const chatBubble = document.querySelector(".chat-bubble");
    const footer = document.querySelector(".footer");
    
    const footerRect = footer.getBoundingClientRect();
    const windowHeight = window.innerHeight;
    
    if (footerRect.top < windowHeight) {
      // Khi footer xuất hiện trên màn hình, bong bóng sẽ dừng lại ở trên footer
      chatBubble.style.bottom = `${windowHeight - footerRect.top + 20}px`;
    } else {
      // Bong bóng giữ vị trí cố định ở góc dưới màn hình khi chưa chạm footer
      chatBubble.style.bottom = "20px";
    }
  });