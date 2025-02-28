<?php

function schoolsite_enqueues()
{

    // Load style.css on the front-end
    // Parameters: Unique handle, Source, Dependencier, Version Number, Media

    wp_enqueue_style(
        'schoolsite-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );

    wp_enqueue_style(
        'schoolsite-normalize',
        get_theme_file_uri('assets/css/normalize.css'),
        array(),
        '12.1.0'
    );

}
add_action("wp_enqueue_scripts", "schoolsite_enqueues");

function schoolsite_setup()
{

    // Load style.css on the back-end (Block Editor)

    add_editor_style(get_stylesheet_uri());
}
add_action("after_setup_theme", "schoolsite_setup");

// Codes from chatgpt
// Change the 'title' placeholder when the slug is "students" 
// This only applies to Students CPT
function change_student_cpt_title_placeholder($title, $post)
{
    if ($post->post_type == 'fwd-student') {
        return 'Add student name';
    }
    return $title;
}
add_filter('enter_title_here', 'change_student_cpt_title_placeholder', 10, 2);

function school_setup()
{
    add_editor_style(get_stylesheet_uri());


    add_image_size('600x400', 400, 600, true);

    add_image_size('800x800', 800, 800, true);

    // crop images 
    add_image_size('200x250', 200, 250, true);

    add_image_size('800x800', 800, 800, true);


}


function school_add_custom_image_sizes($size_names)
{
    $new_sizes = array(
        '600x400' => __('400x600', 'school-theme'),

        '800x800' => __('800x800', 'school-theme'),
        '800x400' => __('800x400', 'school-theme'),
        '400x200' => __('400x200', 'school-theme'),

    );
    return array_merge($size_names, $new_sizes);
}
add_filter('image_size_names_choose', 'school_add_custom_image_sizes');
add_action('after_setup_theme', 'school_setup');
//used the CDN version of lightgallery cuz it was faster since it just had to be enqueued
function enqueue_lightgallery_assets()
{
    if (is_front_page()) {

        wp_enqueue_style('lightgallery-css', 'https://cdn.jsdelivr.net/npm/lightgallery@2.8.2/css/lightgallery-bundle.min.css');


        wp_enqueue_script('lightgallery-js', 'https://cdn.jsdelivr.net/npm/lightgallery@2.8.2/lightgallery.umd.min.js', array('jquery'), null, true);

        wp_enqueue_script('lg-thumbnail', 'https://cdn.jsdelivr.net/npm/lightgallery@2.8.2/plugins/thumbnail/lg-thumbnail.umd.min.js', array('lightgallery-js'), null, true);
        wp_enqueue_script('lg-zoom', 'https://cdn.jsdelivr.net/npm/lightgallery@2.8.2/plugins/zoom/lg-zoom.umd.min.js', array('lightgallery-js'), null, true);


        wp_enqueue_script('custom-lightgallery', get_template_directory_uri() . '/js/lightgallery-init.js', array('jquery', 'lightgallery-js'), null, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_lightgallery_assets');

/**
 * Custom Post Types & Custom Taxonomies
 */
require get_template_directory() . '/inc/post-types-taxonomies.php';