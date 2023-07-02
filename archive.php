<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drshafaee
 */

get_header();
?>

	<main id="primary" class="site-main mainView">

		<?php if ( have_posts() ) : ?>

			<header class="page-header generalHeading highMargined bottomBorder archiveCatTitle">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<span class="archive-description">', '</span>' );
				?>
			</header><!-- .page-header -->
			<div class="archiveParent">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'archive' );

			endwhile;
			?>
			</div>
			<?php
			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

