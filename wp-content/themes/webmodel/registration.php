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
                            name="age"
                            autocomplete="off"
                            required
                    >
                    <div class="Dropdown">
                        <div class="Dropdown-Value"  name="level">Уровень английского</div>
                        <ul class="Dropdown-List">
                            <li class="Dropdown-Item">
                                <a href="" class="Dropdown-Link" value="Начальный">
                                    Начальный
                                </a>
                            </li>
                            <li class="Dropdown-Item">
                                <a href="" class="Dropdown-Link" value="Средний">
                                    Средний
                                </a>
                            </li>
                            <li class="Dropdown-Item">
                                <a href="" class="Dropdown-Link" value="Профессиональный">
                                    Профессиональный
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <textarea placeholder="О себе"
                          autocomplete="off"
                          required
                          name="message"
                          class="Input--blue Registration-FormTextarea"></textarea>
                <div class="Registration-FormField">
                    <input  id="file"
                            type="file"
                            name="file"
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
                            name="name"
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
