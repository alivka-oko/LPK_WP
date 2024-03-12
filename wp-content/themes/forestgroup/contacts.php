<?php
/*
Template Name: Контакты
*/
?>
<?php get_header() ?>

<section class="SecondBanner " style="background: url(<?= CFS()->get('background') ?>);">
    <div class="container">
        <div class="titleText">
            <h1><?= CFS()->get('name') ?></h1>
        </div>
    </div>
</section>
<section class="ContactMap container-fluid">
    <div class="row">
        <div class="col-md-6 contactText">
            <div class="left-block">
                <div class="contact-title">215113, Смоленская обл.,<br>г.Вязьма, ул.Новая Бозня, д.3</div>
                <div class="row">

                    <!--div class="col-md-6 contact-item">
                            <h4><i>Снабжение</i></h4>
                            <div class="phone">+7 499 709-09-09 доб. 111</div>
                            <div class="email"><a target="_blank" href="mailto:snab@forest-groups.ru">snab@forest-groups.ru</a></div>
                        </div-->
                    <!--div class="col-md-6 contact-item">
                            <h4><i>Отдел продаж</i></h4>
                            <div>Алексей Попов</div>
                            <div class="phone">+7 961 138-31-57 (WhatsApp)</div>
                            <div class="email"><a target="_blank" href="mailto:sales@forest-groups.ru">sales@forest-groups.ru</a></div>
                        </div-->

                    <?php
                    $departaments = CFS()->get('departments');
                    foreach ($departaments as $departament) {
                    ?>
                        <div class="col-md-6 contact-item">
                            <h4><i><?= $departament['dept_name'] ?></i></h4>
                            <div><?= $departament['dept_person'] ?></div>
                            <?php
                            $phones = $departament['dept_person_phones'];
                            foreach ($phones as $phone) {
                            ?>
                                <div class="phone"><?= $phone['dept_person_phone'] ?></div>
                            <?php
                            }
                            ?>
                            <div class="email"><a target="_blank" href="mailto:<?= $departament['dept_person_mail'] ?>"><?= $departament['dept_person_mail'] ?></a></div>
                        </div>
                    <?php
                    }
                    ?>

                    <!--div class="col-md-6 contact-item">
                            <h4><i>Секретарь</i></h4>
                            <div class="phone">+7 499 709-09-09</div>
                            <div class="email"><a target="_blank" href="mailto:mail@forest-groups.ru">mail@forest-groups.ru</a></div>
                        </div-->
                </div>
            </div>
        </div>
        <div class="col-md-6 yandexMap">
            <iframe src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=true&amp;source=constructor-api&amp;um=constructor%3A4e3f428fac33ef16f88cffaf600e1bcad86965053ee15cc6dce05b775fe3e8a4" frameborder="0" allowfullscreen="true" width="100%" height="700px" style="display: block;"></iframe>
        </div>
    </div>
</section>
<?php get_footer() ?>