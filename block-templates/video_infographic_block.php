<?php

/**
 * Video Infographic Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'sensorz-video-infographic-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

$checkBoxes = get_field('icon_selector');
$blockTitle = get_field('block_title');
$logo = get_field('logo');
// if logo is not set, get the wordpress logo
if (!$logo) {
    $logo = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($logo, 'full');
    $logo = $logo[0];
}

$videoSrc = get_field('video_file');
$videoPoster = get_field('video_poster') ? get_field('video_poster') : get_template_directory_uri() . '/assets/images/info-video-poster.png';
?>

<div <?= $anchor; ?> class="<?= esc_attr($class_name); ?>">
    <div class="logo-wrapper">
        <img src="<?php echo $logo; ?>" alt="logo" class="full-size-img full-size-img-contain" />
    </div>
    <?php if ($blockTitle) : ?>
        <h2 class="block-title"><?php echo $blockTitle; ?></h2>
    <?php endif; ?>
    <?php
    if ($checkBoxes) : ?>
        <div class="sensorz-tech-icons-block">
            <ul class="icons">
                <?php
                foreach ($checkBoxes as $checkBox) :
                    $value = $checkBox['value'];
                    $iconUrl = explode('|', $value)[0];
                    $shadowColor = explode('|', $value)[1];
                    $title = $checkBox['label'];
                ?>
                    <li style="--shadow-color: <?php echo $shadowColor; ?>">
                        <img src="<?php echo $iconUrl; ?>" alt="<?php echo $title; ?>" />
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    <?php endif; ?>
    <div class="video-js-wrapper">
        <video autoplay muted loop playsinline poster="<?php echo $videoPoster; ?>" class="video-js vjs-default-skin" id="video-infographic">
            <source src="<?php echo $videoSrc; ?>" type="video/mp4" />
            <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
        </video>
    </div>


</div>