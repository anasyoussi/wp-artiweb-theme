<?php 

// this adds dynamic title tag support
add_theme_support('title_tag');

function artiweb_register_styles() { 
    $version = wp_get_theme()->get('Version'); 
    wp_enqueue_style('artiweb-style', get_template_directory_uri() . "/style.css", array('artiweb-bootstrap'),  $version, 'all');  
    wp_enqueue_style('artiweb-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all'); 
    wp_enqueue_style('artiweb-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), '1.0', 'all');  
    wp_enqueue_style('artiweb-flaticon', get_template_directory_uri() . "lib/flaticon/font/flaticon.css", array(), '1.0', 'all'); 
    wp_enqueue_style('artiweb-animate' , get_template_directory_uri()  . "lib/animate/animate.min.css", array(), '1.0', 'all'); 
    wp_enqueue_style('artiweb-carousel', get_template_directory_uri() . "lib/owlcarousel/assets/owl.carousel.min.css", array(), '1.0', 'all'); 
    wp_enqueue_style('artiweb-slick', get_template_directory_uri()    . "lib/slick/slick.css", array(), '1.0', 'all'); 
    wp_enqueue_style('artiweb-slick-theme', get_template_directory_uri() . "lib/slick/slick-theme.css", array(), '1.0', 'all'); 
}
add_action('wp_enqueue_scripts', 'artiweb_register_styles'); 



function artiweb_register_scripts() {  
    wp_enqueue_script('artiweb-jquery', "https://code.jquery.com/jquery-3.4.1.min.js", array(),  '3.4.1', 'all');  
    wp_enqueue_script('artiweb-jsb4', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js", array(),  '4.4.1', 'all');  
    wp_enqueue_script('artiweb-easing', get_template_directory_uri() . "/lib/easing/easing.min.js", array(),  '1.0', 'all');  
    wp_enqueue_script('artiweb-wow', get_template_directory_uri() . "/lib/wow/wow.min.js", array(),  '1.0', 'all');  
    wp_enqueue_script('artiweb-owl-carousel', get_template_directory_uri() . "/lib/owlcarousel/owl.carousel.min.js", array(),  '1.0', 'all');  
    wp_enqueue_script('artiweb-isotope', get_template_directory_uri() . "/lib/isotope/isotope.pkgd.min.js", array(),  '1.0', 'all');  
    wp_enqueue_script('artiweb-lightbox', get_template_directory_uri() . "/lib/lightbox/js/lightbox.min.js", array(),  '1.0', 'all');  
    wp_enqueue_script('artiweb-waypoints', get_template_directory_uri() . "/lib/waypoints/waypoints.min.js", array(),  '1.0', 'all');  
    wp_enqueue_script('artiweb-counterup', get_template_directory_uri() . "lib/counterup/counterup.min.js", array(),  '1.0', 'all');  
    wp_enqueue_script('artiweb-slick', get_template_directory_uri() . "lib/slick/slick.min.js", array(),  '1.0', 'all');  

    wp_enqueue_script('artiweb-main', get_template_directory_uri() . "js/main.js", array(
        'artiweb-jquery', 
        'artiweb-jsb4', 
        'artiweb-easing',
        'artiweb-wow',
        'artiweb-owl-carousel',
        'artiweb-isotope',
        'artiweb-lightbox',
        'artiweb-waypoints',
        'artiweb-counterup',
        'artiweb-slick',
    ),  '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'artiweb_register_scripts'); 
