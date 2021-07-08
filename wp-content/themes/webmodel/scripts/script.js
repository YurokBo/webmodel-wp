document.addEventListener('click', e => {
    const menu = document.querySelector('.Nav-ContentMobile')
    openMobileMenu(e, menu)
    closeMobileMenu(e, menu)
})

function openMobileMenu(e, menu) {
    let openBtn = e.target.closest('.Nav-Btn')
    if (!openBtn) {
        return
    }
    menu.classList.add('Nav-ContentMobile--active')
}

function closeMobileMenu(e, menu) {
    let closeMenu = e.target.closest('.Close')
    if (!closeMenu) {
        return
    }
    menu.classList.remove('Nav-ContentMobile--active')
}

/* Индекс слайда по умолчанию */
let slideIndex = 1;
showSlides(slideIndex);

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    showSlides(slideIndex += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    showSlides(slideIndex -= 1);
}

/* Устанавливает текущий слайд */
function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Основная функция слайдера */
function showSlides(n) {
    let i = 0;
    let slides = document.querySelectorAll('.History-SliderItem');

    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}
