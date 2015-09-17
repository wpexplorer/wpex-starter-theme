<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPEX Starter Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

	<header id="masthead" class="site-header">
	
		<div class="site-branding">

			<div class="site-title clr">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div><!-- .site-title -->

			<p class="site-description">
				<?php bloginfo( 'description' ); ?>
			</p><!-- .site-description -->

		</div><!-- .site-branding -->

		<?php if ( has_nav_menu( 'primary' ) ) : ?>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				) ); ?>
			</nav><!-- #site-navigation -->

		<?php endif; ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
