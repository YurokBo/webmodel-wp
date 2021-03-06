<?php
//include_once(__DIR__ . '/components/Head.php')
//?>

<?php get_header(); ?>

<section class="Header">
    <div class="Container">
        <div class="Header-Inner">
            <div class="Header-Content">
                <h1 class="Title Title--h1 Header-Title">вебмодель на дому</h1>
                <ul class="Header-List">
                    <li class="Text Header-Item">свободный график</li>
                    <li class="Text Header-Item">ежедневные выплаты</li>
                    <li class="Text Header-Item">персональное обучение</li>
                </ul>
                <a href="/registration.php" class="Btn Btn--pink Header-Btn">
                    Заполнить анкету
                </a>
            </div>
            <div class="Header-ImageBox">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/header-img.png" alt="girls"
                     class="Header-Image">
            </div>
        </div>
        <div class="Decor Header-Decor">
            Будь смелее!
        </div>
    </div>
</section>

<section class="Steps">
    <div class="Container">
        <h2 class="Title Title--h2 Steps-Title">Как начать?</h2>
        <div class="Steps-List">
            <div class="Steps-ImgBg">
                <svg width="1760" height="351" viewBox="0 0 1760 351" fill="none" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path class="Animation"
                          d="M-16 92.9811C223.099 19.738 644 -38 897.062 33.0243C1043.32 74.0734 1232.5 -13.5 1436.95 33.0243C1577.85 65.0886 1664.83 22.7359 1727.03 82.193C1768.81 122.137 1767.81 193.409 1734.67 249.868C1708.16 295.036 1588.27 310.461 1477 327.5C1444.37 332.496 1352.69 342.693 1265 327.5C1156.92 308.773 1046.94 327.5 1119.5 349.108L1046.94 350"
                          stroke="#4A4A4A" stroke-dasharray="10 10"/>
                    <rect x="1181.17" y="335.583" width="38.3405" height="38.3405"
                          transform="rotate(168.592 1181.17 335.583)" fill="url(#pattern0)" fill-opacity="0.7"/>
                    <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0" transform="scale(0.00195312)"/>
                        </pattern>
                        <image id="image0" width="512" height="512"
                               xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>
            </div>
            <div class="Steps-Item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/list.png" alt="icon" class="Steps-Img">
                <div class="Text Text Steps-Text">Заполнение анкеты</div>
            </div>
            <div class="Steps-Item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/docs.png" alt="icon" class="Steps-Img">
                <div class="Text Steps-Text">Проверка документов</div>
            </div>
            <div class="Steps-Item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/education.png" alt="icon" class="Steps-Img">
                <div class="Text Steps-Text">Обучение</div>
            </div>
            <div class="Steps-Item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/star.png" alt="icon" class="Steps-Img">
                <div class="Text Steps-Text">Начаинаем:)</div>
            </div>
        </div>
        <div class="Btn--centered">
            <a href="/registration.php" class="Btn Btn--blue Steps-Btn">
                Начнём
            </a>
        </div>
        <div class="Decor Steps-Decor">
            Будь смелее!
        </div>
    </div>
</section>

<section class="About">
    <div class="Container">
        <h2 class="Title Title--h2 About-Title">
            Fresh studio - современная онлайн студия
        </h2>
        <div class="About-Inner">
            <div class="About-Content">
                <p class="Text About-Text">
                    Мы - фанаты своего дела. С 2016 года (до того как этой стало мейнстримом) мы
                    помогаем девушкам начать работать и зарабатывать в международной индустрии вебкама. Вместе с нами
                    выросли десятки топовых моделей.
                </p>
                <p class="Text About-Text">
                    Мы обучим тебя всему, что знаем сами. От регистрации на сайте до статуса топ-модели - мы всегда
                    будем рядом.
                </p>
                <a href="/registration.php" class="Btn Btn--pink About-Btn">
                    Познакомиться поближе
                </a>
            </div>
            <div class="About-ImgBox">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/about-img.png" alt="image" class="About-Img">
            </div>
        </div>
        <div class="Decor About-Decor">
            Будь смелее!
        </div>
    </div>
</section>

<section class="Person">
    <div class="Container">
        <h2 class="Title Title--h2 Person-Title">
            Ты подходишь нам, если ты…
        </h2>
        <div class="Person-Table">
            <div class="Person-Row">
                <div class="Text Person-RowTitle">
                    Интересная личность
                </div>
                <div class="Text Person-RowText">
                    Вебкам - это не просто эротическое шоу. <br>Ты должна влюблять.
                </div>
            </div>
            <div class="Person-Row">
                <div class="Text Person-RowTitle">
                    Амбициозна
                </div>
                <div class="Text Person-RowText">
                    У нас высокая планка. Мы неоднократно<br>
                    выводили наших моделей в ТОП по всему миру.<br>
                    Если ты тоже этого хочешь - нам по пути.
                </div>
            </div>
            <div class="Person-Row">
                <div class="Text Person-RowTitle">
                    Неординарная
                </div>
                <div class="Text Person-RowText">
                    Нестандартная внешность и куча<br>
                    татуировок? Круто - это будет твоей фишкой.
                </div>
            </div>
        </div>
        <div class="Btn--centered">
            <a href="/registration.php" class="Btn Btn--blue Person-Btn">
                Я подхожу
            </a>
        </div>
        <div class="Decor Person-Decor">
            Будь смелее!
        </div>
    </div>
</section>

