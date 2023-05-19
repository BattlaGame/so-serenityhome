const carousel = document.querySelector('.carousel');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

let slideIndex = 0;
let slideCount = carousel.children.length;
let slideWidth = 0;

prevButton.addEventListener('click', () => {
  slideIndex--;
  if (slideIndex < 0) {
    slideIndex = slideCount - 1;
  }
  updateCarousel();
});

nextButton.addEventListener('click', () => {
  slideIndex++;
  if (slideIndex >= slideCount) {
    slideIndex = 0;
  }
  updateCarousel();
});

function updateCarousel() {
  carousel.style.transform = `translateX(-${slideIndex * slideWidth}px`;
}

function updateSlideWidth() {
  slideWidth = carousel.offsetWidth;
  updateCarousel();
}

window.addEventListener('resize', updateSlideWidth);
updateSlideWidth();