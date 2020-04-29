<section class="pagination">
	<div class="page-number-section">
	<?php if (show_posts_nav()) : ?>
		<h3>--- enter text here ---</h3>
		<?php the_posts_pagination( array(
			'mid_size' => 2,
			'prev_text' => __( '&larr; Previous', 'textdomain' ),
			'next_text' => __( 'Next &#8594;', 'textdomain' ),
		) ); ?>
		<?php endif; ?>
	</div>
</section>