<section class="Description">
    <div class="Container">
        <div class="Description-List">
            <div class="Description-Item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-location.png" alt="icons"
                     class="Description-ItemImg">
                <div class="Text Description-ItemTitle">
                    Свобода
                </div>
                <div class="Text Description-ItemText">
                    Дома, на отдыхе,
                    в путешествии.
                    Только ты решаешь сколько и где ты будешь работать.
                </div>
            </div>
            <div class="Description-Item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-testimonials.png" alt="icons"
                     class="Description-ItemImg">
                <div class="Text Description-ItemTitle">
                    Персональный менеджер
                </div>
                <div class="Text Description-ItemText">
                    Опытный менеджер проведет с тобой полноценное обучение. От базовых правил
                    и интерфейса сайтов
                    до всех тонкостей
                    и секретов ведения трансляции.
                </div>
            </div>
            <div class="Description-Item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-actress.png" alt="icons"
                     class="Description-ItemImg">
                <div class="Text Description-ItemTitle">
                    Тебе решать
                </div>
                <div class="Text Description-ItemText">
                    «Флирт» или «Эротика». Ты сама решаешь,как себя позиционировать и в какой категории работать.
                    Главное — найти себя.
                </div>
            </div>
        </div>
        <div class="Btn--centered">
            <a href="/registration.php" class="Btn Btn--pink Description-Btn">
                Хочу попробовать
            </a>
        </div>
        <div class="Decor Description-Decor">
            Будь смелее!
        </div>
    </div>
</section>

<section class="History">
    <div class="Container">
        <h2 class="Title Title--h2 History-Title">
            Fresh Studio успешно работает уже 5 лет
        </h2>
        <div class="History-Content">
            <div class="History-SliderBox">
                <div class="History-Slider">
                    <div class="History-SliderItem">
                        <img
                                src="<?php bloginfo('template_url'); ?>/assets/images/sertificate-slide-1.png"
                                class="History-SliderImg"
                                alt="slide-1">
                    </div>

                    <div class="History-SliderItem">
                        <img
                                src="<?php bloginfo('template_url'); ?>/assets/images/sertificate-slide-2.png"
                                class="History-SliderImg"
                                alt="slide-2">
                    </div>

                </div>
                <!--<div class="History-SliderBtns">-->
                <button class="SliderBtn History-SliderBtn History-SliderBtn--prev" onclick="minusSlide()">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-prev.png" alt="arrow">
                </button>
                <button class="SliderBtn History-SliderBtn History-SliderBtn--next SliderBtn--next"
                        onclick="plusSlide()">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-next.png" alt="arrow">
                </button>
                <!--</div>-->

            </div>
            <div class="History-TextBox">
                <p class="Text History-Text">
                    За 5 лет работы нам уже доверились тысячи девушек, лично убедились
                    в соблюдении конфиденциальности их личных данных и документов, а работа
                    в сфере в помогла заработать им сотни тысяч долларов.
                </p>
                <p class="Text History-Text">
                    Мы постоянно развиваемся, мониторим новые решения и стремимся дать максимально комфортные условия
                    для работы наших моделей.
                </p>
            </div>
        </div>
        <div class="Decor History-Decor">
            Будь смелее!
        </div>
    </div>
</section>

<section class="Reviews">
    <div class="Container">
        <h2 class="Title Title--h2 Reviews-Title">
            отзывы
        </h2>

        <div class="Reviews-SliderBox">
            <div class="Reviews-Slider">
                <div class="Reviews-SliderItem">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/review-1.png" alt=""
                         class="Reviews-SliderItemImg">
                    <div class="Reviews-SliderItemTop">
                        <div class="Reviews-SliderItemName">
                            Анастасия, 23 года
                        </div>
                        <div class="Reviews-SliderItemSub">
                            Заработала за месяц 100 тыс.руб
                        </div>
                    </div>
                    <p class="Reviews-SliderItemText">
                        На самом деле зрители у нас разные: кто-то — мимо проходящий, а кто-то в моих трансляциях
                        ежедневно
                        на протяжении очень долгого времени. Приятно, когда видишь знакомых зрителей, которые пишут
                        добрые комментарии.
                    </p>
                </div>

                <div class="Reviews-SliderItem">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/review-1.png" alt=""
                         class="Reviews-SliderItemImg">
                    <div class="Reviews-SliderItemTop">
                        <div class="Reviews-SliderItemName">
                            Елена, 25 года
                        </div>
                        <div class="Reviews-SliderItemSub">
                            Заработала за месяц 200 тыс.руб
                        </div>
                    </div>
                    <p class="Reviews-SliderItemText">
                        На самом деле зрители у нас разные: кто-то — мимо проходящий, а кто-то в моих трансляциях
                        ежедневно
                        на протяжении очень долгого времени.
                    </p>
                </div>
            </div>
            <!--<div class="History-SliderBtns">-->
            <button class="SliderBtn Reviews-SliderBtn Reviews-SliderBtn--prev" onclick="minusSlideReview()">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-prev.png" alt="arrow">
            </button>
            <button class="SliderBtn Reviews-SliderBtn Reviews-SliderBtn--next SliderBtn--next"
                    onclick="plusSlideReview()">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-next.png" alt="arrow">
            </button>
            <!--</div>-->

        </div>
        <div class="Decor Reviews-DecorTop">
            Будь смелее!
        </div>
        <div class="Decor Reviews-DecorBottom">
            ь смелее!
        </div>
    </div>
</section>

<?php get_footer(); ?>
<!--
--><?php
/*include_once(__DIR__ . '/components/Footer.php')
*/ ?>
