<?php
// add arrows to menu parent
function oenology_add_menu_parent_class( $items ) {

 $parents = array();
 foreach ( $items as $item ) {
 if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
 $parents[] = $item->menu_item_parent;
 }
 }

 foreach ( $items as $item ) {
 if ( in_array( $item->ID, $parents ) ) {
 $item->classes[] = 'has-children';
 }
 }

 return $items;
}
add_filter( 'wp_nav_menu_objects', 'oenology_add_menu_parent_class' );


//tidy up navigation by removing redundant classes and id


class Clean_Walker_Nav extends Walker_Nav_Menu {
	/**
	 * Filter used to remove built in WordPress-generated classes
	 * @param  mixed $var The array item to verify
	 * @return boolean      Whether or not the item matches the filter
	 */
	function filter_builtin_classes( $var ) {
	    return ( FALSE === strpos( $var, 'item' ) ) ? $var : '';
	}
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		// add class of submenu
		$output .= "\n$indent<ul class=\"submenu\">\n";
	}
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = $value = '';
		$unfiltered_classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes = array_filter( $unfiltered_classes, array( $this, 'filter_builtin_classes' ) );
		if ( preg_grep("/^current/", $unfiltered_classes) ) {
			$classes[] = 'active';
		}
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		$output .= $indent . '<li' . $value . $class_names .'>';
		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
} // Walker_Nav_Menu

?>
