<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drshafaee
 */

?>

<a href="<?php echo esc_url(get_permalink()) ?>" id="post-<?php the_ID(); ?>" <?php post_class('blogCardItem'); ?> data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
	<?php the_post_thumbnail() ?>
	<div class="blogCardHeader">
		<div class="blogCardHeaderItem">
			<svg fill="#707070" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 22"><g fill="none" fill-rule="evenodd" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(1 1)"><rect width="18" height="18" y="2" rx="2"/><path d="M13 0v4M5 0v4M0 8h18"/></g></svg>
			<span><?php echo get_the_date() ?></span>
		</div>
		<div class="blogCardHeaderItem">
			<?php get_post_primary_category(); ?>
		</div>
	</div>
	<?php if ( is_home() && ! is_front_page() ){ ?>
		<h2><?php echo get_the_title() ?></h2>
	<?php } else{ ?>
		<h3><?php echo get_the_title() ?></h3>
	<?php } ?>
	<?php echo the_excerpt() ?>
	<div class="blogCardFooter">
		<div class="blogCardFooterItem authorPart">
			<svg  width="25" height="25" fill="#707070" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 32 32"><path d="M11.575 15.664C5.453 17.554 1 23.261 1 30a1 1 0 0 0 2 0c0-7.175 5.825-13 13-13s13 5.825 13 13a1 1 0 0 0 2 0c0-6.739-4.453-12.446-10.575-14.336A7.994 7.994 0 0 0 24 9c0-4.415-3.585-8-8-8S8 4.585 8 9a7.994 7.994 0 0 0 3.575 6.664ZM16 3c3.311 0 6 2.689 6 6s-2.689 6-6 6-6-2.689-6-6 2.689-6 6-6Z"/></svg>
			<span><?php echo get_the_author() ?></span>
		</div>
		<div class="blogCardFooterItem arrowPart">
			<svg width="25" height="25" fill="#fff" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 169.2 394"><path d="M45.7,197,165.3,32.3a20.4,20.4,0,0,0-33-23.9L5.8,182.5a21,21,0,0,0,0,29L132.3,385.6a20.7,20.7,0,0,0,18.2,8.4,21.4,21.4,0,0,0,10.3-3.9,20.3,20.3,0,0,0,4.5-28.4Z"/></svg>
		</div>
	</div>

</a><!-- #post-<?php the_ID(); ?> -->