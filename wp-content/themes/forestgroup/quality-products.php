<?php
/*
Template Name: Качество продукции
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
                <div class="contact-title"><?= CFS()->get( 's_address', 71 );?></div>
                <div class="row">
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
            <?=CFS()->get('map')?>
        </div>
    </div>
</section>
<?php get_footer() ?>