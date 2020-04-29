while ( have_posts() ) : the_post();
$categories = get_the_category( $post->ID );
foreach ( $categories as $category ) {
echo '<span class="wpb-category"><a href="' . get_category_link( $category->term_id ) . '">' .  $category->name  . '</a></span>';
}
