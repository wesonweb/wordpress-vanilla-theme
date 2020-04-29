<?php
/**
 * Template name: Custom Blog page
 *
 * This is a custom page and uses WP_Query to get 'posts' and list them on this page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starter_theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <!-- custom WP_Query -->
            <?php
            $myargs = array(
                'post_type' => 'post', //name of post type
                'posts_per_page' => -1, //number of post to show
                'order' => 'ASC',
                'paged' => $paged
            );
            $the_query = new WP_Query( $myargs );
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <!-- Your code here -->
                <article class="blog-summary">
                    <h2><?php the_title();?></h2>
                    <p><span class="publish-date"><i class="far fa-calendar-alt"></i> <?php the_time('j F Y'); ?></span> | <span class="author"><i class="fas fa-user-alt"></i> <?php the_author(); ?></span></p>
                    <?php the_post_thumbnail();?>
                    <p><?php the_excerpt();?></p>
                    <a href="<?php the_permalink();?>">Read more</a>
                </article>
                <?php endwhile;
            } else { ?>
            <!-- no posts found -->
            <div class="no-custom-posts-found container"><h2>Sorry, no posts were found.</h2></div>
            <?php } ?>
            <!-- /* Restore original Post Data */ -->
            <?php wp_reset_postdata();?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
