<?php


// add_action('wp_enqueue_scripts', 'add_styles_and_scripts');
// function add_styles_and_scripts()
// {
//     // Стили
//     wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');

//     wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');

//     wp_enqueue_style('mediacss', get_template_directory_uri() . '/assets/css/media.css', array(), '1.0');
//     // wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');

//     // bootstrap

//     wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, 'footer');

//     wp_enqueue_style('bootstrap', get_stylesheet_uri());

//     // Counter
//     wp_enqueue_script('counter', get_stylesheet_directory_uri() . '/assets/libs/counter/jquery.counterup.min.js', array('jquery'), null, 'footer');

//     wp_enqueue_style('counter', get_stylesheet_uri());

//     wp_enqueue_script('counter2', get_stylesheet_directory_uri() . '/assets/libs/counter/jquery.waypoints.js', array('jquery'), null, 'footer');

//     wp_enqueue_style('counter2', get_stylesheet_uri());

//     // Common

//     wp_enqueue_script('common', get_stylesheet_directory_uri() . '/assets/js/common.js', array('jquery'), null, 'footer');

//     wp_enqueue_style('common', get_stylesheet_uri());

//     // kwicks
//     wp_enqueue_style('kwick', get_template_directory_uri() . '/assets/libs/kwicks/kwicks.min.css', array('bootstrap'), '1.0');
//     wp_enqueue_script('kwick_js', get_stylesheet_directory_uri() . '/assets/libs/kwicks/jquery.kwicks.min.js', array('jquery'), null, 'footer');
// }

add_action('wp_enqueue_scripts', 'add_styles_and_scripts');
function add_styles_and_scripts()
{
    // Стили
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2');
    wp_enqueue_style('kwicks', get_template_directory_uri() . '/assets/libs/kwicks/kwicks.min.css', array('bootstrap'), '1.0');
    wp_enqueue_style('flexslider', get_template_directory_uri() . '/assets/libs/FlexSlider/flexslider.css', array(), '1.0');
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/libs/lightbox2/lightbox.css', array(), '1.0');
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    wp_enqueue_style('mediacss', get_template_directory_uri() . '/assets/css/media.css', array(), '1.0');

    // Скрипты
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('kwicks_js', get_stylesheet_directory_uri() . '/assets/libs/kwicks/jquery.kwicks.min.js', array('jquery'), null, true);
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/libs/FlexSlider/jquery.flexslider.js', array('jquery'), null, true);
    wp_enqueue_script('lightbox', get_stylesheet_directory_uri() . '/assets/libs/lightbox2/lightbox.js', array('jquery'), null, true);
    wp_enqueue_script('counter', get_stylesheet_directory_uri() . '/assets/libs/counter/jquery.counterup.min.js', array('jquery'), null, true);
    wp_enqueue_script('counter2', get_stylesheet_directory_uri() . '/assets/libs/counter/jquery.waypoints.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/common.js', array('jquery'), null, 'footer');
    wp_enqueue_style('main', get_stylesheet_uri());
 
}
// 
add_theme_support('custom-logo');

// __________________ДОБАВЛЕНИЕ ИЗОБРАЖЕНИЙ НА САМ САЙТ___________________
function custom_theme_img_settings($wp_customize)
{
    $wp_customize->add_setting('header_logo');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'header_logo',
            array(
                'label' => __('Светлый логотип', 'alcozer-theme'),
                'section' => 'title_tagline',
                'settings' => 'header_logo',
            )
        )
    );
}
