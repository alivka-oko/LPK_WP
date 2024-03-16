<?php
/*
Template Name: Экология
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
<section class="ProcessingWood content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="production__name">
                    <?= CFS()->get('production_title') ?>
                </div>
                <?php
                $production_items = CFS()->get('production_items');
                if ($production_items) {
                    ?>
                    <div class="production__block">
                        <?php
                        foreach ($production_items as $production_item) { ?>
                            <div class="percent">
                                <div class="percent-wrapper progress-<?=reset($production_item['production_item_procent'])?>">
                                    <span class="label"><?=reset($production_item['production_item_procent'])?>%</span>
                                    <div class="infographics">
                                        <div class="left-side half-circle"></div>
                                        <div class="right-side half-circle"></div>
                                    </div>
                                    <div class="center-side"></div>
                                </div>
                                <div class="text">
                                    <span>
                                        <?= $production_item['production_item_title'] ?>
                                    </span><br>
                                    <?= $production_item['production_item_subtitle'] ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-4">
                <div class="production__text">
                    <?= CFS()->get('production_desc') ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="KeyProblems content lightGray">
    <div class="container">
        <?= CFS()->get('grey_section_text') ?>
    </div>
</section>
<section class="EcologicalСourse content">
    <div class="container">
        <?= CFS()->get('white_section_text') ?>
    </div>
</section>
<?php
get_footer();
?>