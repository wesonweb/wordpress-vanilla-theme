<?php
// register custom posts

add_action( 'init', 'mycustompost_post_init' );
  function recorded_webinar_post_init() {
    $labels = array(
        'name'               => _x( 'mycustompost-name', 'post type general name' ),
        'singular_name'      => _x( 'mycustompost-name', 'post type singular name' ),
        'menu_name'          => _x( 'mycustompost-name', 'admin menu' ),
        'name_admin_bar'     => _x( 'mycustompost-name', 'add new on admin bar' ),
        'add_new'            => _x( 'Add new mycustompost-name', 'mycustompost-name' ),
        'add_new_item'       => __( 'Add a new mycustompost-name' ),
        'new_item'           => __( 'New mycustompost-name' ),
        'edit_item'          => __( 'Edit mycustompost-name' ),
        'view_item'          => __( 'View mycustompost-name' ),
        'all_items'          => __( 'All mycustompost-name' ),
        'search_items'       => __( 'Search mycustompost-name' ),
        'parent_item_colon'  => __( 'Parent mycustompost-name:' ),
        'not_found'          => __( 'No mycustompost-name found.' ),
        'not_found_in_trash' => __( 'No mycustompost-name found in Trash.' )
      );
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'custom-post-name' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'thumbnail', 'editor', 'comments', 'page-attributes' )
      );
      flush_rewrite_rules( true );
      register_post_type( 'mycustompost-name', $args );
  }
?>
