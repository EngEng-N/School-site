<?php

function schoolsite_enqueues(){

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
        get_theme_file_uri( 'assets/css/normalize.css'), 
        array(), 
        '12.1.0'
    );

}
add_action("wp_enqueue_scripts", "schoolsite_enqueues");

function schoolsite_setup(){

    // Load style.css on the back-end (Block Editor)
    
    add_editor_style(get_stylesheet_uri());
}
add_action("after_setup_theme", "schoolsite_setup");

// Codes from chatgpt
// Change the 'title' placeholder when the slug is "students" 
// This only applies to Students CPT
function change_student_cpt_title_placeholder($title, $post) {
    if ($post->post_type == 'fwd-student') {
        return 'Add student name';
    }
    return $title;
}
add_filter('enter_title_here', 'change_student_cpt_title_placeholder', 10, 2);

/**
* Custom Post Types & Custom Taxonomies
*/
require get_template_directory() . '/inc/post-types-taxonomies.php';