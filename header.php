<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Theme_-_Cesar\'s_Portfolio
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>  class="scrollBlock">
<!--

																							**************************************************
																							**                                              **
																							**________/\\\\\\\\\_____/\\\\\\\\\\\___        **
																							** _____/\\\////////____/\\\/////////\\\_       **
																							**  ___/\\\/____________\//\\\______\///__      **
																							**   __/\\\_______________\////\\\_________     **
																							**    _\/\\\__________________\////\\\______    **
																							**     _\//\\\____________________\////\\\___   **
																							**      __\///\\\___________/\\\______\//\\\__  **
																							**       ____\////\\\\\\\\\_\///\\\\\\\\\\\/___ **
																							**        _______\/////////____\///////////_____**
																							**                                              **
																							**************************************************

-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/_assets/css/fixes.min.css">
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/_assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/manifest.json">
	<meta name="msapplication-TileImage" content="<?php bloginfo("template_url"); ?>/_assets/imgs/favicon/ms-icon-144x144.png">
	<meta name="msapplication-TileColor" content="rgb(30,30,30)">
	<meta name="theme-color" content="rgb(30,30,30)">

</head>

<body>
	<div class="loader">
		<div class="loader-content">
			<svg height="200px" viewBox="0 0 390 250">
				<g id="C">
					<path id="C-stroke" class="strokeAnim" d="M199.562 0.125V15.625H131.062C95.1251 15.625 65.6043 30.8279 42.438 61.3328C29.4287 80.5767 22.9375 101.188 22.9375 123.188C22.9375 152.768 35.1596 179.509 59.7263 203.438C74.559 215.373 87.7086 222.376 99.1886 224.58L99.3185 224.605L99.4375 224.663C106.149 227.928 118.315 229.625 136.125 229.625H199.562V244H127.125C93.6208 244 63.5578 229.979 36.9635 202.065L36.9304 202.03L36.9008 201.992C27.303 189.76 20.4927 178.613 16.5078 168.556L16.4988 168.533L16.4909 168.51C10.4691 150.821 7.4375 135.332 7.4375 122.062C7.4375 105.383 11.9853 86.8677 21.0237 66.5314L21.0409 66.4927L21.0612 66.4557C35.1312 40.8653 55.1661 22.1499 81.1487 10.3396L81.1634 10.333L81.1783 10.3268C97.5212 3.5251 114.714 0.125 132.75 0.125H199.562ZM59.0625 204.188C34.3125 180.094 21.9375 153.094 21.9375 123.188C21.9375 100.969 28.5 80.1562 41.625 60.75C64.9688 30 94.7812 14.625 131.062 14.625H198.562V1.125H132.75C114.844 1.125 97.7812 4.5 81.5625 11.25C55.7812 22.9688 35.9062 41.5312 21.9375 66.9375C12.9375 87.1875 8.4375 105.562 8.4375 122.062C8.4375 135.188 11.4375 150.562 17.4375 168.188C21.375 178.125 28.125 189.188 37.6875 201.375C64.125 229.125 93.9375 243 127.125 243H198.562V230.625H136.125C118.312 230.625 105.938 228.938 99 225.562C87.2812 223.312 73.9688 216.188 59.0625 204.188Z" fill="white"/>
					<path id="C-fill" class="fillAnim" d="M132.75 1.125H198.562V14.625H131.062C94.7812 14.625 64.9688 30 41.625 60.75C28.5 80.1562 21.9375 100.969 21.9375 123.188C21.9375 153.094 34.3125 180.094 59.0625 204.188C73.9688 216.188 87.2812 223.312 99 225.562C105.938 228.938 118.312 230.625 136.125 230.625H198.562V243H127.125C93.9375 243 64.125 229.125 37.6875 201.375C28.125 189.188 21.375 178.125 17.4375 168.188C11.4375 150.562 8.4375 135.188 8.4375 122.062C8.4375 105.562 12.9375 87.1875 21.9375 66.9375C35.9062 41.5312 55.7812 22.9687 81.5625 11.25C97.7812 4.5 114.844 1.125 132.75 1.125Z" fill="#555"/>
				</g>
				<g id="S">
					<path id="S-stroke" class="strokeAnim" d="M390 0.6875V15.0625H274.812C266.078 15.0625 258.798 15.5299 252.961 16.4564C247.11 17.3852 242.783 18.7645 239.899 20.5392L239.878 20.5522L239.856 20.5641C231.376 25.2193 225.051 31.3037 220.841 38.8096C216.628 46.3195 214.5 55.3078 214.5 65.8125C214.5 85.648 223.632 100.689 242.041 111.024C249.262 113.61 255.302 114.875 260.188 114.875H337.25C345.153 114.875 354.924 118.955 366.501 126.862L366.558 126.9L366.609 126.947C381.826 140.737 389.438 158.259 389.438 179.438C389.438 204.911 378.568 224.176 356.887 237.109L356.847 237.133L356.804 237.153C347.262 241.688 338.859 244 331.625 244H198.438V230.188H312.5C321.477 230.188 328.837 229.813 334.591 229.071C340.372 228.325 344.43 227.219 346.879 225.819L346.908 225.802L346.939 225.788C356.153 221.319 363.025 215.098 367.602 207.135C372.183 199.163 374.5 189.384 374.5 177.75C374.5 170.582 371.773 161.571 366.189 150.676C360.724 141.677 351.788 135.072 339.263 130.912L328.734 129.25H253.438C240.325 129.25 227.52 122.688 215.032 109.821L214.99 109.778L214.954 109.73C204.723 96.2779 199.562 82.3829 199.562 68.0625V65.25C199.562 43.4673 208.334 25.5585 225.813 11.5937L225.865 11.5527L225.921 11.5187C237.888 4.30047 250.816 0.6875 264.688 0.6875L390 0.6875ZM328.812 128.25L339.5 129.938C352.25 134.156 361.438 140.906 367.062 150.188C372.688 161.156 375.5 170.344 375.5 177.75C375.5 201.281 366.125 217.594 347.375 226.688C342.125 229.688 330.5 231.188 312.5 231.188H199.438V243H331.625C338.656 243 346.906 240.75 356.375 236.25C377.75 223.5 388.438 204.562 388.438 179.438C388.438 158.531 380.938 141.281 365.938 127.688C354.406 119.812 344.844 115.875 337.25 115.875H260.188C255.125 115.875 248.938 114.562 241.625 111.938C222.875 101.438 213.5 86.0625 213.5 65.8125C213.5 44.5312 222.125 29.1562 239.375 19.6875C245.469 15.9375 257.281 14.0625 274.812 14.0625H389V1.6875L264.688 1.6875C251 1.6875 238.25 5.25 226.438 12.375C209.188 26.1562 200.562 43.7812 200.562 65.25V68.0625C200.562 82.125 205.625 95.8125 215.75 109.125C228.125 121.875 240.688 128.25 253.438 128.25H328.812Z" fill="white"/>
					<path id="S-fill" class="fillAnim" d="M264.688 1.6875H389V14.0625H274.812C257.281 14.0625 245.469 15.9375 239.375 19.6875C222.125 29.1562 213.5 44.5313 213.5 65.8125C213.5 86.0625 222.875 101.438 241.625 111.938C248.938 114.562 255.125 115.875 260.188 115.875H337.25C344.844 115.875 354.406 119.812 365.938 127.688C380.938 141.281 388.438 158.531 388.438 179.438C388.438 204.562 377.75 223.5 356.375 236.25C346.906 240.75 338.656 243 331.625 243H199.438V231.188H312.5C330.5 231.188 342.125 229.688 347.375 226.688C366.125 217.594 375.5 201.281 375.5 177.75C375.5 170.344 372.688 161.156 367.062 150.188C361.438 140.906 352.25 134.156 339.5 129.938L328.812 128.25H253.438C240.688 128.25 228.125 121.875 215.75 109.125C205.625 95.8125 200.562 82.125 200.562 68.0625V65.25C200.562 43.7812 209.188 26.1562 226.438 12.375C238.25 5.25 251 1.6875 264.688 1.6875Z" fill="#555"/>

				</g>
			</svg>

			<!-- <img src="<?php bloginfo('template_url') ?>/_assets/imgs/786.png" alt=""> -->
		</div>
	</div>
	<!--Inicio Header-->
	<?php if (is_home()) {?>
	<header>
		<span class="logo-header"><img src="<?php bloginfo('template_url') ?>/_assets/imgs/site-logo.png" alt=""></span>
		<nav class="navbar">
			<ul class="navbar-list">
				<li class="navbar-item" href="#section_home">Home</li>
				<li class="navbar-item" href="#section_sobre">Sobre</li>
				<li class="navbar-item" href="#section_skills">Skills</li>
				<li class="navbar-item" href="#section_contato">Contato</li>
			</ul>
		</nav>
		<!-- <span class="navbar-menu"></span> -->
	</header>
<?php } ?>
	<!--Fim Header -->
