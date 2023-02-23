<?php

/**
 * Timeline Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'sensorz-timeline-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

?>

<div <?= $anchor; ?> class="<?= esc_attr($class_name); ?>">
    <?php if (have_rows('timeline')) :
        $counter = 0;
    ?>
        <div class="timeline">
            <?php while (have_rows('timeline')) : the_row();
                $counter++;
                $decoImage = get_sub_field('deco_image');
                $decoImageWidth = get_sub_field('deco_image_width') ? get_sub_field('deco_image_width') : 100;
                $decoImageHeight = get_sub_field('deco_image_height') ? get_sub_field('deco_image_height') : 100;
                $orderPos = 1;
                if ($counter % 2 == 0) {
                    $orderPos = 2;
                }

            ?>
                <!-- 
                style="--deco-img-width: <?php echo $decoImageWidth / 10; ?>rem; --deco-img-height: <?php echo $decoImageHeight / 10; ?>rem; --deco-img-url:url(<?php echo $decoImage['url']; ?>);"

             -->
                <div class="timeline-single">
                    <div class="col">
                        <span class="timeline-single-number"><?php echo $counter; ?></span>
                        <div class="container">
                            <?php if (get_sub_field('title')) : ?>
                                <h3>
                                    <?php the_sub_field('title'); ?>
                                </h3>
                            <?php endif; ?>
                            <?php if (get_sub_field('content')) : ?>
                                <?php the_sub_field('content'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($decoImage) : ?>
                        <div class="image-wrapper" style="--deco-img-width: <?php echo $decoImageWidth / 10; ?>rem; --deco-img-height: <?php echo $decoImageHeight / 10; ?>rem;">
                            <?php
                            echo wp_get_attachment_image($decoImage['id'], array($decoImageWidth, $decoImageHeight), "", array("class" => "full-size-img full-size-img-contain"));
                            ?>
                        </div>
                    <?php endif; ?>

                </div>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>