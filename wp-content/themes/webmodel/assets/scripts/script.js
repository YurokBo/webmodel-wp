$(document).ready(function () {
//E-mail Ajax Send
    $("form").submit(function () { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function () {

            setTimeout(function () {
                // Done Functions
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });
});


document.addEventListener('click', e => {
    const menu = document.querySelector('.Nav-ContentMobile')
    openMobileMenu(e, menu)
    closeMobileMenu(e, menu)
    select(e)
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

let btn = document.querySelectorAll('.Questions-ItemQuestion')

for (let i = 0; i < btn.length; i++) {
    btn[i].addEventListener("click", function (e) {
            this.classList.toggle("Questions-ItemQuestion--active")
            let content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        }
    )
}

/* Индекс слайда по умолчанию */
let slideIndex = 1;
showSlides(slideIndex);
showSlidesReview(slideIndex);

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    showSlides(slideIndex += 1);
}

function plusSlideReview() {
    showSlidesReview(slideIndex += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    showSlides(slideIndex -= 1);
}

function minusSlideReview() {
    showSlidesReview(slideIndex -= 1);
}

/* Устанавливает текущий слайд */
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function currentSlide(n) {
    showSlidesReview(slideIndex = n);
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

function showSlidesReview(n) {
    let i = 0;
    let slidesReviews = document.querySelectorAll('.Reviews-SliderItem');

    if (n > slidesReviews.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slidesReviews.length
    }
    for (; i < slidesReviews.length; i++) {
        slidesReviews[i].style.display = "none";
    }

    slidesReviews[slideIndex - 1].style.display = "block";
}

/*//E-mail Ajax Send
document.querySelector("form").submit(function (e) { //Change
    e.preventDefault();
    ajax({
        type: "POST",
        url: "mail.php", //Change
        data: this.serialize()
    }).done();
    return false;
});*/

function select(e) {
    const menu = e.target.closest('.Dropdown'),
        dropdownList = menu.querySelector('.Dropdown-List'),
        dropdownValue = menu.querySelector('.Dropdown-Value');

    dropdownList.classList.add('Dropdown-List--active');
    dropdownValue.classList.add('Dropdown-Value--active');
    const htmlLink = e.target.closest('.Dropdown-Link').innerHTML;
    dropdownList.classList.remove('Dropdown-List--active');
    dropdownValue.classList.remove('Dropdown-Value--active');
    dropdownValue.innerHTML = htmlLink;
    dropdownValue.style.color = '#4A4A4A';
    e.preventDefault();
}