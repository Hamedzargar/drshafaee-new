<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drshafaee
 */

?>
<article data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" id="post-<?php the_ID(); ?>" <?php post_class('lightBorder highRadius mediumMargined'); ?>>
	<?php the_post_thumbnail() ?>
	<header class="entry-header">
		<?php

		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<?php the_excerpt(); ?>
	<div class="archivePostFooter mediumPadding">
		<span><?php echo get_the_author() ?></span>
		<span><?php echo get_the_date() ?></span>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->