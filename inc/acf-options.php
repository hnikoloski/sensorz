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


function dynamic_icon_selector_choices($field)
{
    $choices = array();
    if (function_exists('get_field')) {
        $tech_icons = get_field('tech_icons', 'option');
        if (!empty($tech_icons)) {
            foreach ($tech_icons as $tech_icon) {
                $choices[$tech_icon['icon'] . '|'  . $tech_icon['shadow_color']]  = $tech_icon['name'];
            }
        }
    }
    $field['choices'] = $choices;
    return $field;
}
add_filter('acf/load_field/name=icon_selector', 'dynamic_icon_selector_choices');
