<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width" />

<title><?php wp_title( ' | ', true, 'right' ); ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<link href='https://fonts.googleapis.com/css?family=Cinzel:700' rel='stylesheet' type='text/css'>

<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">

<header id="header" role="banner">

<section id="branding">

	<!--<img src="logo.png">

	<div id="site-title"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>-->

	<!--<div id="site-description"><?php bloginfo( 'description' ); ?></div>-->

</section>

<nav id="menu" role="navigation">

	<ul class="english-nav english">

		<?php wp_nav_menu( array( 

							'theme_location' => 'main-menu',

							'container'		 => false,

							'items_wrap' 	 => '%3$s' ) ); ?>

			<li>

				<img class="english-flag" src="<?php bloginfo('template_directory'); ?>/img/en.png" title="English">

				<img class="french-flag" src='<?php bloginfo('template_directory'); ?>/img/fr.png' title="Francais">

				<img class="spanish-flag" src="<?php bloginfo('template_directory'); ?>/img/sp.png" title="Spanish">

				<img class="italian-flag" src='<?php bloginfo('template_directory'); ?>/img/it.png' title="Italian">

			</li>

	</ul>

	<ul class="french-nav french">

		<?php wp_nav_menu( array( 

							'theme_location' => 'french-menu',

							'container'		 => false,

							'items_wrap' 	 => '%3$s' ) ); ?>

			<li>

				<img class="english-flag" src="<?php bloginfo('template_directory'); ?>/img/en.png" title="English">

				<img class="french-flag" src='<?php bloginfo('template_directory'); ?>/img/fr.png' title="Francais">

				<img class="spanish-flag" src="<?php bloginfo('template_directory'); ?>/img/sp.png" title="Spanish">

				<img class="italian-flag" src='<?php bloginfo('template_directory'); ?>/img/it.png' title="Italian">

			</li>

	</ul>

	<ul class="spanish-nav spanish">

		<?php wp_nav_menu( array( 

							'theme_location' => 'spanish-menu',

							'container'		 => '',

							'items_wrap' 	 => '%3$s' ) ); ?>

			<li>

				<img class="english-flag" src="<?php bloginfo('template_directory'); ?>/img/en.png" title="English">

				<img class="french-flag" src='<?php bloginfo('template_directory'); ?>/img/fr.png' title="Francais">

				<img class="spanish-flag" src="<?php bloginfo('template_directory'); ?>/img/sp.png" title="Spanish">

				<img class="italian-flag" src='<?php bloginfo('template_directory'); ?>/img/it.png' title="Italian">

			</li>

	</ul>

	<ul class="italian-nav italian">

		<?php wp_nav_menu( array( 

							'theme_location' => 'italian-menu',

							'container'		 => '',

							'items_wrap' 	 => '%3$s' ) ); ?>

			<li>

				<img class="english-flag" src="<?php bloginfo('template_directory'); ?>/img/en.png" title="English">

				<img class="french-flag" src='<?php bloginfo('template_directory'); ?>/img/fr.png' title="Francais">

				<img class="spanish-flag" src="<?php bloginfo('template_directory'); ?>/img/sp.png" title="Spanish">

				<img class="italian-flag" src='<?php bloginfo('template_directory'); ?>/img/it.png' title="Italian">

			</li>

	</ul>

</nav>

</header>
<div id="navBlock">
</div>
<div id="container">