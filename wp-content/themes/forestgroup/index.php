<?php
/*
Template Name: Главная
*/
?>
<?php get_header() ?>
<?php
if (CFS()->get('banner')) {
    $gallery = CFS()->get('banner');

    foreach ($gallery as $key => $item) {
        ?>
        <style>
            section.MainBanner .kwicks #panel-<?= $key + 1 ?>,
            section.MainBanner .bannerMobil #panel-<?= $key + 1 ?> {
                background: url(<?= $item['banner_image'] ?>) center;
                background-size: cover;
            }
        </style>
        <?php
    }
}
?>
<section class="MainBanner">
    <?php if (CFS()->get('banner')) { ?>
        <div class="container">
            <ul class="kwicks kwicks-horizontal bannerDesktop kwicks-processed">
                <?php
                $gallery = CFS()->get('banner');
                foreach ($gallery as $key => $item) {
                    ?>
                    <li class="kwicks-item">
                        <div id="panel-<?= $key + 1 ?>" class="kwicks-item-fon">
                            <div class="kwicks-item-text">
                                <div class="kwicks-item-header middle-title">
                                    <?= $item['banner_title'] ?>
                                </div>
                                <a href="<?= $item['banner_url']['url'] ?>" class="kwicks-item-link">
                                    <div class="middle-title">
                                        <?= $item['banner_title'] ?>
                                    </div>
                                    <span class="kwicks-item-info">
                                        <?= $item['banner_desc'] ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <div class="bannerMobil">
                <div class="row">
                    <?php
                    $gallery = CFS()->get('banner');
                    foreach ($gallery as $key => $item) {
                        ?>
                        <div class="col-md-6 bannerMobil-item">
                            <a id="panel-<?= $key + 1 ?>" href="<?= $item['banner_url']['url'] ?>"
                                class="bannerMobil-item-link">
                                <div class="bannerMobil-item-fon">
                                    <div class="middle-title">
                                        <?= $item['banner_title'] ?>
                                    </div>
                                    <span class="bannerMobil-item-info">
                                        <?= $item['banner_desc'] ?>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
    <?php } ?>
</section>
<?php if (CFS()->get('about_item')) {
    ?>
    <section class="about__numbers content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="inNumbers-item-header">О компании «Forest group»</h1>
                </div>
                <?php
                $items = CFS()->get('about_item');
                foreach ($items as $item) {
                    ?>
                    <div class="inNumbers-item col-md-4">
                        <div class="inNumbers-title">
                            <span class="counter">
                                <?= $item['about_int'] ?>
                            </span>
                            &nbsp;
                            <?= $item['about_value'] ?>
                        </div>
                        <div class="inNumbers-text">
                            <?= $item['about_desc'] ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php
} ?>
<?php
if (CFS()->get('section_text')) {
    ?>
    <section class="AboutCompany content lightGray">
        <div class="container">
            <div class="row about">
                <div class="col-md-12 col-lg-6 about-text">
                    <?= CFS()->get('section_text') ?>
                </div>
                <div class="col-md-12 col-lg-6 plantAir">
                    <img src="<?= CFS()->get('section_image') ?>" alt="План завода">
                    <a href="#" class="plantAir-link" data-toggle="modal" data-target="#VideoPresentationModal">
                        <div class="plantAir-btn">
                            <svg viewBox="0 0 50 50">
                                <path class="st0"
                                    d="M46.1,14.6c-0.5-1.9-2-3.4-3.9-3.9C38.8,9.8,25,9.8,25,9.8s-13.8,0-17.3,0.9c-1.9,0.5-3.4,2-3.9,3.9 C3,18.1,3,25.2,3,25.2s0,7.2,0.9,10.6c0.5,1.9,2,3.4,3.9,3.9c3.5,0.9,17.3,0.9,17.3,0.9s13.8,0,17.3-0.9c1.9-0.5,3.4-2,3.9-3.9 c0.9-3.5,0.9-10.6,0.9-10.6S47.1,18.1,46.1,14.6z"
                                    fill="#ea0c00"></path>
                                <path class="st1" d="M20.6,31.9l11.5-6.6l-11.5-6.6V31.9z" fill="#fff"></path>
                                <path class="st1"
                                    d="M25,9.8c0,0,13.8,0,17.3,0.9c1.9,0.5,3.4,2,3.9,3.9c0.9,3.5,0.9,10.6,0.9,10.6s0,7.2-0.9,10.6 c-0.5,1.9-2,3.4-3.9,3.9C38.8,40.7,25,40.7,25,40.7s-13.8,0-17.3-0.9c-1.9-0.5-3.4-2-3.9-3.9c-0.9-3.4-0.9-10.6-0.9-10.6 s0-7.2,0.9-10.6c0.5-1.9,2-3.4,3.9-3.9C11.2,9.8,25,9.8,25,9.8 M25,6.9c-2.4,0-14.4,0-18,1c-2.9,0.8-5.2,3.1-6,6 c-1,3.7-1,10.6-1,11.4c0,0.8,0,7.7,1,11.4c0.8,2.9,3.1,5.2,6,6c3.7,1,15.7,1,18,1c2.4,0,14.4,0,18-1c2.9-0.8,5.2-3.1,6-6 c1-3.7,1-10.6,1-11.4c0-0.8,0-7.7-1-11.4C48.2,11,45.9,8.7,43,7.9C39.4,6.9,27.4,6.9,25,6.9L25,6.9z"
                                    fill="#fff"></path>
                            </svg>
                        </div>
                        <div class="plantAir-text">Видео презентация</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>

<section class="Products content">
    <div class="container">
        <h2>Наша продукция</h2>
        <ul class="row products__list">
            <?php
            $sticky_posts = get_option('sticky_posts');
            foreach ($sticky_posts as $sticky_post):
                $post = get_post($sticky_post);
                setup_postdata($post);
                ?>
                <div class="col-md-6 col-lg-3 col-xl-3 products__list-item">
                    <a class="products__link" href="<?php the_permalink(); ?>">
                        <div class="products__img" style="background: url(<?php if (CFS()->get('gallery')[0]['image'])
                            echo CFS()->get('gallery')[0]['image'] ?>) center; background-size: cover;">
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
            <?php endforeach;
            wp_reset_postdata(); ?>
        </ul>

    </div>
</section>
<!-- Modal -->
<?php
if (CFS()->get('section_video')) {
    ?>
    <div class="modal fade bd-example-modal-lg" id="VideoPresentationModal" tabindex="-1" role="dialog"
        aria-labelledby="VideoPresentationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="VideoPresentationModal">
                    <?= CFS()->get('section_video') ?>
                </div>
            </div>
        </div>
    </div>

    <?php
}
?>

<!-- End modal -->
<?php get_footer() ?>