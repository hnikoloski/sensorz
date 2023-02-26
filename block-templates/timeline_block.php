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
                $decoUrl = get_sub_field('deco_url');
                $decoPosterUrl = get_sub_field('deco_poster_url');
                $orderPos = 1;
                if ($counter % 2 == 0) {
                    $orderPos = 2;
                }

            ?>

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
                    <?php if ($decoUrl) : ?>
                        <div class="video-wrapper">
                            <video autoplay muted loop playsinline class="video-js vjs-default-skin" data-setup='{"controls": false, "preload": "auto"}' poster="<?php echo $decoPosterUrl; ?>">
                                <source src="<?php echo $decoUrl; ?>" type="video/mp4">
                            </video>
                        </div>
                    <?php endif; ?>

                </div>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>