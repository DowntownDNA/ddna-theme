<?php 

if( function_exists('acf_add_options_sub_page') ) {

    acf_add_options_sub_page(array(
        'title' => 'Theme Options',
        'menu' => 'Theme Options',
        'parent' => 'options-general.php',
        'slug' => 'theme_options',
        'capability' => 'manage_options'
    ));


    acf_add_options_sub_page(array(
        'title' => 'Districts Options',
        'menu' => 'Districts Options',
        'parent' => 'edit.php?post_type=district',
        'slug' => 'district_options',
        'capability' => 'manage_options'
    ));

}