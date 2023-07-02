<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drshafaee
 */

?>
<a href="<?php echo esc_url(get_permalink()) ?>" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" id="post-<?php the_ID(); ?>" <?php post_class('lightBorder highRadius mediumMargined'); ?>>
	<div class="archiveCardImg"><?php the_post_thumbnail() ?></div>
	<header class="entry-header">
		<?php if ( is_home() && ! is_front_page() ){ ?>
			<h2 class="entry-title"><?php echo get_the_title() ?></h2>
		<?php } else{ ?>
			<h3 class="entry-title"><?php echo get_the_title() ?></h3>
		<?php } ?>
	</header><!-- .entry-header -->
	<?php the_excerpt(); ?>
	<div class="archivePostFooter mediumPadding">
		<span><svg height="18" width="18" fill="#28416e" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 368 368" xml:space="preserve"><path d="M184 60c4.4 0 8-3.6 8-8v-4c0-4.4-3.6-8-8-8s-8 3.6-8 8v4c0 4.4 3.6 8 8 8zm0 248c-4.4 0-8 3.6-8 8v4c0 4.4 3.6 8 8 8s8-3.6 8-8v-4c0-4.4-3.6-8-8-8zM52 176h-4c-4.4 0-8 3.6-8 8s3.6 8 8 8h4c4.4 0 8-3.6 8-8s-3.6-8-8-8zm268 0h-4c-4.4 0-8 3.6-8 8s3.6 8 8 8h4c4.4 0 8-3.6 8-8s-3.6-8-8-8zM93.6 82.4c-3.2-3.2-8-3.2-11.2 0-3.2 3.2-3.2 8 0 11.2l2.8 2.8c1.6 1.6 3.6 2.4 5.6 2.4s4-.8 5.6-2.4c3.2-3.2 3.2-8 0-11.2l-2.8-2.8zm-8.4 189.2-2.8 2.8c-3.2 3.2-3.2 8 0 11.2C84 287.2 86 288 88 288s4-.8 5.6-2.4l2.8-2.8c3.2-3.2 3.2-8 0-11.2s-8-3.2-11.2 0zM274.4 82.4l-2.8 2.8c-3.2 3.2-3.2 8 0 11.2 1.6 1.6 3.6 2.4 5.6 2.4s4-.8 5.6-2.4l2.8-2.8c3.2-3.2 3.2-8 0-11.2-3.2-3.2-8-3.2-11.2 0zM192 180.8V108c0-4.4-3.6-8-8-8s-8 3.6-8 8v76c0 2 .8 4 2.4 5.6l87.6 87.6c1.6 1.6 3.6 2.4 5.6 2.4s4-.8 5.6-2.4c3.2-3.2 3.2-8 0-11.2L192 180.8z"/><path d="M184 0C82.4 0 0 82.4 0 184s82.4 184 184 184 184-82.4 184-184S285.6 0 184 0zm0 352c-92.8 0-168-75.2-168-168S91.2 16 184 16s168 75.2 168 168-75.2 168-168 168z"/></svg><?php echo get_the_date() ?></span>
		<span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#28416e" viewBox="0 0 1707 1707" style="enable-background:new 0 0 512 512" xml:space="preserve" fill-rule="evenodd"><path d="M381 1472c-46 0-82-13-108-38-56-57-51-165 16-313 2-4 6-8 10-10l149-65-77-33c-5-3-9-7-11-13-2-5-1-11 2-16 93-154 225-318 382-475 130-130 269-246 400-334 5-3 11-4 17-3 5 2 10 6 12 12l17 38 44-99c2-4 4-7 8-10C1370 39 1480 0 1560 0c47 0 83 13 108 38 64 64 48 197-46 374-90 171-240 367-424 551-13 12-25 25-38 37-1 1-3 3-6 4l-138 60 22 10c6 3 11 8 12 15s-2 14-7 18c-258 225-512 365-662 365zm-58-327c-56 126-64 218-22 260 18 18 45 27 80 27 137 0 369-127 612-334l-35-15c-7-4-12-11-12-19s5-15 12-18l177-78c12-11 23-22 34-33 182-182 330-374 418-541 83-159 103-278 53-327-18-18-44-27-80-27-72 0-173 36-292 105l-59 135c-4 7-11 12-19 12s-15-5-18-12l-26-58c-123 85-252 193-374 315-148 149-273 303-364 448l98 43c7 3 12 10 12 18s-5 15-12 18z" data-original="#000000"/><path d="M20 1707c-5 0-10-2-14-6-8-8-8-21 0-29l267-267c8-7 21-7 28 0 8 8 8 21 0 29L34 1701c-4 4-9 6-14 6z" data-original="#000000"/><path d="M287 1440c-5 0-10-2-14-6-8-8-8-21 0-29L1640 38c8-7 21-7 28 0 8 8 8 21 0 29L301 1434c-4 4-9 6-14 6zm1375 267H20c-11 0-20-9-20-20s9-20 20-20h1642c11 0 20 9 20 20s-9 20-20 20z" data-original="#000000"/></svg><?php echo get_the_author() ?></span>
	</div>
</a><!-- #post-<?php the_ID(); ?> -->