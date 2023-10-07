let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(n) {
    if (n < 0) {
        currentSlide = slides.length - 1;
    } else if (n >= slides.length) {
        currentSlide = 0;
    }

    slides.forEach((slide, index) => {
        if (index === currentSlide) {
            slide.style.display = 'flex';
        } else {
            slide.style.display = 'none';
        }
    });
}

function nextSlide() {
    showSlide(currentSlide += 1);
}

function prevSlide() {
    showSlide(currentSlide -= 1);
}

function autoPlay() {
    nextSlide();
}

startSlider();

function startSlider() {
    interval = setInterval(autoPlay, 3500);
}

const sliderContainer = document.querySelector('.slider-container');
sliderContainer.addEventListener('mouseenter', () => {
    clearInterval(interval);
});

sliderContainer.addEventListener('mouseleave', () => {
    startSlider();
});

let touchstartX = 0;
let touchendX = 0;

sliderContainer.addEventListener('touchstart', (event) => {
    touchstartX = event.touches[0].clientX;
    clearInterval(interval); // Pause autoplay on swipe start
    isSwiping = true;
});

sliderContainer.addEventListener('touchend', (event) => {
    touchendX = event.changedTouches[0].clientX;
    handleSwipe();
    startSlider(); // Resume autoplay on swipe end
    isSwiping = false;
});

function handleSwipe() {
    if (touchendX < touchstartX) {
        nextSlide(); // Swipe left
    } else if (touchendX > touchstartX) {
        prevSlide(); // Swipe right
    }
}

showSlide(currentSlide);
