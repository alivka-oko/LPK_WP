<?php
/*
Template Name: Документы
*/
?>
<?php get_header() ?>
<style>
    .smi-material__content:before {
        background-image: url(/assets/template/images/icon/icon-press-docs.svg);
    }
</style>
<section class="SecondBanner " style="background: url(<?= CFS()->get('background') ?>);">
    <div class="container">
        <div class="titleText">
            <h1><?= CFS()->get('name') ?></h1>
        </div>
    </div>
</section>
<section class="content">
    <?php
    $sections = CFS()->get('sections');
    foreach ($sections as $section) {
    ?>
        <div class="container smi-material__container mb-5">
            <h2><?= $section['section_name'] ?></h2>
            <div class="row">
                <?php
                $documents = $section['sections_documents'];
                foreach ($documents as $document) {
                ?>
                    <div class="col-md-6 col-xl-4 smi-material__content mb-3">
                        <a class="smi-material__title" href="<?= $document['document_file'] ?>" target="_blank"><?= $document['document_name'] ?></a>
                        <span class="smi-material__doc">PDF</span>
                        <span class="smi-material__value">0.32 МБ </span>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    <?php
    }
    ?>
</section>
<?php get_footer() ?>