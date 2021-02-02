<?php

/* enable featured images on posts */
add_theme_support( 'post-thumbnails' );

function may_get_styles () {
    wp_enqueue_style('may_main', get_template_directory_uri().'/assets/css/main.css', array(), '1.0.0', false);
    wp_enqueue_style('may_navicon', get_template_directory_uri().'/assets/css/navicon.css', array(), '1.0.0', false);
    wp_enqueue_style('may_portfolio', get_template_directory_uri().'/assets/css/portfolio.css', array(), '1.0.0', false);
    wp_enqueue_style('may_nosotros', get_template_directory_uri().'/assets/css/nosotros.css', array(), '1.0.0', false);
    wp_enqueue_style('may_contacto', get_template_directory_uri().'/assets/css/contact.css', array(), '1.0.0', false);
    wp_enqueue_style('may_footer', get_template_directory_uri().'/assets/css/footer.css', array(), '1.0.0', false);
    wp_enqueue_style('may_responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.0', false);
    wp_enqueue_style('may_post', get_template_directory_uri().'/assets/css/post.css', array(), '1.0.0', false);
}

add_action('wp_enqueue_scripts', 'may_get_styles');

function may_get_scripts () {

    /* jquery */
    wp_enqueue_script('may_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', array(),'3.5.1',  true);
    wp_enqueue_script('may_nav', get_template_directory_uri().'/assets/js/nav.js', array(), '1.0.0', true);
    wp_enqueue_script('may_con', get_template_directory_uri().'/assets/js/contact.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'may_get_scripts');

?>
