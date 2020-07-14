<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter_theme
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starter-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$starter_theme_description = get_bloginfo( 'description', 'display' );
			if ( $starter_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $starter_theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo-link"><img src="" alt="" class="logo">Logo</a>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU &#9776;', 'update' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location'	=> 'primary',
					'menu_class'		=> 'nav-menu',
					'menu_id'			=> 'nav-menu',
					'container'			=> 'nav',
					'container_class'	=> 'main-navigation',
					'container_id'		=>	'main-navigation',
					'echo'				=> true,
					'walker'			=> new Clean_Walker_Nav()

				));
			?>
		<!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
