<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * 
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php
    // get Preloader template part
    get_template_part('template-parts/preloader');
    ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <?php
            the_custom_logo();
            ?>

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                )
            );
            ?>
            <div id="mobile-trigger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header><!-- #masthead -->