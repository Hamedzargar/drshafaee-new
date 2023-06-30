<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drshafaee
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="mainHeaderBack">
		<div class="mainHeader mainView">
			<div class="logoSection">
				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 450.4 129"><path d="M450.4 91.2c-.1 0-.3-.1-.4 0a5.8 5.8 0 0 1-1.8.8h-1a37.7 37.7 0 0 0 .4-5.8v-3.4a15.5 15.5 0 0 0 1.2-4.2 36.9 36.9 0 0 0 .8-4.6c0-.2 0-.3-.1-.3a.2.2 0 0 0-.3 0l-1.6 1.4V42.7a42.7 42.7 0 0 0-85.4 0v32.7l-.7-.6h-.3l-.2.2a36.2 36.2 0 0 0 .6 4.6 20.2 20.2 0 0 0 .6 3.4v3.3a42.7 42.7 0 0 0 77.6 24.5h.2a.2.2 0 0 0 .2-.2v-.2a42.4 42.4 0 0 0 6.6-15.1 13 13 0 0 0 3.7-3.7v-.4Zm-11.1 19.2h-2.8l-1.9-.3-1-.3a8.4 8.4 0 0 1-2.7-1.3l-.9-.5a11.1 11.1 0 0 1 4.8-.1l1.2.4 1.5.7 1.5.9ZM367.4 88c.9 1.4 1.7 2.4 2.4 3.3a7.6 7.6 0 0 1 1.1 1.4l-1.7-.7a8.3 8.3 0 0 0-2.2-.3c-.2-1.2-.3-2.5-.4-3.7Zm8.1 6.3c.4-.5.7-.7 3.4-2.1l2.4-1.2-1.1 1.9-.3.6a19 19 0 0 1-2.6 3.7l-2.3 1.4a5.4 5.4 0 0 1 .5-4.3Zm-.2 7.1-1.5-1.3a9.3 9.3 0 0 1-1.8-1.6 15.4 15.4 0 0 1-2.1-2.9h-.1l2.2-1.3c0 .1.1.1.1.2l.3.6h.1a7.5 7.5 0 0 0 .7 1.2 45.5 45.5 0 0 1 2.1 5.1Zm-7.5-5.8c-.3-1.1-.6-2.3-.8-3.4a6.4 6.4 0 0 1 2 .3 5.1 5.1 0 0 1 2.6 1.4 10.5 10.5 0 0 1-2.3 1.3Zm2 1a13 13 0 0 0 1.8 2.3 9.5 9.5 0 0 0 1.9 1.6 12.1 12.1 0 0 1 1.6 1.6 10.1 10.1 0 0 1 .7 1.5 14.9 14.9 0 0 1 .2 2.1l-.8-.5-1.7-.7h-.3c-1.5-.7-2.4-2.7-2.8-3.6a10.4 10.4 0 0 1-.6-4.3Zm2.3-5.4a6.9 6.9 0 0 1 .5-2.4 9.1 9.1 0 0 1 1.1-1.6l.8-1a7.9 7.9 0 0 0 .8-2.6 13.4 13.4 0 0 1 .5 3.5c.1 1.6.1 2.5-.5 3.4a3.9 3.9 0 0 1-.8 1 10.9 10.9 0 0 0-1.3 1.7l-.6 1.1a6.5 6.5 0 0 1-.5-3.1Zm-2.7 4.6a10.3 10.3 0 0 0 .5 5.2c.5 1 1.3 3.2 3.1 3.9h.3l1.6.7 1.1.6a6.8 6.8 0 0 1-.2 2 3.1 3.1 0 0 1-.3 1.3l-.3.8a40 40 0 0 1-7.3-14.2Zm6.6 14a16.2 16.2 0 0 1 1-1.8 5.7 5.7 0 0 0 3.1 1h.9a4.7 4.7 0 0 0 3.1-2c.1 0 .1-.1.1-.2a.2.2 0 0 0-.2-.2 11 11 0 0 0-3.6-.3 8.6 8.6 0 0 0-2.3.6h.1a8.6 8.6 0 0 1 2-1.3l2-1.4a9.8 9.8 0 0 0 3-4.7c.1-.1.1-.2 0-.2h-.3a8.7 8.7 0 0 0-2.7 1.4 7.5 7.5 0 0 0-2.5 2.2 8.8 8.8 0 0 0-1.7 3.5l-.2.2-.9 1c-.1 0-.1 0-.1.1-.1 0-.1.1-.2.2s-.1.2-.1.3.1-1 .1-1.5a6.7 6.7 0 0 0-.3-2.8 21.3 21.3 0 0 0-1.3-4.3 13.5 13.5 0 0 0 2.6-1.5c.9-.8 1.3-1.5 2.7-3.9l.3-.5c.8-1.2 1.3-2.2 1.7-2.7a.4.4 0 0 0-.1-.3h-.3l-3.2 1.6c-2.7 1.4-3.2 1.7-3.6 2.3a4.7 4.7 0 0 0-.9 3.3 5.4 5.4 0 0 0-.5-1.1c-.3-.5-.5-1-.8-1.4l.7-1.3a10.1 10.1 0 0 1 1.3-1.6l.9-1.1a7.8 7.8 0 0 0 .6-3.7 15.6 15.6 0 0 0-1.1-5.2l-.3-.2c-.2.1-.2.2-.2.3a6.6 6.6 0 0 1-.8 3.9 6.1 6.1 0 0 1-.7 1 6.6 6.6 0 0 0-1.2 1.7 10.2 10.2 0 0 0-.6 2.5 9.7 9.7 0 0 0 .1 1.7 13.3 13.3 0 0 0-1.4-1.9c-.6-.8-1.4-1.8-2.3-3.2 1-.8.9-3.4.4-5a7.9 7.9 0 0 0-1.8-2.9v-9.3l1.8.4h.6a8.6 8.6 0 0 0 2.7-.5h1.7l.2.2a18.2 18.2 0 0 0 5.1 3.6c.4 2.1.9 4.4 1.6 6.9 2 7.3 3.1 9.4 3.7 10.3a22.7 22.7 0 0 0 3.9 4.3 44.1 44.1 0 0 1-2.6 10.1 43.6 43.6 0 0 1-4.9 9 39.2 39.2 0 0 1-4.6-4.5Zm4.4-3a10.1 10.1 0 0 1 3 .1 4.1 4.1 0 0 1-2.5 1.5 4.8 4.8 0 0 1-3.5-.8 11.1 11.1 0 0 1 3-.8Zm-1.7-1.2a8.7 8.7 0 0 1 1.4-2.7 6.9 6.9 0 0 1 2.4-2.1l2-1.1a9.3 9.3 0 0 1-2.6 3.9l-2 1.3Zm64.6-27c-1.7 1.4-2.3 1.9-2.8 3a6.8 6.8 0 0 0 .2 5.4 11.4 11.4 0 0 0-1 1.9c-.5 1-1 2-1.4 3a7.9 7.9 0 0 0-.5-3l-1.2-1.8-1-1.2a14.9 14.9 0 0 1-1.8-3 .8.8 0 0 0-.3-.9h-.5a.7.7 0 0 0-.6.3c-2.7 4.1-5.5 8-8.5 11.7a66.8 66.8 0 0 1-6.6 7.5c-3.7 3.5-5.4 4.4-6.7 4.9a12 12 0 0 1-7 .3c-.5-.2-1.2-.4-5.5-3.7-2.5-1.9-3.7-2.9-5.6-4.5-3.8-3.5-5.8-5.2-7.2-7.3s-2.1-4.6-3.6-9.8a88.6 88.6 0 0 1-2.6-16.1 142.7 142.7 0 0 1-.7-14.6 65.3 65.3 0 0 1 7.5-3.7c4.7-2 6-2.1 6.9-1.9a8.3 8.3 0 0 1 5.4 3.1c.8 1.1 1 2.2 1.4 4.2a41.8 41.8 0 0 1-.2 10.6c-.1 1.1-.2 1.8-.3 2.5a16.5 16.5 0 0 0-.4 3.1c-.4 6.1.3 7.6 1.2 8.2s1.1.5 2.7.4l2.6-.2v.3c.1 1.6.3 2.8.4 3.7v.4a4.1 4.1 0 0 0-2.8-1.3c-1.2 0-2.2.6-4.5 2.8l-4.1 4.1a1 1 0 0 0-.1.9.7.7 0 0 0 .7.4l12.3-.4 7.7-.3a12.4 12.4 0 0 1-1.8 2.2c-3.1 2.7-7.1 2.5-8.6 2.4a14.8 14.8 0 0 1-6.5-1.9.8.8 0 0 0-.8 1.4 16.8 16.8 0 0 0 7.2 2.2c1.7 0 6.2.3 9.8-2.9a10.9 10.9 0 0 0 2.7-4c.2-.2.1-.5 0-.7a1 1 0 0 0-.7-.4l-9.1.4-10.2.4a37 37 0 0 1 2.8-2.8c2.1-2 2.7-2.3 3.3-2.3a2.9 2.9 0 0 1 1.9 1.1c.6.5 1.2 1.1 2 .7s.6-1.4.4-2.7a36 36 0 0 1-.4-3.6v-.3h.5c2.7-.1 3.9-.2 4.7-1.3a3 3 0 0 0 .4-2.9 3.1 3.1 0 0 0-2.3-2c-1.9-.4-3.6 1-4.4 2.5a5.4 5.4 0 0 0-.5 2.2h-.1l-2.7.2c-1.3.1-1.4.1-1.6-.1s-.9-1-.5-6.8c.1-1.4.3-2.1.4-3s.2-1.4.3-2.5a37.5 37.5 0 0 0 .1-11.1c-.3-2-.5-3.3-1.6-4.8a10 10 0 0 0-6.5-3.8c-1.2-.2-2.7-.2-7.8 2a85.2 85.2 0 0 0-8 4 .7.7 0 0 0-.4.7 130.6 130.6 0 0 0 .7 15.3c.2 2.9.5 5.7 1 8.7a15 15 0 0 1-4.6-3.3 15.1 15.1 0 0 1-3.7-6.2c0-.1 0-.2-.1-.2v-.2a23.3 23.3 0 0 1-.7-2.5c-.2-.6-.3-1.2-.5-1.8a10.8 10.8 0 0 0 2.1-3.4 11 11 0 0 0 .4-5.4c0-.1-.1-.1-.2-.2s-.2 0-.2.1a6.6 6.6 0 0 0-2.1 2.3 8.3 8.3 0 0 0-.8 5.1 8.4 8.4 0 0 0-1.5-1.8h-.1V43a38.4 38.4 0 0 1 76.8 0Zm-6.8 17.3h-.1a19 19 0 0 1-13.3 11.7l.6-1.6 2-4.7c.4-1.1.8-2.1 2.3-5.5s3.1-6.9 4.7-10.3v.8c0 2.8.1 5 1.7 6.4a4.6 4.6 0 0 0 3 1.1Zm-1.4-9.7 1.1 1.3a9.1 9.1 0 0 1 1.1 1.6 7.5 7.5 0 0 1 .3 4.2 4.3 4.3 0 0 1-2.9-1c-1.4-1.2-1.4-3.2-1.5-6v-2.1a4.9 4.9 0 0 0 .1-1.2l.3.5a11.7 11.7 0 0 0 1.5 2.7Zm-28.3-11c.1-.9.2-1.2.3-1.3a3.4 3.4 0 0 1 2.4-1.8c.1 0 .2 0 .2.1a1.4 1.4 0 0 1 1 2.3c-.3.5-1.1.6-3.5.7Zm-40.3-15.9a13.7 13.7 0 0 0 2 1.3l.3 1.3a5.7 5.7 0 0 1 .4 1.4 4.2 4.2 0 0 0-1.6-.9 2 2 0 0 0-1.1-.2Zm2.8-5.7a7.4 7.4 0 0 1 1.6-1.9 10.3 10.3 0 0 1-.4 4.6 11.1 11.1 0 0 1-1.7 3 8 8 0 0 1 .5-5.7Zm-2.8 3.6a15.1 15.1 0 0 1 1.8 2.6c.1 0 .1 0 .1.1a8 8 0 0 1-1.9-1.3l-.7-.7-.9-1.3a6.1 6.1 0 0 1-.7-1.4 1.8 1.8 0 0 1 .7.5l1.3 1.2Zm0 5.5.9.2a3.5 3.5 0 0 1 2 1.4 5 5 0 0 1-2.4-.3l-.5-.3-1.2-.9a2.5 2.5 0 0 1 1.2-.1Zm.4 1.8a4.5 4.5 0 0 0 2 .4h.8a17.8 17.8 0 0 0 3.2 5.7 2 2 0 0 1-1.3-.1c-.6-.1-.9-.5-1.2-.6s-2.1-.8-3.9-.5v-5.1Zm-.4 5.3c1.7-.3 2.9-.2 3.5.3h.1l.7.5a5.4 5.4 0 0 1-2.5.3l-1.8-.5-.8-.5Zm20.2 37.1a42.6 42.6 0 0 0 2.5-9.3l2.3 2c1.8 1.6 3.1 2.6 5.7 4.6 4.1 3.2 5 3.6 5.9 3.9a12.2 12.2 0 0 0 8-.3c1.5-.5 3.4-1.5 7.3-5.3a69.7 69.7 0 0 0 6.8-7.6l3.4-4.5-2.1 4.7c-1.5 3.4-1.9 4.5-2.3 5.6a49.3 49.3 0 0 1-2 4.7c0 .1-.9 2.2-3 7.8a24.6 24.6 0 0 0-1.1 4.5 20.6 20.6 0 0 0 .1 4.3 37.7 37.7 0 0 1-13.3 2.4 38.6 38.6 0 0 1-23.4-7.9 44.6 44.6 0 0 0 5.2-9.6Zm33.1 14.5a13.7 13.7 0 0 1-.1-3.5 14.6 14.6 0 0 1 1.1-4.1c.8-2.5 1.5-4.3 2-5.5a8.6 8.6 0 0 1 4.2-.5 5.6 5.6 0 0 0 .6 3.4 5.9 5.9 0 0 0 3.5 2.9 36.6 36.6 0 0 1-11.3 7.3Zm11.7-7.7a5.5 5.5 0 0 1-4-5.7 7.5 7.5 0 0 1 2.5 2.2 6.5 6.5 0 0 1 1.5 3.5Zm.5-.5a9.9 9.9 0 0 0-1.5-3.3 12.1 12.1 0 0 0-1.6-1.6 5.6 5.6 0 0 1 1.7.9 10.2 10.2 0 0 0 2.8 1.3l.8.3Zm2.9-5.6a12.2 12.2 0 0 0-5.7.2l-1.6-.5H426a18.6 18.6 0 0 0 4.9-2.9 21 21 0 0 0 6-8.1 7.1 7.1 0 0 1 2.5-.2l1.5.4.9.3a39.2 39.2 0 0 1-5.4 11.3Zm3.2-14.1 2.1-4.4.9-1.7 2.2-.7a30.7 30.7 0 0 1-.5 5.3 9.2 9.2 0 0 0-3.3 1.1l-1.8 1.3a3.6 3.6 0 0 0 .4-.9Zm6.8-7.5a10.7 10.7 0 0 0 1.6-1.4v1.8a37.7 37.7 0 0 1-.4 5.8h-1.6a43 43 0 0 0 .4-6.2Zm3.4-7.6c-.3 1.1-.5 2-.7 2.8a6.6 6.6 0 0 1-1.1 2.4c0 .1 0 .1-.1.1a5.4 5.4 0 0 1-1.5 1.5 5.1 5.1 0 0 1-1.6.9l-1.9.7a37.2 37.2 0 0 1 1.9-3.4l1.6-2.6 1.6-2.4 1.1-1.5 1.3-1.7a18 18 0 0 1-.6 3.2Zm-.1-3.1-.6.7-1.1 1.5-1.6 2.3-1.6 2.6c-.8 1.3-1.6 2.6-2.3 3.9a5.9 5.9 0 0 1 0-4.5 6.1 6.1 0 0 1 2.3-2.5l.8-.6.6-.5.2-.2 1.6-1.3 1.1-.9Zm-84.9-32.6a41.6 41.6 0 0 1 83.2 0V76l-1.6 1.3V43a40 40 0 0 0-80 0v12l-1-.7h-.3c-.1.1-.2.2-.1.3a10.3 10.3 0 0 0 1.4 3v4.7h-.4a.4.4 0 0 0 .1.3l.3.4v6.5h-.1a.4.4 0 0 0 .1.3V78l-1.6-1.6Zm-1.1 33.4 1.1 1 1.6 1.6 1.6 1.8a7.6 7.6 0 0 1 1.3 2.3 9.1 9.1 0 0 1 .3 2.3 3.8 3.8 0 0 1-.5 2.1l-1.1-1.6-1.6-2.9-1.6-3.3-1.1-2.7-.3-1Zm-.1 3.4-.3-2.4c.1.4.3.8.4 1.2a21.5 21.5 0 0 0 1.1 2.5l1.6 3.2c.5.9 1.1 1.8 1.7 2.7a2.2 2.2 0 0 0 .5.8h-.5a4.2 4.2 0 0 1-1.7-1 4.9 4.9 0 0 1-1.2-1.3l-.4-.6a14.6 14.6 0 0 1-1.1-4.1c0-.4-.1-.7-.1-1Zm42.8 48.4a41.6 41.6 0 0 1-41.6-41.6v-.8a12.9 12.9 0 0 0 1.6 1.7 40.1 40.1 0 0 0 71.2 23.9h2.3a41.7 41.7 0 0 1-33.5 16.8Zm34.4-18.2-1.4-1a47.9 47.9 0 0 0 5.6-11.9 6.4 6.4 0 0 0 1.9-.8 41.1 41.1 0 0 1-6.1 13.7Zm7.5-15.1-1.1.6h-.2a6.6 6.6 0 0 1-1.9.9h-1.7l-.8-.3-1.7-.4h-.7l-1.3.2a9.1 9.1 0 0 1 2.4-2 6.4 6.4 0 0 1 3-1.1h4.3l1.2-.2 1-.3a15.4 15.4 0 0 1-2.5 2.6Z" fill="#2c62d6"/><path d="M11.9 47.8a12 12 0 0 0 5.7.1l3.2-1a13.4 13.4 0 0 0 2.4-1.2 3.9 3.9 0 0 0 1.6-2 5.6 5.6 0 0 0 .3-2.7 3.8 3.8 0 0 0-.6-1.3 14.2 14.2 0 0 0 2.9.2h5.3a7.5 7.5 0 0 0 2.6-.5 5.7 5.7 0 0 0 2.1-1.3 4.2 4.2 0 0 0 1.1-2.1 7.6 7.6 0 0 0-.2-3.3L37 27.6l-2 .5 1.4 5c.4 1.7.3 2.9-.4 3.6a4.9 4.9 0 0 1-3.3 1.1h-6.6l-1.5-.2-1.7-.4-1.6-.4-1.7-.5-1.7-.5-.6 2 .7.3.7.2c2.7 1 4.2 1.9 4.4 2.9a2.5 2.5 0 0 1-1.2 3 16.9 16.9 0 0 1-4.8 1.6c-3.5.8-6 .1-7.3-2.2s-1.3-5.7.2-10l-1.9-.7a17.9 17.9 0 0 0-1.2 6.9A11.7 11.7 0 0 0 8.3 45a6.5 6.5 0 0 0 3.6 2.8Zm15.8-3.082 1.767-1.768 1.768 1.768-1.768 1.768zm5.489.012 1.768-1.768 1.767 1.768-1.767 1.768zM53.5 44.6l-2-2-2 2 2 2 2-2zm5.9-4.6h5.3a7.1 7.1 0 0 0 2.6-.5 5.7 5.7 0 0 0 2.1-1.3 3.6 3.6 0 0 0 1.1-2.2 7.6 7.6 0 0 0-.2-3.3L69 27.6l-1.9.5 1.3 5c.4 1.7.3 2.9-.4 3.6a4.9 4.9 0 0 1-3.3 1.1h-5a3.3 3.3 0 0 1-2.4-.7 3.8 3.8 0 0 1-.9-2.4l-.4-4.1h-1.9l.4 4.2a2.6 2.6 0 0 1-.8 2.2 3.6 3.6 0 0 1-2.5.7h-2.1c-1.5 0-2.5-.3-2.9-.8s-.7-1.6-.8-3.3l-.6-15.5h-1.9l.6 15.4c.1 2.3.5 4 1.3 4.9S47 40 49.1 40h2.1a5.1 5.1 0 0 0 4.3-1.8 4.5 4.5 0 0 0 3.9 1.7Zm.327 4.791 1.767-1.768 1.768 1.768-1.768 1.768zm5.489.011 1.768-1.768 1.768 1.768-1.768 1.768zM80.5 25.1l-1.9-2-2 2 2 1.9 1.9-1.9zm-4.1 22.4 2.7-1.4a4.8 4.8 0 0 0 2-2.5 6.6 6.6 0 0 0 .2-3.5L80 30.4l-1.9.3 1.3 9.7c0 .3.1.6.1.9A4 4 0 0 1 77 45a37.8 37.8 0 0 1-4.7 1.5l.5 2.1Zm63.3-9.3A3.5 3.5 0 0 0 143 40h10.1a6 6 0 0 0 3.9-1.5 6.4 6.4 0 0 0 4 1.5h.5a33.5 33.5 0 0 0 9.3-1.5l6.2-2a4.5 4.5 0 0 0 1.8 2.5 5.4 5.4 0 0 0 3 1h6.6a7.5 7.5 0 0 0 2.6-.5 6.7 6.7 0 0 0 2.1-1.3 4.2 4.2 0 0 0 1.1-2.2 7.6 7.6 0 0 0-.2-3.3l-1.4-5.1-1.9.5 1.3 5a6.5 6.5 0 0 1 .2 2.3 1.7 1.7 0 0 1-.7 1.4 3.9 3.9 0 0 1-1.4.8l-1.7.2h-6.6a3.5 3.5 0 0 1-1.8-.5 3.6 3.6 0 0 1-1.1-1.4l1.8-.6.3-2.5-8.7-4.8a5.6 5.6 0 0 0-4.7-.6 6.6 6.6 0 0 0-3.8 3.1l-.6 1.2 1.7 1 .6-1.1a5 5 0 0 1 2.6-2.2 4.3 4.3 0 0 1 3.3.5l7.3 3.9-8.4 2.6a31.3 31.3 0 0 1-9 1.4h-.3a3.8 3.8 0 0 1-2.7-1 5.4 5.4 0 0 0 .6-2.5 6 6 0 0 0-1.7-4.3 5.6 5.6 0 0 0-6.2-1.4 5.4 5.4 0 0 0-1.9 1.3l-1.7 1.9-1.8 2.6-2.5 3.4h-.1a2 2 0 0 1-1.7-.8 3.3 3.3 0 0 1-.4-2.1l.4-4.2h-1.9l-.4 4.1c-.2 2-1.5 3.1-3.8 3.1h-.3a4 4 0 0 1-2.8-1 5.4 5.4 0 0 0 .6-2.5 5.9 5.9 0 0 0-1.6-4.3 5.4 5.4 0 0 0-4.1-1.8 4.6 4.6 0 0 0-2.1.4 5.7 5.7 0 0 0-2 1.3 23.1 23.1 0 0 0-1.6 1.9 30.2 30.2 0 0 0-1.9 2.6l-2.5 3.4h-.1a1.8 1.8 0 0 1-1.6-.8 2.8 2.8 0 0 1-.4-2.1l.3-4.2h-1.9l-.4 4.1c-.2 2-1.4 3-3.7 3.1h-1.5l-1.5-.2-1.7-.4-1.6-.4-1.7-.5-1.7-.5-.6 2 .7.3.7.2c2.7 1 4.2 1.9 4.4 2.9a2.5 2.5 0 0 1-1.2 3 16.9 16.9 0 0 1-4.8 1.6c-3.5.8-6 .1-7.3-2.2s-1.3-5.7.2-10l-1.9-.7a17.9 17.9 0 0 0-1.2 6.9 11.7 11.7 0 0 0 1.3 5.2 7.1 7.1 0 0 0 3.7 2.9 12 12 0 0 0 5.7.1l3.2-1a13.4 13.4 0 0 0 2.4-1.2 3.9 3.9 0 0 0 1.6-2 4.7 4.7 0 0 0 .2-2.7 1.9 1.9 0 0 0-.6-1.3 14.6 14.6 0 0 0 2.9.2h.4a5.9 5.9 0 0 0 4.3-1.8 3.7 3.7 0 0 0 3.3 1.8H127a5.5 5.5 0 0 0 3.8-1.5 6.5 6.5 0 0 0 4.1 1.5h.4a6.2 6.2 0 0 0 4.4-2Zm7.5-2.6a31 31 0 0 1 3.2-4.1 4 4 0 0 1 2.7-1.1 3.7 3.7 0 0 1 2.7 1.1 3.6 3.6 0 0 1 1.1 2.8 3.4 3.4 0 0 1-1.1 2.4 4 4 0 0 1-2.7 1.1h-7.5Zm-17.6 1.1a3.8 3.8 0 0 1-2.6 1.1h-7.6l1.6-2.2a42.9 42.9 0 0 1 3.2-4.1 4.1 4.1 0 0 1 2.8-1.1 3.9 3.9 0 0 1 2.7 1.1 3.9 3.9 0 0 1 1.1 2.8 3.1 3.1 0 0 1-1.2 2.4Zm41.5-14.1-1.9-2-2 2 2 2 1.9-2zm24.1.5-1.7-1.8-1.8 1.8 1.8 1.8 1.7-1.8zm-5.5 0-1.8-1.8-1.7 1.8 1.7 1.8 1.8-1.8zm19.078.542 1.767-1.768 1.768 1.768-1.768 1.767zm5.489.011 1.768-1.768 1.768 1.768-1.768 1.767zM219.9 43.1a7.9 7.9 0 0 0 .2-3.2l-.6-5.3a8.1 8.1 0 0 0-1.9-4.9 5.2 5.2 0 0 0-4.2-1.7 5 5 0 0 0-4 2.2 6.8 6.8 0 0 0-1.2 4.6 5.5 5.5 0 0 0 1.6 3.6 5.2 5.2 0 0 0 3.6 1.4 24.9 24.9 0 0 0 4.6-.5v1.3a4.1 4.1 0 0 1-.2 2 2.9 2.9 0 0 1-1.3 1.4 7.2 7.2 0 0 1-2 .9l-3.1.8c-3.6.8-6 .1-7.4-2.2s-1.3-5.7.3-10l-1.9-.7a16.4 16.4 0 0 0-1.3 6.9 11.7 11.7 0 0 0 1.4 5.2 6.4 6.4 0 0 0 3.7 2.9 11.6 11.6 0 0 0 5.6.1 28.5 28.5 0 0 0 4-1.2 7.2 7.2 0 0 0 2.6-1.4 4 4 0 0 0 1.5-2.2Zm-6.5-5.5a3.6 3.6 0 0 1-2.3-.8 3.2 3.2 0 0 1-1-2.2 5.2 5.2 0 0 1 .8-3 3 3 0 0 1 2.6-1.4 3.2 3.2 0 0 1 2.8 1.2 6.6 6.6 0 0 1 1.3 3.5l.2 2.2a22 22 0 0 1-4.4.5Zm16 2.4h4.7v.3a4.2 4.2 0 0 1 0 1.6 3.2 3.2 0 0 1-2.1 2.7 59.9 59.9 0 0 1-7.1 1.8l.4 2.2c4.5-1 7.4-1.9 8.9-2.9s2.2-2.9 1.9-5.6h8.4a12.8 12.8 0 0 0 4.5-.6 2.9 2.9 0 0 0 1.9-1.8 8.7 8.7 0 0 0 .2-3.4l-.4-4.2a7.2 7.2 0 0 0-1.9-4.7 4.9 4.9 0 0 0-4.1-1.6 4.7 4.7 0 0 0-3.8 2 7.7 7.7 0 0 0-1.3 4.5 5 5 0 0 0 1.5 3.5 5.2 5.2 0 0 0 3.7 1.3 27.6 27.6 0 0 0 4.4-.3 3.6 3.6 0 0 1-.1 1.9 1.9 1.9 0 0 1-1.3.9 12.1 12.1 0 0 1-3.3.3h-8.7l-.3-3a8.1 8.1 0 0 0-2-4.9 5.2 5.2 0 0 0-8.1.5 6.9 6.9 0 0 0-1.3 4.6 5.5 5.5 0 0 0 1.6 3.6 5.1 5.1 0 0 0 3.7 1.3Zm15.4-7a3.2 3.2 0 0 1-2.4-.8 3 3 0 0 1-1-2.2 4.7 4.7 0 0 1 .8-2.9 3.4 3.4 0 0 1 2.6-1.5 3.4 3.4 0 0 1 2.7 1.2 5.6 5.6 0 0 1 1.3 3.4l.2 2.4a18.2 18.2 0 0 1-4.2.4Zm-17.9-1.2a2.9 2.9 0 0 1 2.6-1.4 3.1 3.1 0 0 1 2.7 1.1 5.9 5.9 0 0 1 1.3 3.5l.3 2.8h-4.4q-3.2 0-3.3-3a4.6 4.6 0 0 1 .8-3ZM247 18.9l-2-2.1-2 2.1 2 1.9 2-1.9zM278.2 40a4.1 4.1 0 0 0 3.1-1.2 3.7 3.7 0 0 0 1.2-2c1.7 2.1 3.5 3.2 5.5 3.2h5a5.1 5.1 0 0 0 4.3-1.8 4.5 4.5 0 0 0 3.9 1.7h2.1a5.4 5.4 0 0 0 4.4-1.8 4.5 4.5 0 0 0 3.8 1.7h4.8a5.2 5.2 0 0 0 4.4-1.8 4.5 4.5 0 0 0 3.8 1.7h.8a4.9 4.9 0 0 0 4.4-2.1 4.9 4.9 0 0 0 4.2 2.1h7a4.5 4.5 0 0 0 4.6-4 5.5 5.5 0 0 0-.9-3.4l-6.5-9.3 10.8-3.9-.7-2.1-12.1 4.5-.5 1.6 7.5 10.9a1.9 1.9 0 0 1 .3 1.8 2.1 2.1 0 0 1-1 1.6 2 2 0 0 1-1.4.4h-7.1a3.6 3.6 0 0 1-2.3-.8 3.1 3.1 0 0 1-1-2.5l-.7-16.3H328l.6 16.5a3.1 3.1 0 0 1-.6 2.1 3.4 3.4 0 0 1-2.7.9h-.4a3.3 3.3 0 0 1-2.4-.7 3.8 3.8 0 0 1-.9-2.4l-.4-4.1h-1.9l.3 4.2a2.2 2.2 0 0 1-.7 2.1 3.7 3.7 0 0 1-2.6.7h-4.5a3.3 3.3 0 0 1-2.4-.7 3.8 3.8 0 0 1-.9-2.4l-.3-4.1h-2l.4 4.2a2.6 2.6 0 0 1-.7 2.2 3.8 3.8 0 0 1-2.6.7h-1.8a3.3 3.3 0 0 1-2.4-.7 3.8 3.8 0 0 1-.9-2.4l-.4-4.1h-1.9l.3 4.2a2.2 2.2 0 0 1-.7 2.1 3.6 3.6 0 0 1-2.5.7h-5a4.5 4.5 0 0 1-2.9-1A20.3 20.3 0 0 1 282 33c-.1-.1-.1-.2-.2-.4l-6.5-9.3 10.7-3.9-.7-2.1-12 4.5-.5 1.6 7.5 10.6a2.3 2.3 0 0 1 .4 1.8 2.6 2.6 0 0 1-1.1 1.6 2.1 2.1 0 0 1-1.4.4h-12.5l-2.6-.2-1.2-.4a3.4 3.4 0 0 1-1.6-1.5 4.7 4.7 0 0 1 .1-2.6l1.2-4.8-1.9-.5-1.2 4.7a7.1 7.1 0 0 0 0 4.1 4.4 4.4 0 0 0 2.6 2.6 8.3 8.3 0 0 0 3 .7c1.2.1 3.6.2 7.3.2Zm16.356 4.863 1.767-1.768 1.768 1.768-1.768 1.768zm-5.49-.011 1.768-1.768 1.775 1.775-1.768 1.768z" fill="#001b4c"/><path fill="#001b4c" d="m307.6 25.5-2-2-2 2 2 2 2-2zm10.302 19.217 1.767-1.768 1.768 1.768-1.768 1.768zm-5.689-.112 1.768-1.768 1.774 1.775-1.767 1.768zM47.3 79.8l-5.2 1.5 2 7.3c.5 1.9.4 3.2-.4 3.9s-2 1.1-3.8 1.1h-5.5c-1.5-.2-5.3-1.2-11.4-2.9l-1.7 5.7 1.8.6 2.2.7c2 .7 3 1.4 3.2 2.1a3.1 3.1 0 0 1-1.3 3.4c-1.1.7-3.4 1.4-6.8 2.2s-7.7.1-9.4-2.9-1.5-7.3.5-13.1l-5.1-2a31 31 0 0 0-1.7 7.5 22.3 22.3 0 0 0 .2 6.4 16.3 16.3 0 0 0 1.9 5.1 12.3 12.3 0 0 0 3.6 3.6 15.5 15.5 0 0 0 5 1.7 14.9 14.9 0 0 0 6.2-.5c4.5-1 7.7-2.4 9.7-4.2s2.8-4.2 2.5-7.4h6.1c3.5 0 6.2-1.1 8.1-3.4s2.3-5.4 1.3-9.1Zm-2.5-6.9a2.3 2.3 0 0 1-1.8-.2 2.2 2.2 0 0 1-1.1-1.4 2.1 2.1 0 0 1 .4-1.7 2.4 2.4 0 0 1 1.5-1h1.5l1.7.2h.8l.6-2.9-.7-.2-1.7-.1h-1.6a5 5 0 0 0-4.1 1.9 5.4 5.4 0 0 0-.9 4.6 4.1 4.1 0 0 0 .9 2l-3.6.9.7 2.9 7.9-1.9h.2l5.1-1.2-.6-3Zm33.8 1.6 4.1-4.1-4.1-4.2-4.2 4.2 4.2 4.1z"/><path d="m122 79.8-5.1 1.5 2 7.3c.9 3.3-.2 5-3.3 5s-3.4-.9-3.4-2.8v-6.2h-4.9v6.2c-.1 1.9-1.3 2.8-3.7 2.8s-3.3-.9-3.3-2.8v-6.2h-5v6a2.9 2.9 0 0 1-.7 2.2c-.5.6-1.4.8-2.9.8h-6.3a5.3 5.3 0 0 0 1.7-3.2v-2.2a9.9 9.9 0 0 0-2-6.8A9 9 0 0 0 72.4 80a9 9 0 0 0-3.4 6.3l-.3 2.9c-.1 1.3.6 2.7 2 4.3h-5.2c-1.7 0-2.8-.2-3.3-.7s-.6-1.8-.7-3.9l-.9-22.7-5.3.3.8 22.5c.2 3.9 1 6.7 2.4 8.3s3.7 2.3 7 2.3h2.6a29.6 29.6 0 0 0 9.8-1.8 25.5 25.5 0 0 0 9.2 1.8h4.6a7.9 7.9 0 0 0 6.1-2.4 7.8 7.8 0 0 0 5.8 2.4 8.1 8.1 0 0 0 6.1-2.4 7.8 7.8 0 0 0 5.9 2.4 8.5 8.5 0 0 0 7.3-3.5c1.7-2.4 2.1-5.4 1.1-9Zm-40.3 10c-.4.7-1.7 1.5-4 2.2s-3.1-1.6-3.6-2.6v-2.1a3.7 3.7 0 0 1 1.5-2.6 3.9 3.9 0 0 1 2.8-.8 3.9 3.9 0 0 1 3.4 4.2Zm24.9-20.4 3 3.1 3.1-3.1-3.1-3-3 3z" fill="#001b4c"/><path fill="#001b4c" d="m117.9 76.1-3.6-3.7-3.7 3.7 3.7 3.7 3.6-3.7zm-16.6 0 3.7 3.7 3.7-3.7-3.7-3.7-3.7 3.7zm67.1-.2 4.1-4.2-4.1-4.2-4.2 4.2 4.2 4.2zm43 3.9-5.1 1.5 2 7.3c.9 3.3-.2 5-3.3 5s-3.4-.9-3.4-2.8v-6.2h-4.9v6.2c-.1 1.9-1.3 2.8-3.7 2.8s-3.3-.9-3.3-2.8v-6.2h-5v6a2.9 2.9 0 0 1-.7 2.2c-.5.6-1.4.8-2.9.8h-6.3a5.3 5.3 0 0 0 1.7-3.2v-2.2a9.8 9.8 0 0 0-2-6.8 8.4 8.4 0 0 0-5.9-3.4 8.7 8.7 0 0 0-6.8 2 9.2 9.2 0 0 0-3.5 6.3l-.2 2.9c-.2 1.3.5 2.7 2 4.3h-5c-5 0-8.3 0-10-.2a11.9 11.9 0 0 1-3.6-.6 3.2 3.2 0 0 1-1.7-1.5 4.7 4.7 0 0 1 .1-2.6l1.9-7.3-5.2-1.5-1.8 7a10.7 10.7 0 0 0 .2 6.9 8.2 8.2 0 0 0 4.3 4.5 21.2 21.2 0 0 0 4.8 1.1l10.7.2h2.6a29.6 29.6 0 0 0 9.8-1.8 26.3 26.3 0 0 0 9.2 1.8h4.6a7.9 7.9 0 0 0 6.1-2.4 7.8 7.8 0 0 0 5.8 2.4 8.1 8.1 0 0 0 6.1-2.4 7.8 7.8 0 0 0 5.9 2.4 8.5 8.5 0 0 0 7.3-3.5c1.7-2.4 2.1-5.4 1.1-9Zm-40.3 10c-.3.7-1.6 1.5-4 2.2a6.6 6.6 0 0 1-3.6-2.6l.2-2.1a3.3 3.3 0 0 1 1.4-2.6 4.1 4.1 0 0 1 2.9-.8 4 4 0 0 1 3.3 4.2Zm79.5 17 3.7 3.6 3.7-3.6-3.7-3.7-3.7 3.7zm-9.3 0 3.6 3.6 3.8-3.6-3.8-3.7-3.6 3.7z"/><path d="m257.4 79.8-5.1 1.5 1.9 7.3c.5 1.8.4 3.1-.4 3.9a5.4 5.4 0 0 1-3.8 1.1h-11.3l-.4-3.1a13.6 13.6 0 0 0-3.3-8 8.7 8.7 0 0 0-13.6.8 11 11 0 0 0-2.2 7.7 9.7 9.7 0 0 0 2.8 6.3 8.6 8.6 0 0 0 6.2 2.3h5.6a3.6 3.6 0 0 1-1.9 3.9c-1.4.7-4.9 1.6-10.5 2.8l1.1 5.9 6.4-1.6a33.9 33.9 0 0 0 4.8-1.7 9.5 9.5 0 0 0 3.3-2.2 6.4 6.4 0 0 0 1.7-3 10.3 10.3 0 0 0 .5-4.1H250a9.8 9.8 0 0 0 8-3.4c1.9-2.2 2.4-5.2 1.4-8.8Zm-29.2 13.8q-3.4 0-3.6-3a5.3 5.3 0 0 1 .9-3.5 3.8 3.8 0 0 1 6-.1 6.7 6.7 0 0 1 1.4 4.1l.3 2.5Zm60.9-13.3 3.7-3.7-3.7-3.7-3.7 3.7 3.7 3.7zm13-3.7-3.7-3.7-3.7 3.7 3.7 3.7 3.7-3.7z" fill="#001b4c"/><path d="m324.3 63.8-17.6 6.5-1.2 4.5 10.7 15.3a2.8 2.8 0 0 1 .5 1.7 2.2 2.2 0 0 1-.8 1.4 2.9 2.9 0 0 1-1.6.4h-10a4.1 4.1 0 0 1-2.6-.6 3.8 3.8 0 0 1-1-2.3v-.3l-.5-6.1-5.3.6.5 6a2.5 2.5 0 0 1-.7 2.1 5 5 0 0 1-2.9.6h-8a2.1 2.1 0 0 1-2.2-1.3c-.4-.8-.8-3-1.3-6.5l-.2-1.7-5.3.8 2 14v.6a4.2 4.2 0 0 1-2.1 4.4 52.1 52.1 0 0 1-7.4 2.4l1.4 5.8a46 46 0 0 0 5.9-1.9 17.6 17.6 0 0 0 4.2-2.4 8 8 0 0 0 2.8-3.5 11.7 11.7 0 0 0 .6-4.8h9.6a9.7 9.7 0 0 0 6.4-2.1 8.3 8.3 0 0 0 5.6 2.1h10.4a7.5 7.5 0 0 0 6.2-2.6 6.8 6.8 0 0 0 1.8-4.8 10.8 10.8 0 0 0-1.9-5.7l-8.2-12 14.1-5.1ZM349.2 89a24.8 24.8 0 0 0-3-6.8c-1.5-2.8-2.6-4.7-3.4-5.9l-2-2.7-4.4 3.5 1.6 2.2c1 1.5 2.1 3.3 3.3 5.5a30.6 30.6 0 0 1 2.7 5.6 2.8 2.8 0 0 1-.2 2.4 4.6 4.6 0 0 1-3.1.8h-4.8c-1.7 0-2.6-.4-2.7-1.3a12.2 12.2 0 0 1-.1-2.1h-5v3.1a5.9 5.9 0 0 0 2.5 4.5 9.8 9.8 0 0 0 6.1 1.8h3.3c3.6 0 6.2-1 7.9-3.1a8.1 8.1 0 0 0 1.3-7.5Z" fill="#001b4c"/></svg>
			</div>
			<div class="menuSection">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container_class'=>'mainMenu'
						)
					);
				?>
			</div>
			<div class="headericons">
				<a href="#"><svg viewBox="0 0 512 512"><path d="M405.1 80.9c-89.4-89.4-234.8-89.4-324.2 0s-89.4 234.8 0 324.2c82.7 82.7 213.2 88.9 303.1 18.7l66.1 66.1a28.1 28.1 0 0 0 39.8-39.8L423.8 384c70.2-89.9 64-220.4-18.7-303.1Zm-39.8 284.4c-67.4 67.5-177.2 67.5-244.6 0s-67.5-177.2 0-244.6 177.2-67.5 244.6 0 67.5 177.2 0 244.6Z"/></svg></a>
				<!-- <form action="/" method="get">
					<input placeholder="جست‌وجو در وبسایت..." type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
					<button><svg viewBox="0 0 512 512"><path d="M405.1 80.9c-89.4-89.4-234.8-89.4-324.2 0s-89.4 234.8 0 324.2c82.7 82.7 213.2 88.9 303.1 18.7l66.1 66.1a28.1 28.1 0 0 0 39.8-39.8L423.8 384c70.2-89.9 64-220.4-18.7-303.1Zm-39.8 284.4c-67.4 67.5-177.2 67.5-244.6 0s-67.5-177.2 0-244.6 177.2-67.5 244.6 0 67.5 177.2 0 244.6Z"/></svg></button>
				</form> -->
			</div>
			<a class="generalButton outlineButton" href="#">درخواست مشاوره</a>
		</div>
	</div>
	
	