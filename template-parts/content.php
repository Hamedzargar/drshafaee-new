<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drshafaee
 */

?>
<div class="generalSinglePostStyle singleBox lowRadius mediumPadding">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header generalHeading bigHeading highMargined centeredText bottomBorder">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="innerBlogCardHeaderItem highMargined">
		<div class="blogCardHeaderItem">
			<svg fill="#28416e" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 22"><g fill="none" fill-rule="evenodd" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(1 1)"><rect width="18" height="18" y="2" rx="2"></rect><path d="M13 0v4M5 0v4M0 8h18"></path></g></svg>
			<span><?php echo get_the_date() ?></span>
		</div>
		<div class="blogCardHeaderItem authorPart">
			<svg  width="20" height="20" fill="#28416e" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 32 32"><path d="M11.575 15.664C5.453 17.554 1 23.261 1 30a1 1 0 0 0 2 0c0-7.175 5.825-13 13-13s13 5.825 13 13a1 1 0 0 0 2 0c0-6.739-4.453-12.446-10.575-14.336A7.994 7.994 0 0 0 24 9c0-4.415-3.585-8-8-8S8 4.585 8 9a7.994 7.994 0 0 0 3.575 6.664ZM16 3c3.311 0 6 2.689 6 6s-2.689 6-6 6-6-2.689-6-6 2.689-6 6-6Z"/></svg>
			<span><?php echo get_the_author() ?></span>
		</div>
	</div>
	<div class="singlePostCard">
	<?php drshafaee_post_thumbnail(); ?>
	<div class="blogCardHeader">
	</div>
	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'drshafaee' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		// wp_link_pages(
		// 	array(
		// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'drshafaee' ),
		// 		'after'  => '</div>',
		// 	)
		// );
		?>
	</div><!-- .entry-content -->
	</div>
	<!-- <footer class="entry-footer">
		<?php //drshafaee_entry_footer(); ?>
	</footer>.entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>