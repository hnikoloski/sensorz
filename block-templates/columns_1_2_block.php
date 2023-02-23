<?php

/**
 * Excerpt Content Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'sensorz-columns-1-2-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}
$logo1 = get_field('logo_column_1');
$title1 = get_field('title_column_1');
$subTitle1 = get_field('sub_title_column_1');
$image1 = get_field('image_column_1');

$logo2 = get_field('logo_column_2');
$title2 = get_field('title_column_2');
$subTitle2 = get_field('sub_title_column_2');
$image2 = get_field('image_column_2');

$logo3 = get_field('logo_column_3');
$title3 = get_field('title_column_3');
$subTitle3 = get_field('sub_title_column_3');
$image3 = get_field('image_column_3');

?>

<div <?= $anchor; ?> class="<?= esc_attr($class_name); ?>">
    <div class="container">
        <div class="wrapper">
            <div class="col col-1">
                <div>

                    <?php if ($logo1) : ?>
                        <div class="logo-wrapper">
                            <img src="<?php echo $logo1; ?>" alt="<?php echo $title1; ?>" class="full-size-img full-size-img-contain" />
                        </div>
                    <?php endif; ?>

                    <?php if ($title1) : ?>
                        <h3><?php echo $title1; ?></h3>
                    <?php endif; ?>

                    <?php if ($subTitle1) : ?>
                        <p><?php echo $subTitle1; ?></p>
                    <?php endif; ?>
                </div>

                <?php if ($image1) : ?>
                    <div class="img-wrapper">
                        <img src="<?php echo $image1; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="full-size-img full-size-img-contain" />
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="wrapper">
            <div class="col col-2">
                <?php if ($logo2) : ?>
                    <div class="logo-wrapper">
                        <img src="<?php echo $logo2; ?>" alt="<?php echo $title2; ?>" class="full-size-img full-size-img-contain" />
                    </div>
                <?php endif; ?>

                <?php if ($title2) : ?>
                    <h3><?php echo $title2; ?></h3>
                <?php endif; ?>

                <?php if ($subTitle2) : ?>
                    <p><?php echo $subTitle2; ?></p>
                <?php endif; ?>

                <?php if ($image2) : ?>
                    <div class="img-wrapper">
                        <img src="<?php echo $image2; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="full-size-img full-size-img-contain" />
                    </div>
                <?php endif; ?>
            </div>

            <div class="col col-3">
                <?php if ($logo3) : ?>
                    <div class="logo-wrapper">
                        <img src="<?php echo $logo3; ?>" alt="<?php echo $title3; ?>" class="full-size-img full-size-img-contain" />
                    </div>
                <?php endif; ?>

                <?php if ($title3) : ?>
                    <h3><?php echo $title3; ?></h3>
                <?php endif; ?>

                <?php if ($subTitle3) : ?>
                    <p><?php echo $subTitle3; ?></p>
                <?php endif; ?>

                <?php if ($image3) : ?>
                    <div class="img-wrapper">
                        <img src="<?php echo $image3; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="full-size-img full-size-img-contain" />
                    </div>
                <?php endif; ?>

            </div>
        </div>


    </div>
</div>