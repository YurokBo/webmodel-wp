<?php
include_once(__DIR__ . '/components/Head.php')
?>

<section class="Registration">
    <div class="Container">
        <h2 class="Title Title--h2 Registration-Title">
            Регистрация
        </h2>
        <form class="Registration-Form">
            <div class="Registration-FormTop">
                <h4 class="Text--pink Registration-FormTitle">Личная информация</h4>
                <!-- Hidden Required Fields -->
                <input type="hidden" name="project_name" value="webmodel.ru">
                <input type="hidden" name="admin_email" value="webmodel@gmail.com">
                <input type="hidden" name="form_subject" value="Заявка со страницы вопросов">
                <!-- END Hidden Required Fields -->
                <div class="Registration-FormInputs">
                    <input
                            class="Input Input--blue Registration-FormInput"
                            type="text"
                            placeholder="Возраст"
                            autocomplete="off"
                            required
                    >
<!--                    <select name="language">-->
<!--                        <option disabled selected>Уровень английского</option>-->
<!--                        <option value="first">начальный</option>-->
<!--                        <option value="second">средний</option>-->
<!--                        <option value="third">профессиональный</option>-->
<!--                    </select>-->
                    <div class="dropdown">
                        <div class="dropdown__value">JavaScript</div>
                        <ul class="dropdown__list">
                            <li class="dropdown__item">
                                <a href="" class="dropdown__link">
                                    JavaScript
                                </a>
                            </li>
                            <li class="dropdown__item">
                                <a href="" class="dropdown__link">
                                    PHP
                                </a>
                            </li>
                            <li class="dropdown__item">
                                <a href="" class="dropdown__link">
                                    Python
                                </a>
                            </li>
                            <li class="dropdown__item">
                                <a href="" class="dropdown__link">
                                    Fortran
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <textarea placeholder="О себе"
                          autocomplete="off"
                          required
                          class="Input--blue Registration-FormTextarea"></textarea>
                <div class="Registration-FormField">
                    <input  id="file"
                            type="file"
                            name="photo"
                            multiple
                            accept="image/*,image/jpeg"
                            class="FileInput"
                    >
                    <label for="file"
                    class="Input--blue Registration-FormLabel">
                        Ваше фото
                        <img src="images/arrow-download.svg" alt="arrow" class="Registration-FormLabelImg">
                    </label>
                </div>
            </div>
            <div class="Registration-FormBottom">
                <h4 class="Text--blue Registration-FormTitle">Контакты</h4>
                <div class="Registration-FormInputs">
                    <input
                            class="Input Input--pink Registration-FormInput"
                            type="text"
                            placeholder="Твоё имя"
                            autocomplete="off"
                            required
                    >
                    <input
                            class="Input Input--pink Registration-FormInput"
                            type="text"
                            placeholder="+7 (999) 999-99-99"
                            autocomplete="off"
                            required
                    >
                </div>
                <input
                        class="Input Input--pink Registration-FormInput Input--post"
                        type="text"
                        placeholder="Почта"
                        autocomplete="off"
                        required
                >
            </div>
            <button type="submit" class="Btn Btn--pink Btn--centered Registration-FormBtn">
                ОТПРАВИТЬ
            </button>
        </form>
        <p class="Registration-Text">
            Нажимая «Отправить», Вы соглашаетесь с обработкой персональных данных
        </p>
    </div>
</section>

<?php
include_once(__DIR__ . '/components/Footer.php')
?>
