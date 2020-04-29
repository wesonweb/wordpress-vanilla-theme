<!-- custom WP_Query -->
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) : $the_query->the_post(); 
		<!-- Your code here -->
	endwhile;
} else {
		<!-- no posts found -->
}
<!-- /* Restore original Post Data */ -->
wp_reset_postdata();