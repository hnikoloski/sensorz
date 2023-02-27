<?php

/**
 * Use Cases Short Archive Block Template.
 */

$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'sensorz-use-cases-short-archive-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}
$postsPerPage = get_field('use_cases_short_archive_posts_per_page') ? get_field('use_cases_short_archive_posts_per_page') : -1;
?>

<div <?= $anchor; ?> class="<?= esc_attr($class_name); ?>">
    <header>
        <?php if (get_field('use_cases_short_archive_title')) : ?>
            <h3 class="section-title section-title-primary text-uppercase"><?php the_field('use_cases_short_archive_title'); ?></h3>
        <?php endif; ?>

        <?php
        // Get use cases posts
        $args = array(
            'post_type' => 'use_cases',
            'posts_per_page' => $postsPerPage,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_status' => 'publish',
        );
        $use_cases = new WP_Query($args);

        if ($use_cases->have_posts()) {
            $counter = 0;
            while ($use_cases->have_posts()) {
                $use_cases->the_post();
        ?>
                <div class="single-post-header <?php if ($counter == 0) {
                                                    echo 'active';
                                                }; ?>" data-post-id="<?php echo get_the_ID(); ?>">
                    <?php
                    $featuredIcon = get_field('featured_icon', get_the_ID());
                    $featuredIconHover = get_field('hover_feature_icon', get_the_ID()) ? get_field('hover_feature_icon', get_the_ID()) : $featuredIcon;
                    ?>
                    <div class="icon" style="--iconUrl:url(<?php echo $featuredIcon; ?>); --hoverIconUrl:url(<?php echo $featuredIconHover; ?>);"></div>
                    <h4>
                        <?php echo get_the_title(); ?>
                    </h4>
                </div>
        <?php
                $counter++;
            }
        }
        wp_reset_postdata();
        ?>
    </header>

    <div class="posts-container">
        <?php
        // Get use cases posts
        $args = array(
            'post_type' => 'use_cases',
            'posts_per_page' => $postsPerPage,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_status' => 'publish',
        );
        $use_cases = new WP_Query($args);

        if ($use_cases->have_posts()) {
            $counter = 0;
            while ($use_cases->have_posts()) {
                $use_cases->the_post();
        ?>
                <div class="single-post <?php if ($counter == 0) {
                                            echo 'active';
                                        } ?>" data-post-id="<?php echo get_the_ID(); ?>">
                    <?php
                    $thePostTitle = get_the_title();
                    ?>
                    <h3 class="post_title text-center"><?php echo $thePostTitle; ?></h3>
                    <?php
                    $blocks = parse_blocks(get_the_content());
                    $formatedExcerptBlock = array();

                    foreach ($blocks as $block) {
                        if ($block['blockName'] === 'acf/excerpt-content') {
                            $formatedExcerptBlock = $block['innerBlocks'];
                            break; // Stop the loop after the first match
                        }
                    }
                    ?>
                    <div class="excerpt-content single-post-styles">

                        <?php
                        if (is_array($formatedExcerptBlock) && !empty($formatedExcerptBlock)) {
                            // Only loop through $formatedExcerptBlock if it is a non-empty array
                            foreach ($formatedExcerptBlock as $block) {
                                echo render_block($block);
                            }
                        }
                        ?>
                    </div>
                </div>


        <?php
                $counter++;
            }
        }
        wp_reset_postdata();
        ?>
    </div>
</div>