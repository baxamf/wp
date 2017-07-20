<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title>WP Theme</title>
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>

	<div class="container">

	<header class="site-header">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<h3><?php bloginfo('description'); ?> <?php if (is_page('portfolio') ) { ?>
			- This is <?php echo the_title(); ?> page
		<?php } ?></h3>

		

		<nav class="site-nav">
				<?php 

				$args = array(	
					'theme_location' => 'primery'
					);

				 ?>

				<?php wp_nav_menu($args); ?>
		</nav>
	</header>
	