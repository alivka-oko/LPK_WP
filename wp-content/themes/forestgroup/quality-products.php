<?php
/*
Template Name: Качество продукции
*/
?>
<?php get_header() ?>

<section class="SecondBanner " style="background: url(<?= CFS()->get('banner') ?>);">
    <div class="container">
        <div class="titleText">
            <h1>
                <?= CFS()->get('title') ?>
            </h1>
            <h3>
                <?= CFS()->get('slogan') ?>
            </h3>
        </div>
    </div>
</section>
<section class="ProductQuality">
    <div class="container">
        <p>
            <?= CFS()->get('standarts_text') ?>
        </p>
        <?php if (CFS()->get('rus_standarts') || CFS()->get('foreign_standarts')) {
            ?>
            <div class="quality__block row">
                <?php if (CFS()->get('rus_standarts')) {
                    $rus_standarts = CFS()->get('rus_standarts');
                    ?>
                    <?php
                } ?>
                <div class="col-md-5">
                    <div class="quality__item">
                        <h4 class="quality__item-title">Российские стандарты</h4>
                        <ul class="quality__item-gost">
                            <?php
                            foreach ($rus_standarts as $rus_standart) {
                                ?>
                                <li><b>
                                        <?= $rus_standart['rus_standart'] ?>
                                    </b> —
                                    <?= $rus_standart['rus_standart_text'] ?>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <?php if (CFS()->get('foreign_standarts')) {
                    $foreign_standarts = CFS()->get('foreign_standarts');
                    ?>
                    <div class="col-md-5">
                        <div class="quality__item">
                            <h4 class="quality__item-title">Зарубежные стандарты</h4>
                            <ul class="quality__item-gost">
                                <?php
                                foreach ($foreign_standarts as $foreign_standart) {
                                    ?>
                                    <li><b>
                                            <?= $foreign_standart['foreign_standart'] ?>
                                        </b> —
                                        <?= $foreign_standart['foreign_standart_text'] ?>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <?php
                } ?>
            </div>
            <?php
        } ?>
    </div>
    <div class="Properties lightGray">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p>
                        <?= CFS()->get('standarts_add_text') ?>
                    </p>
                    <h4 class="properties__title">
                        <?= CFS()->get('specifications_title') ?>
                    </h4>
                    <?php
                    $specifications_items = CFS()->get('specifications_items');
                    if ($specifications_items) {
                        ?>
                        <div class="property__list ">
                            <div class="row">
                                <?php
                                foreach ($specifications_items as $specifications_item) {
                                    ?>
                                    <div class="property__item col-md-4">
                                        <div class="property__item-icon">
                                            <?= file_get_contents($specifications_item['specifications_item_img']) ?>
                                        </div>
                                        <?= $specifications_item['specifications_item_sign'] ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    } ?>
                    <p>
                        <?= CFS()->get('specifications_sign') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$methods = CFS()->get('methods');
if ($methods) {
    ?>
    <section class="Methods">
        <div class="container">
            <h2>
                <?= CFS()->get('methods_title') ?>
            </h2>
            <p>
                <?= CFS()->get('methods_subtitle') ?>
            </p>
            <div class="row">
                <?php
                foreach ($methods as $method) {
                    ?>
                    <div class="col-md-4">
                        <h4>
                            <?= $method['methods_title'] ?>
                        </h4>
                        <p>
                            <?= $method['methods_text'] ?>
                        </p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php
}
?>

<?php get_footer() ?>