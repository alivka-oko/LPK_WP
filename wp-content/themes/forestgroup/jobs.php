<?php
/*
Template Name: Вакансии
*/
?>
<?php get_header() ?>
<section class="SecondBanner" style="background: url(<?= CFS()->get('background') ?>);">
    <div class="container">
        <div class="titleText">
            <h1><?= CFS()->get('name') ?></h1>
            <h3><?= CFS()->get('slogan') ?></h3>
        </div>
    </div>
</section>
<section class="Jobs content">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <?php
                $vacancies = CFS()->get('vacancies');
                if ($vacancies) {
                    foreach ($vacancies as $vacancy) {
                ?>
                        <div class="jobs-item">
                            <input class="jobs-checkbox" type="checkbox" id="<?= $vacancy['vacancies_name'] ?>">
                            <h3 class="jobs-title"><?= $vacancy['vacancies_name'] ?></h3>
                            <div class="jobs-entry">
                                <span><?= $vacancy['vacancies_requirements'] ?></span>
                                <label class="jobs-checkbox-labelTop" for="<?= $vacancy['vacancies_name'] ?>">Показать условия</label>
                            </div>
                            <div class="jobs-content">
                                <div class="jobs-text">
                                    <?= $vacancy['vacancies_responsibilities'] ?>
                                </div>
                                <label class="jobs-checkbox-labelBottom" for="<?= $vacancy['vacancies_name'] ?>">Скрыть условия</label>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

            </div>
            <div class="col-lg-4">
                <div class="jobs_vacancies">
                    <div class="vacancies-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.3 79.1">
                            <g class="fon">
                                <path d="M55.7,6.5h-48c-2.2,0-4,1.8-4,4v63.6c0,2.2,1.8,4,4,4h48c2.2,0,4-1.8,4-4V10.5C59.6,8.3,57.8,6.5,55.7,6.5z">
                                </path>
                            </g>
                            <g class="white">
                                <polygon points="35,3.8 35,0.9 28.5,0.9 28.5,3.8 22.6,3.8 22.6,9.7 40.9,9.7 40.9,3.8 ">
                                </polygon>
                                <rect x="8.4" y="12.5" width="46.6" height="59.6"></rect>
                            </g>
                            <g class="body">
                                <path d="M55.7,5.7H42l0,0c0-1.7-1.4-3.1-3.1-3.1h-2.6V3c0-1.6-1.4-3-3.1-3h-3c-1.7,0-3.1,1.4-3.1,3.1V2.7h-2.6c-1.7,0-3.1,1.4-3.1,3.1l0,0H7.7C5.1,5.7,2.9,8,2.9,10.7v63.4c0,2.7,2.1,5,4.8,5h48c2.6,0,4.8-2.2,4.8-5V10.7C60.5,8,58.3,5.7,55.7,5.7z M23.4,5.7c0-0.6,0.5-1.1,1.1-1.1h4.6V3.1c0-0.6,0.5-1.1,1.1-1.1h3c0.6,0,1.1,0.5,1.1,1.1v1.6h4.6c0.6,0,1.1,0.5,1.1,1.1v2c0,0.6-0.5,1.1-1.1,1.1H24.5c-0.6,0-1.1-0.5-1.1-1.1V5.7z M58.5,74.1c0,1.6-1.2,3-2.8,3h-48c-1.5,0-2.8-1.3-2.8-3V10.7c0-1.6,1.2-3,2.8-3h13.8l0,0c0,1.7,1.4,3.1,3.1,3.1h14.3c1.7,0,3.1-1.4,3.1-3.1l0,0h13.8c1.5,0,2.8,1.3,2.8,3L58.5,74.1L58.5,74.1z">
                                </path>
                                <path d="M47.6,29.2H15.8c-1.5,0-2.7-1.2-2.7-2.7v-7c0-1.5,1.2-2.7,2.7-2.7h31.8c1.5,0,2.7,1.2,2.7,2.7v7C50.3,28,49.1,29.2,47.6,29.2z M15.8,18.9c-0.4,0-0.7,0.3-0.7,0.7v7c0,0.4,0.3,0.7,0.7,0.7h31.8c0.4,0,0.7-0.3,0.7-0.7v-7c0-0.4-0.3-0.7-0.7-0.7H15.8z">
                                </path>
                                <path d="M27.2,37.9H14c-0.6,0-1-0.4-1-1l0,0c0-0.6,0.4-1,1-1h13.2c0.6,0,1,0.4,1,1l0,0C28.2,37.5,27.7,37.9,27.2,37.9z">
                                </path>
                                <path d="M27.2,42.7H14c-0.6,0-1-0.4-1-1l0,0c0-0.6,0.4-1,1-1h13.2c0.6,0,1,0.4,1,1l0,0C28.2,42.3,27.7,42.7,27.2,42.7z">
                                </path>
                                <path d="M27.2,47.5H14c-0.6,0-1-0.4-1-1l0,0c0-0.6,0.4-1,1-1h13.2c0.6,0,1,0.4,1,1l0,0C28.2,47.2,27.7,47.5,27.2,47.5z">
                                </path>
                                <path d="M27.2,57.2H14c-0.6,0-1-0.4-1-1l0,0c0-0.6,0.4-1,1-1h13.2c0.6,0,1,0.4,1,1l0,0C28.2,56.8,27.7,57.2,27.2,57.2z">
                                </path>
                                <path d="M27.2,62H14c-0.6,0-1-0.4-1-1l0,0c0-0.6,0.4-1,1-1h13.2c0.6,0,1,0.4,1,1l0,0C28.2,61.6,27.7,62,27.2,62z">
                                </path>
                                <path d="M27.2,66.8H14c-0.6,0-1-0.4-1-1l0,0c0-0.6,0.4-1,1-1h13.2c0.6,0,1,0.4,1,1l0,0C28.2,66.4,27.7,66.8,27.2,66.8z">
                                </path>
                                <path d="M39.8,47.2l-5.4-5.4c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0l4,4c0.2,0.2,0.6,0.2,0.8,0l8-8c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4l-9.4,9.4C40.4,47.4,40.1,47.4,39.8,47.2z">
                                </path>
                                <path d="M39.8,66.4L34.4,61c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0l4,4c0.2,0.2,0.6,0.2,0.8,0l8-8c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4l-9.4,9.4C40.4,66.7,40.1,66.7,39.8,66.4z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="vacancies-text">
                        <h5 class="introtext">Хотите у нас работать?</h5>
                        <span>Тогда нам нужно познакомится. Вы можете <a href="https://forest-groups.ru/ru/jobs/#SendResum">отправить нам своё резюме</a> или
                            заполнить анкету<br>на нашем сайте.</span>
                    </div>
                    <div class="vacancies-btn">
                        <a href="candidate-profile" class="btn btn-green">Заполнить анкету</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="SendResum content lightGray" id="SendResum">
    <div class="container">
        <h3>Отправьте резюме на <a target="_blank" href="mailto:staff@forest-groups.ru?subject=Анкета кандидата">staff@forest-groups.ru</a> или</h3>
        <form action="" method="post" class="ajax_form af_example" enctype="multipart/form-data">
            <div id="dropZone">
                <div class="form-group">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="50" height="43" viewBox="0 0 50 43">
                        <path d="M48.4 26.5c-.9 0-1.7.7-1.7 1.7v11.6h-43.3v-11.6c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v13.2c0 .9.7 1.7 1.7 1.7h46.7c.9 0 1.7-.7 1.7-1.7v-13.2c0-1-.7-1.7-1.7-1.7zm-24.5 6.1c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5l10-11.6c.7-.7.7-1.7 0-2.4s-1.7-.7-2.4 0l-7.1 8.3v-25.3c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v25.3l-7.1-8.3c-.7-.7-1.7-.7-2.4 0s-.7 1.7 0 2.4l10 11.6z">
                        </path>
                    </svg>
                    <label class="middle-title" for="file" id="updateName"><strong>Выберите файл</strong><span> или
                            перетащите его сюда</span>.</label>
                    <input type="file" name="file" id="file" class="file">
                    <div class="error_file"></div>
                    <div class="signature">Допустимые форматы файлов .pdf, .docx, .doc и объемом не более 5 Мб</div>
                </div>
                <div class="form-group">
                    <label class="custom">
                        <input class="checkbox" type="checkbox" onchange="document.getElementById('SendResumBtn').disabled = !this.checked">
                        <span class="checkbox-custom"></span>
                        <span class="label"> Я соглашаюсь с <a href="https://forest-groups.ru/ru/doc/privacy-policy.pdf" target="_blank">политикой обработки персональных данных</a></span>
                    </label>
                </div>
                <div class="form-button">
                    <button type="submit" class="btn btn-big btn-green" id="SendResumBtn" disabled="">Отправить</button>
                </div>
            </div>

            <input type="hidden" name="af_action" value="59052e7f2bc4eb5cdb619cb4d3586946">
        </form>
    </div>
</section>

<?php
get_footer();
?>