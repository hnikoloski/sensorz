<?php

/**
 * Fancy Image Gallery Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'sensorz-fancy-image-gallery-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

$selectedStyle = get_field('choose_style');
$gallery = get_field('gallery');
?>

<div <?= $anchor; ?> class="<?= esc_attr($class_name); ?>">

</div>