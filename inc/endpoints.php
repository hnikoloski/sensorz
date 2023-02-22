<?php

// Register Endpoints
add_action('rest_api_init', function () {
    register_rest_route('sensorz/v1', '/use-cases-short', array(
        'methods' => 'GET',
        'callback' => 'get_use_cases_short',
    ));
});

function get_use_cases_short($request)
{
    $postsPerPage = $request->get_param('posts_per_page') ? $request->get_param('posts_per_page') : -1;
    $args = array(
        'post_type' => 'use_cases',
        'posts_per_page' => $postsPerPage,
        'orderby' => 'date',
        'order' => 'DESC',
    );
    $use_cases = new WP_Query($args);
    $posts = array();
    if ($use_cases->have_posts()) {
        while ($use_cases->have_posts()) {
            $use_cases->the_post();
            $formatedExcerptBlock = '';
            // Get the content of the post but just the excerpt block
            $blocks = parse_blocks(get_the_content());
            foreach ($blocks as $block) {
                if ($block['blockName'] === 'acf/excerpt-content') {
                    $formatedExcerptBlock = $block['innerBlocks'];
                }
            }
            $posts[] = array(
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'excerpt_content' => $formatedExcerptBlock
            );
        }
    }
    wp_reset_postdata();
    return $posts;
}
