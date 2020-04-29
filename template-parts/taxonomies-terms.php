<?
//Array of taxonomies to get terms for
$taxonomies = array('story-category','photo-category');
//Set arguments - don't 'hide' empty terms.
$args = array(
'hide_empty' => 0
);
$terms = get_terms( $taxonomies, $args);
$empty_terms=array();
foreach( $terms as $term ) {
// Get the term link
$term_link = get_term_link( $term );
if( $term->count > 0 )
    // display link to term archive
    echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name .'</a></li>';
elseif( $term->count !== 0 )
    // display name
    echo '' . $term->name .'';
}
?>
