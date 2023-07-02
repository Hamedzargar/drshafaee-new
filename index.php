<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drshafaee
 */

get_header();
?>
	<main id="primary" class="site-main mainView">
		<div class="generalHeading bigHeading highMargined centeredText bottomBorder">
			<h1>مجله دکتر شفائی</h1>
			<span>آخرین اخبار و به روزترین دانستنی های سلامت و زیبایی</span>
		</div>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text">بلاگ کلینیک دکتر شفائی</h1>
				</header>
				<?php
			endif;
			echo '<div class="archiveParent">';
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

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
