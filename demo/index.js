
  let currentSlide = 0; // Start with the first slide
  const totalSlides = document.querySelectorAll('.card').length; // Get the total number of cards
  const slideContainer = document.querySelector('.slide-content-Learning');

  function slideCards(direction) {
    const slideWidth = 360; // Width of a card (including margin/padding)
    const maxSlide = totalSlides - 1; // Last slide index
    
    if (direction === 'next') {
      if (currentSlide < maxSlide) {
        currentSlide++; // Go to the next slide if available
      } else {
        currentSlide = 0; // Loop back to the first slide
      }
    } else if (direction === 'prev') {
      if (currentSlide > 0) {
        currentSlide--; // Go to the previous slide if available
      } else {
        currentSlide = maxSlide; // Loop back to the last slide
      }
    }

    // Calculate new position and apply transformation
    const newPosition = -(slideWidth + 20) * currentSlide;
    slideContainer.style.transform = `translateX(${newPosition}px)`;
  }
