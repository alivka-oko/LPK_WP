<?php get_header() ?>
<section class="SecondBanner " style="background: url(<?= CFS()->get('banner', 71) ?>);">
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
        <ul class="row house__list">
            <?php
            while (have_posts()) : the_post();
            ?>
                <div class="col-md-3 house__list-item first">
                    <a class="house__link" href="<?php the_permalink(); ?>">
                        <div class="house__img" style="background: url(<?php if(CFS()->get('gallery')[0]['gallery_img']) echo CFS()->get('gallery')[0]['gallery_img'] ?>) center; background-size: cover;">
                        </div>
                        <div class="house__text">
                            <h5><?php the_title(); ?></h5>
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