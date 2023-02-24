<?php

// Path: inc\acf-blocks.php

// Block categories
add_filter('block_categories_all', function ($categories) {

    // Adding a new category.
    $categories[] = array(
        'slug'  => 'sensorz',
        'title' => 'Sensorz',
        // icon the logo
        'icon'  => 'sensorz',
        'order' => 1,
    );

    return $categories;
});

// Editor styles
add_action('enqueue_block_editor_assets', 'starter_editor_styles');
function starter_editor_styles()
{
    wp_enqueue_style('sensorz-editor-styles', get_template_directory_uri() . '/dist/css/editor.css');
}

function starter_acf_init_block_types()
{

    if (function_exists('acf_register_block_type')) {

        // Hero block
        acf_register_block_type(
            array(
                'name'              => 'hero',
                'title'             => __('Hero'),
                'description'       => __('A block to display hero.'),
                'render_template'   => 'block-templates/hero-block.php',
                'category'          => 'sensorz',
                'icon'              => 'sensorz',
                'keywords'          => array('hero', 'sensorz'),
                'supports'          => array(
                    'mode' => true,
                    'anchor' => true,

                ),
            ),
        );

        // Trusted by block
        acf_register_block_type(
            array(
                'name'              => 'trusted-by',
                'title'             => __('Trusted by'),
                'description'       => __('A block to display trusted by.'),
                'render_template'   => 'block-templates/trusted-by-block.php',
                'category'          => 'sensorz',
                'icon'              => 'sensorz',
                'keywords'          => array('trusted by', 'sensorz'),
                'supports'          => array(
                    'mode' => true,
                    'anchor' => true,

                ),
            ),
        );

        // Excerpt Content Block
        acf_register_block_type(
            array(
                'name'              => 'excerpt-content',
                'title'             => __('Excerpt Content'),
                'description'       => __('A block to display excerpt content.'),
                'render_template'   => 'block-templates/excerpt-content-block.php',
                'category'          => 'sensorz',
                'icon'              => 'sensorz',
                'keywords'          => array('excerpt content', 'sensorz'),
                'supports'        => [
                    'align'            => false,
                    'anchor'        => true,
                    'customClassName'    => true,
                    'jsx'             => true,
                ]
            ),
        );

        // Use Cases Short Archive Block
        acf_register_block_type(
            array(
                'name'              => 'use-cases-short-archive',
                'title'             => __('Use Cases Short Archive'),
                'description'       => __('A block to display use cases short archive.'),
                'render_template'   => 'block-templates/use-cases-short-archive-block.php',
                'category'          => 'sensorz',
                'icon'              => 'sensorz',
                'keywords'          => array('use cases short archive', 'sensorz'),
                'supports'          => array(
                    'mode' => true,
                    'anchor' => true,

                ),
            ),
        );

        // Fancy image gallery block
        acf_register_block_type(
            array(
                'name'              => 'fancy-image-gallery',
                'title'             => __('Fancy Image Gallery'),
                'description'       => __('A block to display fancy image gallery.'),
                'render_template'   => 'block-templates/fancy_image_gallery_block.php',
                'category'          => 'sensorz',
                'icon'              => 'sensorz',
                'keywords'          => array('fancy image gallery', 'sensorz'),
                'supports'          => array(
                    'mode' => true,
                    'anchor' => true,

                ),
            ),
        );

        // Timeline block
        acf_register_block_type(
            array(
                'name'              => 'timeline',
                'title'             => __('Timeline'),
                'description'       => __('A block to display timeline.'),
                'render_template'   => 'block-templates/timeline_block.php',
                'category'          => 'sensorz',
                'icon'              => 'sensorz',
                'keywords'          => array('timeline', 'sensorz'),
                'supports'          => array(
                    'mode' => true,
                    'anchor' => true,

                ),
            ),
        );

        // Columns 1:2 block
        acf_register_block_type(
            array(
                'name'              => 'columns-1-2',
                'title'             => __('Columns 1:2'),
                'description'       => __('A block to display columns 1:2.'),
                'render_template'   => 'block-templates/columns_1_2_block.php',
                'category'          => 'sensorz',
                'icon'              => 'sensorz',
                'keywords'          => array('columns 1:2', 'sensorz'),
                'supports'          => array(
                    'mode' => true,
                    'anchor' => true,

                ),
            ),
        );

        // Tech Icons block
        acf_register_block_type(
            array(
                'name'              => 'tech-icons',
                'title'             => __('Tech Icons'),
                'description'       => __('A block to display tech icons.'),
                'render_template'   => 'block-templates/tech_icons_block.php',
                'category'          => 'sensorz',
                'icon'              => 'sensorz',
                'keywords'          => array('tech icons', 'sensorz'),
                'supports'          => array(
                    'mode' => true,
                    'anchor' => true,

                ),
            ),
        );

        // Video Infographic block
        acf_register_block_type(
            array(
                'name'              => 'video-infographic',
                'title'             => __('Video Infographic'),
                'description'       => __('A block to display video infographic.'),
                'render_template'   => 'block-templates/video_infographic_block.php',
                'category'          => 'sensorz',
                'icon'              => 'sensorz',
                'keywords'          => array('video infographic', 'sensorz'),
                'supports'          => array(
                    'mode' => true,
                    'anchor' => true,

                ),
            ),
        );
    }
}

add_action('acf/init', 'starter_acf_init_block_types');
