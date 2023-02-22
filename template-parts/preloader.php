<div id="preloader">
    <?php
    $logoUrl = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($logoUrl, 'full');

    if ($logo) : ?>
        <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>" />
    <?php endif;
    ?>
</div>