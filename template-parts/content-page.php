<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starter_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="container">
	<header class="entry-header container">
		<a href="<?php the_permalink();?>"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
	</header><!-- .entry-header -->

	<?php starter_theme_post_thumbnail(); ?>

	<div class="entry-content container">
		<?php
		the_content(); ?>
		<aside class="post-links">
			<? wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starter-theme' ),
				'after'  => '</div>',
			) );
			?>
		</aside>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'starter-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
