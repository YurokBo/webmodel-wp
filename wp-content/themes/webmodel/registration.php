<?php
include('./Components/Head.php')
?>

<section class="Registration">
    <div class="Container">
        <h2 class="Title Title--h2 Registration-Title">
            Регистрация
        </h2>
        <form class="Registration-Form">
            <div class="Registration-FormTop">
                <h4 class="Text--pink Registration-FormTitle">Личная информация</h4>
                    <div class="Registration-FormInputs">

                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="webmodel.ru">
                        <input type="hidden" name="admin_email" value="webmodel@gmail.com">
                        <input type="hidden" name="form_subject" value="Заявка со страницы вопросов">
                        <!-- END Hidden Required Fields -->

                        <input
                            class="Input Input--blue Registration-FormInput"
                            type="text"
                            placeholder="Возраст"
                            autocomplete="off"
                            required
                        >
                        <select name="language">
                            <option disabled selected>Уровень английского</option>
                            <option value="first">начальный</option>
                            <option value="second">средний</option>
                            <option value="third">профессиональный</option>
                        </select>
                    </div>
                    <textarea class="Registration-FormTextarea"></textarea>
                <input
                    type="file"
                    name="photo"
                    multiple
                    accept="image/*,image/jpeg"
                class="Registration-FormInput"
                >
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
                    class="Input Input--pink Registration-FormInput"
                    type="text"
                    placeholder="Почта"
                    autocomplete="off"
                    required
                >
            </div>
        </form>
    </div>
</section>

<?php
include('./Components/Footer.php')
?>
