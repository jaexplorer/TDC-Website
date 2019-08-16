<?php

    function add_main_TDC_scripts() {

        wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all' ); 
        wp_enqueue_style('normalise_css', get_template_directory_uri() . '/css/normalise.css', array(), '1.0.0', 'all' ); 
        wp_enqueue_script('jquery_js', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true );
        wp_enqueue_script('tweenMax_js', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '1.0.0', true );
        wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
    }

    function setup_TDC() {

        add_theme_support('menus');
        add_theme_support( 'post-thumbnails' ); 
        add_theme_support( 'title-tag' );
        // register_nav_menu('primary', 'Main Navigation')
    }

    add_action('wp_enqueue_scripts', 'add_main_TDC_scripts');
    add_action('init', 'setup_TDC');
    add_filter('show_admin_bar', '__return_false');
?>