
<?php 
function university_post_types() {
    //Event Post Type
    register_post_type('event', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt',),
        'has_archive' => true,
        'public' => true,
         'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Events'
         ),
         'menu_icon' => 'dashicons-editor-table',
         'has_archive' => true,
    ));
   
}

add_action('init', 'university_post_types');
?>