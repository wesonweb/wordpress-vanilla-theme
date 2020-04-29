<?php
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
/* Register dynamic sidebar 'new_sidebar' */
    register_sidebar(
        array(
        'id' => 'first_sidebar',
        'name' => __( 'Sidebar 1' ),
        'description' => __( 'add a short description of sidebar one.' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
        )
    );
    register_sidebar(
        array(
        'id' => 'second_sidebar',
        'name' => __( 'Sidebar 2' ),
        'description' => __( 'add a short description of sidebar two.' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
        )
    );
    register_sidebar(
        array(
        'id' => 'third_sidebar',
        'name' => __( 'Sidebar 3' ),
        'description' => __( 'A short description of sidebar three.' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
        )
    );
// Repeat the code pattern above for additional sidebars.
}?>
