<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<style type="text/css" media="screen">
	</style>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page">

	<div id="head">

		<div id="title">

			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

		</div>

		<div id="tagline">

			<h2><?php bloginfo('description'); ?></h2>

		</div>

		<div id="menu">

			<ul class="menu">
				<li><a href="<?php echo get_option('home'); ?>">home</a></li>
				<?php wp_list_pages('title_li=&depth=2&sort_column=menu_order'); ?>	
			</ul>

			<div class="menu-clear"> </div>

		</div>

	</div><!-- head -->