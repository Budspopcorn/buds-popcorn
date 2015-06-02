<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7331754/697946/css/fonts.css" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php get_template_part( 'partials/svg' ); ?>

	<div class="container">

		<header id="header" class="header">
		  <div class="wrapper">
  			<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Bud's Popcorn"></div>
    		<nav id="nav" class="nav">
    		  <a href="" class="btn-mobile">Menu</a>
    			<?php wp_nav_menu( array('menu' => 'primary') ); ?>
    		</nav>
		  </div>
		</header>