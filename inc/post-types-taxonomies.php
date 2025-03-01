<?php

function schoolsite_register_custom_post_types() {

    // Students CPT
    $labels = array(
        'name'                     => _x( 'Students', 'post type general name', 'school-theme' ),
        'singular_name'            => _x( 'Students', 'post type singular name', 'school-theme' ),
        'add_new'                  => _x( 'Add New', 'student', 'school-theme' ),
        'add_new_item'             => __( 'Add New Student', 'school-theme' ),
        'edit_item'                => __( 'Edit Student', 'school-theme' ),
        'new_item'                 => __( 'New Student', 'school-theme' ),
        'view_item'                => __( 'View Student', 'school-theme' ),
        'view_items'               => __( 'View Students', 'school-theme' ),
        'search_items'             => __( 'Search Students', 'school-theme' ),
        'not_found'                => __( 'No Students found.', 'school-theme' ),
        'not_found_in_trash'       => __( 'No Students found in Trash.', 'school-theme' ),
        'parent_item_colon'        => __( 'Parent Students:', 'school-theme' ),
        'all_items'                => __( 'All Students', 'school-theme' ),
        'archives'                 => __( 'Student Archives', 'school-theme' ),
        'attributes'               => __( 'Student Attributes', 'school-theme' ),
        'insert_into_item'         => __( 'Insert into Student', 'school-theme' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this Student', 'school-theme' ),
        'featured_image'           => __( 'Student featured image', 'school-theme' ),
        'set_featured_image'       => __( 'Set Student featured image', 'school-theme' ),
        'remove_featured_image'    => __( 'Remove Student featured image', 'school-theme' ),
        'use_featured_image'       => __( 'Use as featured image', 'school-theme' ),
        'menu_name'                => _x( 'Students', 'admin menu', 'school-theme' ),
        'filter_items_list'        => __( 'Filter works list', 'school-theme' ),
        'items_list_navigation'    => __( 'Students list navigation', 'school-theme' ),
        'items_list'               => __( 'Students list', 'school-theme' ),
        'item_published'           => __( 'Student published.', 'school-theme' ),
        'item_published_privately' => __( 'Student published privately.', 'school-theme' ),
        'item_revereted_to_draft'  => __( 'Student reverted to draft.', 'school-theme' ),
        'item_trashed'             => __( 'Student trashed.', 'school-theme' ),
        'item_scheduled'           => __( 'Student scheduled.', 'school-theme' ),
        'item_updated'             => __( 'Student updated.', 'school-theme' ),
        'item_link'                => __( 'Student link.', 'school-theme' ),
        'item_link_description'    => __( 'A link to a Student.', 'school-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'students' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-buddicons-buddypress-logo',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'template' => array(
            array('core/paragraph', array(
                'placeholder' => 'Enter description here...'
            )),
            array('core/button', array(
                'text' => 'Click Here',
                'url' => '#',
                'align' => 'center'
            ))
        ),
        'template_lock' => 'all'
    );
    register_post_type( 'fwd-student', $args );

    // Staff CPT
    $labels = array(
        'name'                     => _x( 'Staff', 'post type general name', 'school-theme' ),
        'singular_name'            => _x( 'Staff', 'post type singular name', 'school-theme' ),
        'add_new'                  => _x( 'Add New', 'Staff', 'school-theme' ),
        'add_new_item'             => __( 'Add New Staff', 'school-theme' ),
        'edit_item'                => __( 'Edit Staff', 'school-theme' ),
        'new_item'                 => __( 'New Staff', 'school-theme' ),
        'view_item'                => __( 'View Staff', 'school-theme' ),
        'view_items'               => __( 'View Staff', 'school-theme' ),
        'search_items'             => __( 'Search Staff', 'school-theme' ),
        'not_found'                => __( 'No Staff found.', 'school-theme' ),
        'not_found_in_trash'       => __( 'No Staff found in Trash.', 'school-theme' ),
        'parent_item_colon'        => __( 'Parent Staff:', 'school-theme' ),
        'all_items'                => __( 'All Staff', 'school-theme' ),
        'archives'                 => __( 'Staff Archives', 'school-theme' ),
        'attributes'               => __( 'Staff Attributes', 'school-theme' ),
        'insert_into_item'         => __( 'Insert into Staff', 'school-theme' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this Staff', 'school-theme' ),
        'featured_image'           => __( 'Staff featured image', 'school-theme' ),
        'set_featured_image'       => __( 'Set Staff featured image', 'school-theme' ),
        'remove_featured_image'    => __( 'Remove Staff featured image', 'school-theme' ),
        'use_featured_image'       => __( 'Use as Staff image', 'school-theme' ),
        'menu_name'                => _x( 'Staff', 'admin menu', 'school-theme' ),
        'filter_items_list'        => __( 'Filter Staff list', 'school-theme' ),
        'items_list_navigation'    => __( 'Staff list navigation', 'school-theme' ),
        'items_list'               => __( 'Staff list', 'school-theme' ),
        'item_published'           => __( 'Staff published.', 'school-theme' ),
        'item_published_privately' => __( 'Staff published privately.', 'school-theme' ),
        'item_revereted_to_draft'  => __( 'Staff reverted to draft.', 'school-theme' ),
        'item_trashed'             => __( 'Staff trashed.', 'school-theme' ),
        'item_scheduled'           => __( 'Staff scheduled.', 'school-theme' ),
        'item_updated'             => __( 'Staff updated.', 'school-theme' ),
        'item_link'                => __( 'Staff link.', 'school-theme' ),
        'item_link_description'    => __( 'A link to a Staff.', 'school-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'staff' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'template' => array(
        array('core/heading', array(
            'placeholder' => 'Enter job title here...',
            'level' => 2
        ))
),
'template_lock' => 'all'
    );
    register_post_type( 'fwd-staff', $args );
}
add_action( 'init', 'schoolsite_register_custom_post_types' );

function schoolsite_register_taxonomies() {
    
    // Student Taxonomy
    $labels = array(
        'name'                  => _x( 'Student Categories', 'taxonomy general name', 'school-theme' ),
        'singular_name'         => _x( 'Student Category', 'taxonomy singular name', 'school-theme' ),
        'search_items'          => __( 'Search Student Categories', 'school-theme' ),
        'all_items'             => __( 'All Student Category', 'school-theme' ),
        'parent_item'           => __( 'Parent Student Category', 'school-theme' ),
        'parent_item_colon'     => __( 'Parent Student Category:', 'school-theme' ),
        'edit_item'             => __( 'Edit Student Category', 'school-theme' ),
        'view_item'             => __( 'View Student Category', 'school-theme' ),
        'update_item'           => __( 'Update Student Category', 'school-theme' ),
        'add_new_item'          => __( 'Add New Student Category', 'school-theme' ),
        'new_item_name'         => __( 'New Student Category Name', 'school-theme' ),
        'template_name'         => __( 'Student Category Archives', 'school-theme' ),
        'menu_name'             => __( 'Student Category', 'school-theme' ),
        'not_found'             => __( 'No Student categories found.', 'school-theme' ),
        'no_terms'              => __( 'No Student categories', 'school-theme' ),
        'items_list_navigation' => __( 'Student Categories list navigation', 'school-theme' ),
        'items_list'            => __( 'Student Categories list', 'school-theme' ),
        'item_link'             => __( 'Student Category Link', 'school-theme' ),
        'item_link_description' => __( 'A link to a student category.', 'school-theme' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'student-categories' ),
    );
    register_taxonomy( 'fwd-student-category', array( 'fwd-student' ), $args );

    // Staff Taxonomy
    $labels = array(
        'name'                  => _x( 'Staff Categories', 'taxonomy general name', 'school-theme' ),
        'singular_name'         => _x( 'Staff Category', 'taxonomy singular name', 'school-theme' ),
        'search_items'          => __( 'Staff Student Categories', 'school-theme' ),
        'all_items'             => __( 'All Staff Category', 'school-theme' ),
        'parent_item'           => __( 'Parent Staff Category', 'school-theme' ),
        'parent_item_colon'     => __( 'Parent Staff Category:', 'school-theme' ),
        'edit_item'             => __( 'Edit Staff Category', 'school-theme' ),
        'view_item'             => __( 'View Staff Category', 'school-theme' ),
        'update_item'           => __( 'Update Staff Category', 'school-theme' ),
        'add_new_item'          => __( 'Add New Staff Category', 'school-theme' ),
        'new_item_name'         => __( 'New Staff Category Name', 'school-theme' ),
        'template_name'         => __( 'Staff Category Archives', 'school-theme' ),
        'menu_name'             => __( 'Staff Category', 'school-theme' ),
        'not_found'             => __( 'No Staff categories found.', 'school-theme' ),
        'no_terms'              => __( 'No Staff categories', 'school-theme' ),
        'items_list_navigation' => __( 'Staff Categories list navigation', 'school-theme' ),
        'items_list'            => __( 'Staff Categories list', 'school-theme' ),
        'item_link'             => __( 'Staff Category Link', 'school-theme' ),
        'item_link_description' => __( 'A link to a Staff category.', 'school-theme' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'staff-categories' ),
        // 'capabilities'      => array(
        // // Codes from chatgpt
        // 'manage_terms' => '', // Set to an empty string to disable managing terms
        // 'edit_terms'   => '', // Set to an empty string to disable editing terms
        // 'delete_terms' => '', // Set to an empty string to disable deleting terms
        // 'assign_terms' => 'edit_posts', // Keep assigning terms with the 'edit_posts' capability, only authors and editors can assign the terms to new staff
        // ),
    );
    register_taxonomy( 'fwd-staff-category', array( 'fwd-staff' ), $args );

}
add_action( 'init', 'schoolsite_register_taxonomies' );

function schoolsite_rewrite_flush() {
    schoolsite_register_custom_post_types();
    schoolsite_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'schoolsite_rewrite_flush' );