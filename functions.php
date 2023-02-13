<?php
function pcu_files() {

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
    wp_enqueue_style('bootstrap4-style','//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.12.1/css/all.css');

    wp_enqueue_script('jquery','//code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'));
    wp_enqueue_script('popper','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script('bootstrap4-script','//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');

    wp_enqueue_script('main-pcu-js', get_theme_file_uri('/build/index.js'), array('jquery'),'1.0.0', true);


    wp_enqueue_script('tinyslider','//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', null, 1, true);

    wp_enqueue_style( 'pcu_main_styles', get_theme_file_uri( '/build/style-index.css' ) );
    wp_enqueue_style( 'pcu_extra_styles', get_theme_file_uri( '/build/index.css' ) );

}

add_action('wp_enqueue_scripts', 'pcu_files');


function pcu_features() {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
}
add_action('after_setup_theme', 'pcu_features');