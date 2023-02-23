<?php
// Path: inc\acf-options.php

/**
 * ACF Options
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));


    acf_add_options_sub_page(array(
        'page_title'    => 'Partners',
        'menu_title'    => 'Partners',
        'parent_slug'   => 'theme-general-settings',
    ));

    // Tech Icons
    acf_add_options_sub_page(array(
        'page_title'    => 'Tech Icons',
        'menu_title'    => 'Tech Icons',
        'parent_slug'   => 'theme-general-settings',
    ));


    // Socials
    // acf_add_options_sub_page(array(
    //     'page_title'    => 'Socials',
    //     'menu_title'    => 'Socials',
    //     'parent_slug'   => 'theme-general-settings',
    // ));
}


// Create a hidden cpt called Tech Icons. It only has a title field.
