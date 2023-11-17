// sdg-buttons.js
const sdgSlider = document.querySelector('.sdg-slider');
const sdgButtons = document.querySelectorAll('.sdg-button');
const radioButtons = document.querySelectorAll('.radio-button');
let sdgCurrentIndex = 0;
let sdgSlideInterval;

function sdgSlideButtons() {
    const transformValue = `translateX(${-sdgCurrentIndex * 270}px)`;
    sdgSlider.style.transform = transformValue;

    radioButtons.forEach(button => {
        button.classList.remove('active');
        button.style.backgroundColor = '';
    });

    radioButtons[sdgCurrentIndex].classList.add('active');
    radioButtons[sdgCurrentIndex].style.backgroundColor = 'black';
    sdgCurrentIndex = (sdgCurrentIndex + 1) % sdgButtons.length;
}

function sdgStartSlideInterval() {
    sdgSlideInterval = setInterval(sdgSlideButtons, 2000);
}

radioButtons.forEach(button => {
    button.addEventListener('click', function () {
        sdgCurrentIndex = Array.from(radioButtons).indexOf(button);
        clearInterval(sdgSlideInterval);
        sdgSlideButtons();

        setTimeout(() => {
            sdgStartSlideInterval();
        }, 5000);
    });
});

sdgStartSlideInterval();

// slideshow-script.js
var slideshowCurrentIndex = 0;
var slideshows = document.querySelectorAll('.slide');

function showSlide(index) {
    slideshows.forEach(function(slide, i) {
        var newPosition = (i - index + slideshows.length) % slideshows.length;
        slide.style.transform = 'translateX(' + newPosition * 100 + '%)';
    });
}

function nextSlide() {
    slideshowCurrentIndex = (slideshowCurrentIndex + 1) % slideshows.length;
    showSlide(slideshowCurrentIndex);
}

setInterval(nextSlide, 4000);

showSlide(slideshowCurrentIndex);
