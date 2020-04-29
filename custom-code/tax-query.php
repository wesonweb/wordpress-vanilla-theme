$args = array(
	'post_type' => 'your-post-type',
	'tax_query' => array(
		array(
			'taxonomy' => 'your-taxonomy',
			'field'    => 'slug',
			'terms'    => array( 'term1', 'term2' ),
			'operator' => 'NOT IN',
		),
		array(
			'taxonomy' => 'your-taxonomy',
			'field'    => 'id',
			'terms'    => array( terms ),
		),
		'relation' => 'AND',
	),
);
$query = new WP_Query( $args );