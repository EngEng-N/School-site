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

}
add_action("wp_enqueue_scripts", "schoolsite_enqueues");

function schoolsite_setup(){

    // Load style.css on the back-end (Block Editor)
    
    add_editor_style(get_stylesheet_uri());
}
add_action("after_setup_theme", "schoolsite_setup");