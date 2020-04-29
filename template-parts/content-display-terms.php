<!-- display taxonomy terms as links  -->
<ul>
  <?php
  $tax = '--- enter taxonomy ---';
  // get the terms of taxonomy
  $terms = get_terms( $tax );
  // loop through all terms
  foreach( $terms as $term ) {
  // if no entries attached to the term
  if( 0 == $term->count )
    // display only the term name
    echo '<li>' . $term->name . '</li>';
  // if term has more than 0 entries
  elseif( $term->count > 0 )
    // display link to the term archive
    echo '<li><a href="'. get_term_link( $term ) .'">'. $term->name .'</a></li>';
  }
  ?>
</ul>
