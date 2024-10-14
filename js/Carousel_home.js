const cardList = document.querySelector('.card-list');
const nextButton = document.querySelector('.button-next');
const prevButton = document.querySelector('.button-prev');

let currentIndex = 0;
const totalItems = document.querySelectorAll('.card-item').length;
const itemsPerPage = 3; // Number of items visible at a time

function updateCarousel() {
  const offset = -(currentIndex * 360); // Adjust this value to match card width + margin
  cardList.style.transform = `translateX(${offset}px)`;
}

nextButton.addEventListener('click', () => {
  if (currentIndex < totalItems - itemsPerPage) {
    currentIndex++;
    updateCarousel();
  }
});

prevButton.addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateCarousel();
  }
});
