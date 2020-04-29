<!-- this example will compare key and value and uses comparison to return results - in this case those above 5000 -->
$args = array(
	'post_type' => 'your-post-type',
	'meta_query' => array(
		array(
			'key'     => 'key-you-want-to-use',
			'value'   => 50000, 
			'compare' => '>',
			'type'    => 'NUMERIC'
		),
	),
	'order_by' => 'meta_value_num',
	'meta_key' => 'same-key-as-above'
);
$query = new WP_Query( $args );
