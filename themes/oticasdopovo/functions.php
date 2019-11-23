<?php

$VERSION = '0.0.1';
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );
date_default_timezone_set("Brazil/East");


function addCss() {
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), $VERSION, 'all' );
	wp_enqueue_style( 'swiper-min', get_template_directory_uri() . '/css/swiper.min.css', array(), $VERSION, 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), $VERSION, 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), $VERSION, 'all' );

}
add_action( 'wp_enqueue_scripts', 'addCss' );

function addJs(){
	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array('jquery'), $VERSION, true );
	wp_enqueue_script( 'swiper-min', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), $VERSION, true );
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/c9a99671c5.js', array('jquery'), $VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), $VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'addJs' );

function wp_get_menu_array($current_menu) {

    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['children'] = array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID'] = $m->ID;
            $submenu[$m->ID]['title'] = $m->title;
            $submenu[$m->ID]['url'] = $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;
}

function wesg_check_active_menu( $menu_item ) {
    $actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    global $post;

    if ( $actual_link == $menu_item ||  get_page_link($post->post_parent) == $menu_item) {
        return 'selected';
    }
    return '';
}





