<?php get_header() ?>
<section class="SecondBanner" style="background: url(<?= CFS()->get('background') ?>);">
    <div class="container">
        <div class="titleText">
            <h1><?= the_title() ?></h1>
            <h3>
                <?php
                $product_type = CFS()->get('product_type');
                if ($product_type) {
                    foreach ($product_type as $key => $value) {
                        echo $value;
                    };
                };
                ?>
            </h3>
        </div>
    </div>
</section>
<section class="ProductsItem product">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="products__price">
                    <?= CFS()->get('table') ?>
                </div>
                <div class="products__btn-order">
                    <button class="btn btn-green" data-toggle="modal" data-target="#callbackModal"><?= CFS()->get('button_text') ?></button>
                </div>
            </div>
            <div class="col-md-6">
                <div id="slider" class="flexslider">
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides list" style="width: 1400%; transition-duration: 0s; transform: translate3d(-450px, 0px, 0px);">
                            <?php
                            $images = CFS()->get('gallery');
                            if ($images) {
                                foreach ($images as $image) {
                                    if ($image == $images[0]) {
                            ?>
                                        <li class="slides__item flex-active-slide" style="width: 450px; margin-right: 0px; float: left; display: block;" data-thumb-alt="">
                                            <a href="<?= $image['image'] ?>" data-lightbox="17" title="<?= the_title() ?>" class="slides__item-link">
                                                <img src="<?= $image['image'] ?>" width="600" alt="" class="slides__item-img" draggable="false">
                                                <span class="zoom">
                                                    <svg width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M588,203h-3v-2h3v-3h2v3A2,2,0,0,1,588,203Zm0-14h-3v-2h3a2,2,0,0,1,2,2v3h-2v-3Zm-2,3v6a1,1,0,0,1-1,1h-6a1,1,0,0,1-1-1v-6a1,1,0,0,1,1-1h6A1,1,0,0,1,586,192Zm-2,1h-4v4h4v-4Zm-8-1h-2v-3a2,2,0,0,1,2-2h3v2h-3v3Zm0,9h3v2h-3a2,2,0,0,1-2-2v-3h2v3Z" transform="translate(-574 -187)"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        <?php

                                    } else {
                                        ?>
                                        <li class="slides__item" data-thumb-alt="" style="width: 450px; margin-right: 0px; float: left; display: block;">
                                            <a href="<?= $image['image'] ?>" data-lightbox="17" title="<?= the_title() ?>" class="slides__item-link">
                                                <img src="<?= $image['image'] ?>" width="600" alt="" class="slides__item-img" draggable="false">
                                                <span class="zoom">
                                                    <svg width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M588,203h-3v-2h3v-3h2v3A2,2,0,0,1,588,203Zm0-14h-3v-2h3a2,2,0,0,1,2,2v3h-2v-3Zm-2,3v6a1,1,0,0,1-1,1h-6a1,1,0,0,1-1-1v-6a1,1,0,0,1,1-1h6A1,1,0,0,1,586,192Zm-2,1h-4v4h4v-4Zm-8-1h-2v-3a2,2,0,0,1,2-2h3v2h-3v3Zm0,9h3v2h-3a2,2,0,0,1-2-2v-3h2v3Z" transform="translate(-574 -187)"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    <?
                                    }
                                    ?>
                            <?php
                                };
                            }
                            ?>

                        </ul>
                    </div>
                    <ol class="flex-control-nav flex-control-thumbs">
                        <li><img class="flex-active" draggable="false"></li>
                        <li><img draggable="false"></li>
                        <li><img draggable="false"></li>
                        <li><img draggable="false"></li>
                        <li><img draggable="false"></li>
                    </ol>
                    <ul class="flex-direction-nav">
                        <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                        <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                    </ul>
                </div>
                <div id="carousel" class="flexslider carousel">

                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides list" style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                            <?php
                            $small_images = CFS()->get('gallery');
                            if ($small_images) {
                                foreach ($small_images as $small_image) {
                                    if ($small_image == $small_images[0]) {
                            ?>
                                        <li class="flex-active-slide" style="width: 123px; margin-right: 5px; float: left; display: block;">
                                            <img src="<?= $small_image['image'] ?>" alt="" draggable="false">
                                        </li>
                                    <?php

                                    } else {
                                    ?>
                                        <li style="width: 123px; margin-right: 5px; float: left; display: block;">
                                            <img src="<?= $small_image['image'] ?>" alt="" draggable="false">
                                        </li>
                                    <?
                                    }
                                    ?>
                            <?php
                                };
                            }
                            ?>
                        </ul>
                    </div>
                    <ul class="flex-direction-nav">
                        <li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li>
                        <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ProductsItemInfo product">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="products__infotext">
                    <ul class="nav products__tab-nav" id="productsTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Описание</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="specification-tab" data-toggle="tab" href="#specification" role="tab" aria-controls="specification" aria-selected="false">Характеристики</a>
                        </li>
                    </ul>
                    <div class="products__tab-content" id="productsTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <?= CFS()->get('description') ?>
                        </div>
                        <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                            <!-- ГОСТ -->
                            <?php
                            $standarts = CFS()->get('standart');
                            if ($standarts) {
                            ?>
                                <div class="characteristic">
                                    <?php
                                    foreach ($standarts as $standart) {
                                    ?>
                                        <div class="characteristic__item"><span class="characteristic__item-title"><?= $standart['standart_name'] ?></span><?= $standart['standart_value'] ?></div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                            ?>
                            <!-- Размеры и количество -->
                            <?php
                            $dimensions = CFS()->get('dimensions');
                            if ($dimensions) {
                            ?>
                                <h4>Размеры и количество</h4>
                                <table class="table table-striped sizes">
                                    <thead>
                                        <tr>
                                            <th class="col-1">Толщина</th>
                                            <th class="col-1">Ширина</th>
                                            <th class="col-1">Длина</th>
                                            <th class="col-2">Количество, шт. в м<sup>3</sup></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($dimensions as $dimension) {
                                        ?>
                                            <tr>
                                                <td><?= $dimension['thickness'] ?></td>
                                                <td><?= $dimension['width'] ?></td>
                                                <td><?= $dimension['length'] ?></td>
                                                <td><?= $dimension['quantity'] ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            <?php
                            }
                            ?>
                            <!-- Инструкция -->
                            <?php
                            $manuals = CFS()->get('manuals');
                            if ($manuals) {
                            ?>
                                <h4><?= CFS()->get('manual_text') ?></h4>
                                <ol class="lumberStorage">
                                    <?php
                                    foreach ($manuals as $manual) {
                                    ?>
                                        <li><span><?= $manual['manual'] ?></span></li>
                                    <?php
                                    }
                                    ?>
                                </ol>
                                <p><?= CFS()->get('manual_text_add') ?></p>
                            <?php
                            }
                            ?>

                            <!-- Типы -->
                            <p><?= CFS()->get('type_text'); ?></p>
                            <?php
                            $type_tables = CFS()->get('type_tables');
                            if ($type_tables) {
                            ?>
                                <table class="w-100 mb-3">
                                    <thead>
                                        <tr>
                                            <?php
                                            for ($i = 0; $i <= count($type_tables) - 1; $i++) {
                                            ?>
                                                <th><?= CFS()->get('type_tables')[$i]['type_name']; ?></th>
                                            <?php
                                            }; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            // print_r($type_tables[0]['type_values'][0]['type_value']);
                                            foreach ($type_tables as $type) {
                                            ?>
                                                <td class="small">
                                                    <ul>
                                                        <?php
                                                        foreach ($type['type_values'] as $type) {
                                                        ?>
                                                            <li><?= $type['type_value'] ?></li>
                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </td>
                                            <?php
                                            }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php
                            }
                            ?>
                            <p><?= CFS()->get('type_text_add') ?></p>
                            <!-- Сертификаты -->
                            <?php $certificates = CFS()->get('certificates');
                            if ($certificates) {
                            ?>
                                <h3>Сертификаты</h3>
                                <?php foreach ($certificates as $document) {
                                    $url = $document['document_file'];
                                    $headers = get_headers($url, true);

                                    // Получение MIME-типа контента
                                    $contentType = isset($headers['Content-Type']) ? $headers['Content-Type'] : 'application/octet-stream';
                                    $extension = pathinfo($url, PATHINFO_EXTENSION);

                                    // Получение размера документа
                                    $contentLength = isset($headers['Content-Length']) ? $headers['Content-Length'] : 0;
                                    $sizeInMb = number_format($contentLength / (1024 * 1024), 2) . ' МБ';

                                ?>
                                    <div class="smi-material__content mb-3">
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
                            <?php
                            }
                            ?>
                            <!-- <h3>Сертификаты</h3>
                            <div class="smi-material__content mb-3">
                                <a class="smi-material__title" href="https://forest-groups.ru/assets/doc/light-pellets.pdf" target="_blank">СЕРТИФИКАТ ИСПЫТАНИЙ</a>
                                <div class="description">Светлые пеллеты</div>
                                <span class="smi-material__doc">PDF</span>
                                <span class="smi-material__value">0.25 МБ</span>
                            </div>
                            <div class="smi-material__content mb-3">
                                <a class="smi-material__title" href="https://forest-groups.ru/assets/doc/light-grey-pellets.pdf" target="_blank">СЕРТИФИКАТ ИСПЫТАНИЙ</a>
                                <div class="description">Светло-серые пеллеты</div>
                                <span class="smi-material__doc">PDF</span>
                                <span class="smi-material__value">0.28 МБ</span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fixed_block_fix"></div>
                <div class="ask_a_question">
                    <div class="question-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57.6 53">
                            <g id="fdd24c5f-cca7-4e08-8a02-6c66fdb5a592" class="fon">
                                <path d="M52.4,27.5,29.9,39,7.4,27.5V47.1a3.9,3.9,0,0,0,4,3.9h37a3.9,3.9,0,0,0,4-3.9Z" transform="translate(-1.1 -3.7)"></path>
                            </g>
                            <g id="b27b2577-408b-4d74-95ad-10efead1c0b7" class="body">
                                <path d="M56.4,24.5,44,16.9a1,1,0,0,0-1.4.3h0a1,1,0,0,0,.3,1.4L53,24.8a.5.5,0,0,1,0,.9l-22.4,12a1.4,1.4,0,0,1-1.5,0L6.8,25.7a.5.5,0,0,1,0-.9l10-6.2a1,1,0,0,0,.4-1.4,1,1,0,0,0-1.4-.3L3.4,24.5a6.3,6.3,0,0,0-2.3,4.8V50.1a6.7,6.7,0,0,0,6.6,6.6H52.1a6.6,6.6,0,0,0,6.6-6.6V29.3A6,6,0,0,0,56.4,24.5Zm-1.2,2.3a.6.6,0,0,1,.8.2,3.7,3.7,0,0,1,.7,2.3V49.7c0,.5,0,1.7-.5,2.1s-1.8-.4-1.8-.4l-17-14.1a.6.6,0,0,1,.2-1Zm-33,10.5L5.4,51.3s-.9,1-1.8.5-.5-1.3-.5-1.7V29.3A4.5,4.5,0,0,1,3.8,27a.7.7,0,0,1,.9-.2l17.4,9.5A.6.6,0,0,1,22.2,37.3ZM7.1,54.7A.9.9,0,0,1,6.5,53l18-15a.6.6,0,0,1,.7-.1L29.1,40a1.4,1.4,0,0,0,1.5,0l3.9-2.1a.6.6,0,0,1,.7.1L53.3,53.1a.9.9,0,0,1-.6,1.6Z" transform="translate(-1.1 -3.7)"></path>
                                <path d="M22.5,12a.9.9,0,0,0,.9-.8,6.5,6.5,0,0,1,12.9,1.3c-.1,2-1.4,3-2.9,4.1s-4.1,3.2-4.4,7.2a.9.9,0,0,0,.9,1,.9.9,0,0,0,.9-.8c.2-3.2,1.9-4.5,3.7-5.9s3.8-2.9,3.7-6.3a8.4,8.4,0,0,0-6.4-7.9A8.3,8.3,0,0,0,21.6,11,.8.8,0,0,0,22.5,12Z" transform="translate(-1.1 -3.7)"></path>
                                <circle cx="28.8" cy="25.3" r="1.5"></circle>
                            </g>
                        </svg>
                    </div>
                    <div class="question-text">
                        <h5 class="introtext">Нужна консультация?</h5>
                        <span>Наши специалисты ответят на любой интересующий вопрос</span>
                    </div>
                    <div class="question-btn">
                        <button class="btn btn-outline-green" data-toggle="modal" data-target="#callbackModal">Задать вопрос</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    let div_product = document.querySelector('.products__price');
    let table_product = div_product.querySelector('table');
    table_product.classList.add('products__price-table');
    table_product.setAttribute('width','100%');
    table_product.setAttribute('border','0');
    table_product.setAttribute('cellspacing','0');
    table_product.setAttribute('cellpadding','0');
    // <table width="100%" border="0" cellspacing="0" cellpadding="0" class="products__price-table">
    

    let documents = document.querySelectorAll('.smi-material__content');
    documents.forEach(document_file => {
        let format = document_file.querySelector('.smi-material__doc');
        document_file.classList.add(format.innerHTML.trim())
    });
</script>
<?php
get_footer();
?>