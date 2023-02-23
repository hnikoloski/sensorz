<?php

/**
 * Hero Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'sensorz-hero-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$videoUrl = get_field('hero_block_video_url') ?: '';
$videoPoster = get_field('hero_block_video_poster') ?: '';
$heroTitle = get_field('hero_block_title') ?: '';
$heroDescription = get_field('hero_block_description') ?: '';

?>

<div <?= $anchor; ?> class="<?= esc_attr($class_name); ?>">
    <div class="wrapper">
        <div class="content">
            <?php if ($heroTitle) : ?>
                <h1><?php echo $heroTitle; ?></h1>
            <?php endif; ?>
            <?php echo $heroDescription; ?>
        </div>
        <?php if ($videoUrl) : ?>
            <div class="video-wrapper">
                <div class="deco-wrapper">
                    <div class="deco-line"></div>
                    <div class="deco-line"></div>
                    <div class="deco-line"></div>
                    <video autoplay muted loop playsinline poster="<?php echo $videoPoster; ?>" class="video-js vjs-default-skin vjs-big-play-centered" id="hero-video">
                        <source src="<?php echo $videoUrl; ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        <?php endif; ?>

    </div>
    <?php if (have_rows('image_boxes')) : ?>
        <div class="image-boxes">
            <?php while (have_rows('image_boxes')) : the_row();
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $shadowColor = get_sub_field('shadow_color');
            ?>
                <div class="single-box">
                    <div class="img-wrapper" style="--shadowColor:<?php echo $shadowColor; ?>;">
                        <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" />
                    </div>
                    <p><?php echo $title; ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>