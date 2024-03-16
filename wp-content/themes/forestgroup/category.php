<?php get_header() ?>
<section class="SecondBanner " style="background: url(<?= CFS()->get('banner', 71) ?>);">
    <div class="container">
        <div class="titleText">
            <h1>
                <?= single_cat_title(); ?>
            </h1>
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
                <?php if (function_exists('z_taxonomy_image'))
                    z_taxonomy_image(); ?>
            </div>
        </div>
        <ul class="row products__list">
            <?php
            while (have_posts()):
                the_post();
                ?>
                <div class="col-md-3 products__list-item">
                    <a class="products__link" href="<?php the_permalink(); ?>">
                        <div class="products__img"
                            style="background: url(<?= CFS()->get('gallery')[0]['image'] ?>) center; background-size: cover;">
                            <div class="products__img-icon">
                                <?php
                                $product_type = CFS()->get('product_type');
                                if ($product_type) {
                                    foreach ($product_type as $key => $value) {
                                        switch ($key) {
                                            case 'камерной сушки':
                                                echo '
                                            <div class="products__icon-camera icon">
                                                    <svg data-name="camera" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.1 16.7" class="products__icon-svg">
                                                        <path d="M19.1,7.2,10.6,1.6a1.1,1.1,0,0,0-1.1,0L.9,7.2A1.1,1.1,0,0,0,.6,8.6a1,1,0,0,0,1.3.3V16a2.2,2.2,0,0,0,2.2,2.2H15.9A2.2,2.2,0,0,0,18.1,16V8.9a1,1,0,0,0,1.3-.3h0A1,1,0,0,0,19.1,7.2Zm-4,9H4.9a1.1,1.1,0,0,1-1-1V7.6L9.5,4a1.1,1.1,0,0,1,1.1,0l5.5,3.6v7.6A1,1,0,0,1,15.1,16.2Z" transform="translate(-0.5 -1.4)"></path>
                                                        <path d="M8,11.4a3.2,3.2,0,0,0-.3-3.9.9.9,0,0,0-1.5.1v.2a.7.7,0,0,0,.1.9,1.7,1.7,0,0,1,.1,1.7l-.3.4a3.6,3.6,0,0,0,.3,4,.9.9,0,0,0,1.5-.2v-.2a.7.7,0,0,0-.1-.9,1.7,1.7,0,0,1-.1-1.7Z" transform="translate(-0.5 -1.4)"></path>
                                                        <path d="M14,11.4a3.2,3.2,0,0,0-.3-3.9.9.9,0,0,0-1.5.1v.2a.7.7,0,0,0,.1.9,1.7,1.7,0,0,1,.1,1.7l-.3.4a3.6,3.6,0,0,0,.3,4,.9.9,0,0,0,1.5-.2v-.2a.7.7,0,0,0-.1-.9,1.7,1.7,0,0,1-.1-1.7Z" transform="translate(-0.5 -1.4)"></path>
                                                    </svg>
                                                    <span class="products__icon-text">' . $value . '</span>
                                                </div>                             
                                        ';
                                                break;
                                            case 'строганая':
                                                echo '<div class="products__icon-planed icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="products__icon-svg">
                                                    <g id="aff066d4-68fb-448e-a3be-78a691916c4d" data-name="planed">
                                                        <path d="M18.3,19.2H1.7A1.6,1.6,0,0,1,.1,17.6V14.5a1.7,1.7,0,0,1,1.6-1.7H18.3a1.7,1.7,0,0,1,1.6,1.7v3.1A1.6,1.6,0,0,1,18.3,19.2Zm-15.5-2H17.2a.7.7,0,0,0,.7-.7v-1a.7.7,0,0,0-.7-.7H2.8a.7.7,0,0,0-.7.7v1A.7.7,0,0,0,2.8,17.2Z" transform="translate(0 0)"></path>
                                                        <rect x="4.9" y="3.9" width="2" height="11.63" rx="1" transform="translate(-5.1 7) rotate(-45)"></rect>
                                                        <path d="M12.3,11.6a1,1,0,0,1-1.5.4C8,10,7.3,6.8,9,3.6A5.2,5.2,0,0,1,12.9.9,5.5,5.5,0,0,1,17.6,2c3,2.7,1.6,5.3,1.1,6.2a3.9,3.9,0,0,1-2.5,2,3.9,3.9,0,0,1-3-.2c-2.6-1.5-2.7-3.7-1.8-5.2a2.5,2.5,0,0,1,2.3-1.5,2.8,2.8,0,0,1,2.5,1.2,1.6,1.6,0,0,1,.3.8,1,1,0,0,1-1.4,1.1s-.6-.3-.6-.8-.4-.3-.7-.3a.8.8,0,0,0-.7.4C12,7.8,15.7,9.8,17,7.3s.8-2.4-.7-3.8a3.9,3.9,0,0,0-3-.7,4.1,4.1,0,0,0-2.6,1.7A4.5,4.5,0,0,0,12,10.4a1,1,0,0,1,.3,1.2Z" transform="translate(0 0)"></path>
                                                        <rect x="3.4" y="8.2" width="2" height="5.61"></rect>
                                                    </g>
                                                </svg>    
                                                <span class="products__icon-text">' . $value . '</span>
                                            </div>';
                                                break;
                                            case 'естественной влажности':
                                                echo '                
                                            <div class="products__icon-natural icon">
                                                    <svg data-name="natural" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.1 18" class="products__icon-svg">
                                                        <path d="M13.5,11.5c0-1-2-6.5-3.5-6.5s-3.5,5.5-3.5,6.5a3.5,3.5,0,0,0,7,0Zm-5,0A12.1,12.1,0,0,1,9.8,8.2a.2.2,0,0,1,.4,0,12.1,12.1,0,0,1,1.3,3.3,1.5,1.5,0,0,1-3,0Z" transform="translate(-0.5 -1)"></path>
                                                        <path d="M17.9,10h0a1.1,1.1,0,0,0-1,.9A6.9,6.9,0,0,1,10,17a7.3,7.3,0,0,1-5.9-3.2,1.1,1.1,0,0,0,1.1-.7h0a.9.9,0,0,0-.6-1.2l-2.1-.7a1,1,0,0,0-1.3.6L.5,13.9a.9.9,0,0,0,.7,1.2.8.8,0,0,0,1.1-.4A9.1,9.1,0,0,0,10,19a8.9,8.9,0,0,0,8.9-7.9A1,1,0,0,0,17.9,10Z" transform="translate(-0.5 -1)"></path>
                                                        <path d="M18.9,4.9a.9.9,0,0,0-1.2.4A9.1,9.1,0,0,0,10,1,8.9,8.9,0,0,0,1.1,8.9a1,1,0,0,0,1,1.1h0a1.1,1.1,0,0,0,1-.9A6.9,6.9,0,0,1,10,3a6.7,6.7,0,0,1,5.8,3.2,1,1,0,0,0-1,.6h0a1,1,0,0,0,.6,1.3l2.1.7a.9.9,0,0,0,1.2-.6l.8-2A1,1,0,0,0,18.9,4.9Z" transform="translate(-0.5 -1)"></path>
                                                    </svg>
                                                    <span class="products__icon-text">' . $value . '</span>
                                                </div>                                            
                                        ';
                                                break;
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="products__text">
                            <h5>
                                <?php the_title(); ?>
                            </h5>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </ul>

    </div>
</section>
<script>
    let img_content = document.querySelector('.Products.content');
    let img_category = img_content.querySelector('img');
    img_category.removeAttribute('height');
    img_category.removeAttribute('width');
</script>
<?php get_footer() ?>