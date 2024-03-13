<?php
/*
Template Name: Документы
*/
?>
<?php get_header() ?>
<style>
    <?php
    $document_icons = CFS()->get('document_icons');
    foreach ($document_icons as $document) {
    ?>.smi-material__content.<?= $document['document_extension']; ?>:before {
        background-image: url(<?= $document['document_ico']; ?>);
    }
    <?php
    }
    ?>
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
                    $url = $document['document_file'];
                    $headers = get_headers($url, true);

                    // Получение MIME-типа контента
                    $contentType = isset($headers['Content-Type']) ? $headers['Content-Type'] : 'application/octet-stream';
                    $extension = pathinfo($url, PATHINFO_EXTENSION);

                    // Получение размера документа
                    $contentLength = isset($headers['Content-Length']) ? $headers['Content-Length'] : 0;
                    $sizeInMb = number_format($contentLength / (1024 * 1024), 2) . ' МБ';

                ?>
                    <div class="col-md-6 col-xl-4 smi-material__content mb-3">
                        <a class="smi-material__title" href="<?= $url ?>" target="_blank"><?= $document['document_name'] ?></a>
                        <div class="description"><?= $document['document_desc'] ?></div>
                        <span class="smi-material__doc"><?= strtoupper($extension) ?></span>
                        <span class="smi-material__value"><?= $sizeInMb ?></span>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    <?php
    }
    ?>

</section>

<script>
    let documents = document.querySelectorAll('.smi-material__content');
    for (let document_file of documents) {
        let format = document_file.querySelector('.smi-material__doc');
        document_file.classList.add(format.innerHTML)
    }
</script>

<?php get_footer() ?>