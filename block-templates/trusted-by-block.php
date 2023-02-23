<?php

/**
 * Trusted by Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'sensorz-trusted-by-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}
?>

<div <?= $anchor; ?> class="<?= esc_attr($class_name); ?>">

    <?php if (get_field('trusted_by_title')) : ?>
        <h2 class="section-title section-title-light text-uppercase"><?php the_field('trusted_by_title'); ?></h2>
    <?php endif; ?>
    <?php
    $partners = get_field('trusted_by', 'option');
    if ($partners) : ?>
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($partners as $partner) : ?>
                    <div class="swiper-slide">
                        <div class="img-wrapper">
                            <img src="<?php echo $partner['logo']; ?>" alt="<?php echo $partner['name']; ?>" />
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

</div>