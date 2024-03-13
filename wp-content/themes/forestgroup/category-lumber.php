<?php get_header() ?>
<section class="SecondBanner " style="background: url(<?= CFS()->get('background') ?>);">
    <div class="container">
        <div class="titleText">
            <h1><?= single_cat_title(); ?></h1>
        </div>
    </div>
</section>
<section class="Products content">
    <div class="container">
        <div class="row infoText">
            <div class="col-md-6">
                <?= category_description(); ?>
            </div>
            <div class="col-md-6">
            <?php if (function_exists('z_taxonomy_image')) z_taxonomy_image(); ?>
            </div>
        </div>
        <ul class="row products__list">
            <div class="col-md-3 products__list-item first">
                <a class="products__link " href="edged-board-n">
                    <div class="products__img" style="background: url(/assets/template/images/products/edged-board-planed.jpg) center; background-size: cover;">
                        <div class="products__img-icon">
                            <div class="products__icon-camera icon">
                                <svg data-name="camera" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.1 16.7" class="products__icon-svg">
                                    <path d="M19.1,7.2,10.6,1.6a1.1,1.1,0,0,0-1.1,0L.9,7.2A1.1,1.1,0,0,0,.6,8.6a1,1,0,0,0,1.3.3V16a2.2,2.2,0,0,0,2.2,2.2H15.9A2.2,2.2,0,0,0,18.1,16V8.9a1,1,0,0,0,1.3-.3h0A1,1,0,0,0,19.1,7.2Zm-4,9H4.9a1.1,1.1,0,0,1-1-1V7.6L9.5,4a1.1,1.1,0,0,1,1.1,0l5.5,3.6v7.6A1,1,0,0,1,15.1,16.2Z" transform="translate(-0.5 -1.4)"></path>
                                    <path d="M8,11.4a3.2,3.2,0,0,0-.3-3.9.9.9,0,0,0-1.5.1v.2a.7.7,0,0,0,.1.9,1.7,1.7,0,0,1,.1,1.7l-.3.4a3.6,3.6,0,0,0,.3,4,.9.9,0,0,0,1.5-.2v-.2a.7.7,0,0,0-.1-.9,1.7,1.7,0,0,1-.1-1.7Z" transform="translate(-0.5 -1.4)"></path>
                                    <path d="M14,11.4a3.2,3.2,0,0,0-.3-3.9.9.9,0,0,0-1.5.1v.2a.7.7,0,0,0,.1.9,1.7,1.7,0,0,1,.1,1.7l-.3.4a3.6,3.6,0,0,0,.3,4,.9.9,0,0,0,1.5-.2v-.2a.7.7,0,0,0-.1-.9,1.7,1.7,0,0,1-.1-1.7Z" transform="translate(-0.5 -1.4)"></path>
                                </svg>
                                <span class="products__icon-text">Камерной сушки</span>
                            </div>


                        </div>
                    </div>
                    <div class="products__text">
                        <h5>Доска обрезная</h5>
                    </div>
                    <!--<div class="products__price">от 11 500 руб./м<sup>3</sup></div>-->
                </a>
            </div>
            <div class="col-md-3 products__list-item">
                <a class="products__link " href="edged-board-c">
                    <div class="products__img" style="background: url(/assets/template/images/products/edged-board.jpg) center; background-size: cover;">
                        <div class="products__img-icon">

                            <div class="products__icon-natural icon">
                                <svg data-name="natural" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.1 18" class="products__icon-svg">
                                    <path d="M13.5,11.5c0-1-2-6.5-3.5-6.5s-3.5,5.5-3.5,6.5a3.5,3.5,0,0,0,7,0Zm-5,0A12.1,12.1,0,0,1,9.8,8.2a.2.2,0,0,1,.4,0,12.1,12.1,0,0,1,1.3,3.3,1.5,1.5,0,0,1-3,0Z" transform="translate(-0.5 -1)"></path>
                                    <path d="M17.9,10h0a1.1,1.1,0,0,0-1,.9A6.9,6.9,0,0,1,10,17a7.3,7.3,0,0,1-5.9-3.2,1.1,1.1,0,0,0,1.1-.7h0a.9.9,0,0,0-.6-1.2l-2.1-.7a1,1,0,0,0-1.3.6L.5,13.9a.9.9,0,0,0,.7,1.2.8.8,0,0,0,1.1-.4A9.1,9.1,0,0,0,10,19a8.9,8.9,0,0,0,8.9-7.9A1,1,0,0,0,17.9,10Z" transform="translate(-0.5 -1)"></path>
                                    <path d="M18.9,4.9a.9.9,0,0,0-1.2.4A9.1,9.1,0,0,0,10,1,8.9,8.9,0,0,0,1.1,8.9a1,1,0,0,0,1,1.1h0a1.1,1.1,0,0,0,1-.9A6.9,6.9,0,0,1,10,3a6.7,6.7,0,0,1,5.8,3.2,1,1,0,0,0-1,.6h0a1,1,0,0,0,.6,1.3l2.1.7a.9.9,0,0,0,1.2-.6l.8-2A1,1,0,0,0,18.9,4.9Z" transform="translate(-0.5 -1)"></path>
                                </svg>
                                <span class="products__icon-text">Естественой влажности</span>
                            </div>

                        </div>
                    </div>
                    <div class="products__text">
                        <h5>Доска обрезная</h5>
                    </div>
                    <!--<div class="products__price">от 6 000 руб./м<sup>3</sup></div>-->
                </a>
            </div>
            <div class="col-md-3 products__list-item">
                <a class="products__link " href="timber-board">
                    <div class="products__img" style="background: url(/assets/template/images/products/timber-board.jpg) center; background-size: cover;">
                        <div class="products__img-icon">

                            <div class="products__icon-natural icon">
                                <svg data-name="natural" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.1 18" class="products__icon-svg">
                                    <path d="M13.5,11.5c0-1-2-6.5-3.5-6.5s-3.5,5.5-3.5,6.5a3.5,3.5,0,0,0,7,0Zm-5,0A12.1,12.1,0,0,1,9.8,8.2a.2.2,0,0,1,.4,0,12.1,12.1,0,0,1,1.3,3.3,1.5,1.5,0,0,1-3,0Z" transform="translate(-0.5 -1)"></path>
                                    <path d="M17.9,10h0a1.1,1.1,0,0,0-1,.9A6.9,6.9,0,0,1,10,17a7.3,7.3,0,0,1-5.9-3.2,1.1,1.1,0,0,0,1.1-.7h0a.9.9,0,0,0-.6-1.2l-2.1-.7a1,1,0,0,0-1.3.6L.5,13.9a.9.9,0,0,0,.7,1.2.8.8,0,0,0,1.1-.4A9.1,9.1,0,0,0,10,19a8.9,8.9,0,0,0,8.9-7.9A1,1,0,0,0,17.9,10Z" transform="translate(-0.5 -1)"></path>
                                    <path d="M18.9,4.9a.9.9,0,0,0-1.2.4A9.1,9.1,0,0,0,10,1,8.9,8.9,0,0,0,1.1,8.9a1,1,0,0,0,1,1.1h0a1.1,1.1,0,0,0,1-.9A6.9,6.9,0,0,1,10,3a6.7,6.7,0,0,1,5.8,3.2,1,1,0,0,0-1,.6h0a1,1,0,0,0,.6,1.3l2.1.7a.9.9,0,0,0,1.2-.6l.8-2A1,1,0,0,0,18.9,4.9Z" transform="translate(-0.5 -1)"></path>
                                </svg>
                                <span class="products__icon-text">Естественой влажности</span>
                            </div>

                        </div>
                    </div>
                    <div class="products__text">
                        <h5>Доска необрезная</h5>
                    </div>
                    <!--<div class="products__price">от 5 000 руб./м<sup>3</sup></div>-->
                </a>
            </div>
            <div class="col-md-3 products__list-item last">
                <a class="products__link " href="pallets">
                    <div class="products__img" style="background: url(/assets/template/images/products/poddon1.jpg) center; background-size: cover;">
                        <div class="products__img-icon">



                        </div>
                    </div>
                    <div class="products__text">
                        <h5>Поддоны</h5>
                    </div>
                    <!--<div class="products__price">от 385 руб./шт.</div>-->
                </a>
            </div>
        </ul>
    </div>
</section>
<?php get_footer() ?>