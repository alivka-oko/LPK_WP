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
        ?>
        .smi-material__content.<?= $document['document_extension']; ?>:before {
            background-image: url(<?= $document['document_ico']; ?>);
        }

        <?php
    }
    ?>
</style>

<section class="SecondBanner " style="background: url(<?= CFS()->get('background') ?>);">
    <div class="container">
        <div class="titleText">
            <h1>
                <?= CFS()->get('name') ?>
            </h1>
        </div>
    </div>
</section>
<section class="content">
    <?php
    $sections = CFS()->get('sections');
    foreach ($sections as $section) {
        ?>
        <div class="container smi-material__container mb-5">
            <h2>
                <?= $section['section_name'] ?>
            </h2>
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
                        <a class="smi-material__title" href="<?= $url ?>" target="_blank">
                            <?= $document['document_name'] ?>
                        </a>
                        <div class="description">
                            <?= $document['document_desc'] ?>
                        </div>
                        <span class="smi-material__doc">
                            <?= strtoupper($extension) ?>
                        </span>
                        <span class="smi-material__value">
                            <?= $sizeInMb ?>
                        </span>
                    </div>
                    <?php
                } ?>
            </div>
        </div>


        <?php
        $args = array(
            'post_type' => 'post', // Укажите тип поста, в котором вы хотите искать метаполя
            'meta_key' => 'document_file', // Укажите ваш ключ метаполя
            'meta_query' => array(
                array(
                    'key' => 'document_file', // Укажите ваш ключ метаполя
                    'compare' => 'EXISTS', // Сравнение для проверки наличия ключа
                ),
            ),
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            ?>
            <div class="container smi-material__container mb-5">
                <h2>
                    Сертификаты
                </h2>
                <div class="row">
                    <?php
                    while ($query->have_posts()) {
                        $query->the_post();
                        $certificates = CFS()->get('certificates');
                        if ($certificates) {
                            foreach ($certificates as $certificate) {
                                $url = $certificate['document_file'];
                                $headers = get_headers($url, true);

                                // Получение MIME-типа контента
                                $contentType = isset($headers['Content-Type']) ? $headers['Content-Type'] : 'application/octet-stream';
                                $extension = pathinfo($url, PATHINFO_EXTENSION);

                                // Получение размера документа
                                $contentLength = isset($headers['Content-Length']) ? $headers['Content-Length'] : 0;
                                $sizeInMb = number_format($contentLength / (1024 * 1024), 2) . ' МБ';

                                ?>
                                <div class="col-md-6 col-xl-4 smi-material__content mb-3">
                                    <a class="smi-material__title" href="<?= $url ?>" target="_blank">
                                        <?= $certificate['document_name'] ?>
                                    </a>
                                    <div class="description">
                                        <?= $certificate['document_desc'] ?>
                                    </div>
                                    <span class="smi-material__doc">
                                        <?= strtoupper($extension) ?>
                                    </span>
                                    <span class="smi-material__value">
                                        <?= $sizeInMb ?>
                                    </span>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <?php
            wp_reset_postdata(); // Сбрасываем данные о текущей записи
        }
        ?>
        <?php
    }
    ?>

</section>


<script>
    let documents = document.querySelectorAll('.smi-material__content');
    documents.forEach(document_file => {
        let format = document_file.querySelector('.smi-material__doc');
        document_file.classList.add(format.innerHTML.trim())
    });
</script>

<?php get_footer() ?>