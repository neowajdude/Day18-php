<?php

wp_enqueue_style( 'style-css', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . './assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . './assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

register_sidebar(array(
    'name' => 'Logo Top Right',
    'id' => 'ltr',
    'before_widget' => '',
    'after_widget' => '',
));

register_nav_menus(array(
    'TM' => 'Primary',
));

register_sidebar(array(
    'name' => 'Hero Title',
    'id' => 'h_title',
    'before_widget' => '',
    'after_widget' => '',
));

register_sidebar(array(
    'name' => 'Hero Card Image-1',
    'id' => 'card_img',
    'before_widget' => '<div class="card_img">',
    'after_widget' => '</div>',
));

register_sidebar(array(
    'name' => 'Hero Card Body-1',
    'id' => 'card_body',
    'before_widget' => '<div class="three_card">',
    'after_widget' => '</div>',
));


register_sidebar(array(
    'name' => 'Photo Img 1',
    'id' => 'photoimg1',
    'before_widget' => '',
    'after_widget' => '',
));

register_sidebar(array(
    'name' => 'Photo card 1',
    'id' => 'photocard1',
    'before_widget' => '',
    'after_widget' => '',
));


register_sidebar(array(
    'name' => 'Photo Img 2',
    'id' => 'photoimg2',
    'before_widget' => '',
    'after_widget' => '',
));

register_sidebar(array(
    'name' => 'Photo card 2',
    'id' => 'photocard2',
    'before_widget' => '',
    'after_widget' => '',
));


register_sidebar(array(
    'name' => 'Photo Img 3',
    'id' => 'photoimg3',
    'before_widget' => '',
    'after_widget' => '',
));

register_sidebar(array(
    'name' => 'Photo card 3',
    'id' => 'photocard3',
    'before_widget' => '',
    'after_widget' => '',
));


register_sidebar(array(
    'name' => 'Photo Img 4',
    'id' => 'photoimg4',
    'before_widget' => '',
    'after_widget' => '',
));

register_sidebar(array(
    'name' => 'Photo card 4',
    'id' => 'photocard4',
    'before_widget' => '',
    'after_widget' => '',
));
