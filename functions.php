<?php function my_scripts()
{
    wp_enqueue_style(
        'bootstrap',
        get_stylesheet_directory_uri() .
        '/scripts/bootstrap/css/bootstrap.css',
        '',
        1.0
    );
    wp_enqueue_script(
        'bootstrapjs',
        get_stylesheet_directory_uri() .
        '/scripts/bootstrap/js/bootstrap.bundle.js',
        array('jquery'),
        '',
        false
    );
    wp_enqueue_script(
        'script',
        get_stylesheet_directory_uri() . '/scripts/script.js',
        array('jquery'),
        '',
        false
    );
    wp_enqueue_script(
        'jQuery',
        get_stylesheet_directory_uri() . '/scripts/jquery-3.5.1.js',
        array('jquery'),
        '',
        false
    );
    wp_enqueue_style(
        'stylesheet',
        get_stylesheet_directory_uri() . '/style.css',
        '',
        1.0
    );

}

function register_navwalker(){
	require_once get_template_directory() . '/scripts/navwalker.php';
}

function register_widget_areas()
{
    register_sidebar(array(
        'name' => 'Footer area',
        'id' => 'footer_area',
        'description' => 'This widget area discription',
        'before_widget' =>
            '<section class="footer-area col-lg-4 mb-4 footer-area-one">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

function wpb_custom_new_menu()
{
    register_nav_menu('header-menu', 'Menu location');
}

add_action('init', 'wpb_custom_new_menu');
add_theme_support('post-thumbnails');
add_action('wp_enqueue_scripts', 'my_scripts');
add_action('after_setup_theme', 'register_navwalker');
add_action('widgets_init', 'register_widget_areas');

?>