<!-- template part for showing single post content -->


<article class="single-blog container">
    <h1 class="entry-title"><?php the_title();?></h1>
    <aside class="meta-info">
        <span class="publish-date"><i class="far fa-calendar-alt"></i> <?php the_time('j F Y'); ?></span>
        <span class="tag-container"><?php the_tags('<span class="tag-link"><i class="fas fa-tag"></i>', '</span><span class="tag-link"><i class="fas fa-tag"></i>', '</span>'); ?></span>
        <a href="#comments"><span class="comments"><i class="fas fa-comment"></i><?php comments_number(); ?></span></a>
    </aside>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
    <!-- %title shows post title;  -->
    <?php the_post_navigation(array(
	'prev_text' => '<span class="meta-nav" aria-hidden="true">text for previous post</span> ' .
		'<span class="screen-reader-text">Previous entry</span> ' .
		'<span class="post-title">%title</span>',
	'next_text' => '<span class="meta-nav" aria-hidden="true">Further</span> ' .
		'<span class="screen-reader-text">text for next post</span> ' .
		'<span class="post-title">%title</span>',
) ); ?>
</article>

<section class="comments-container container">
    <?php comments_template(); ?>
</section>