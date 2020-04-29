$args = array(
	'post_type' => 'post',
	'meta_query' => array(
		array(
			'key'     => '_thumbnail_id',
			'value'   => '',
			'compare' => '!=',
		),
	),
);
$query = new WP_Query( $args );