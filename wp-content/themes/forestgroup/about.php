<?php
/*
Template Name: О нас
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
<section class="ProductionAssets content">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <?php
                    $numbers = CFS()->get('section_item_nums');
                    foreach ($numbers as $number) {
                        ?>
                        <div class="col-md-4 percent text-center">
                            <div class="percent-wrapper progress-<?=reset($number['section_item_procent'])?>">
                                <span class="label">
                                    <?=$number['section_item_procent_value']?>%
                                </span>
                                <div class="infographics">
                                    <div class="left-side half-circle"></div>
                                    <div class="right-side half-circle"></div>
                                </div>
                                <div class="center-side"></div>
                            </div>
                            <div class="text">
                                <div>
                                    <?= $number['section_item_title'] ?>
                                </div>
                                <span class="small">
                                    <?= $number['section_item_sign'] ?>
                                </span>
                            </div>
                        </div>
                    <?
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-5">
                <p>
                    <?= CFS()->get('section_num_text') ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ProductionCapacity content lightGray">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?= CFS()->get('section_info_text') ?>
            </div>
            <div class="col-md-6">
                <img src="<?= CFS()->get('section_info_img') ?>" alt="План завода">
            </div>
        </div>
    </div>
</section>
<section class="BusinessMarket content">
    <div class="container">
        <h3>
            <?= CFS()->get('section_elems_title') ?>
        </h3>
        <?php
        if (CFS()->get('section_elems')) {
            ?>
            <div class="row">
                <?php
                $elems = CFS()->get('section_elems');
                foreach ($elems as $elem) {
                    ?>
                    <div class="col-md-3 text-center">
                        <div class="item p-3">
                            <div class="img">
                                <?= file_get_contents($elem['section_elem_img']) ?>
                            </div>
                            <span>
                                <?= $elem['section_elem_sign'] ?>
                            </span>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>


        <div class="w-75 pt-5 mx-auto text-center">
            <?= CFS()->get('section_elems_subtitle') ?>
        </div>
    </div>
</section>


<?php get_footer() ?>