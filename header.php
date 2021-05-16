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
			<?php endif; ?>
		</div><!-- .site-branding -->
		<div class="navigation-container">
			<div class="logo-nav">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo-link"><img src="" alt="logo" class="logo"></a>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><div class="line-one"></div><div class="line-two"></div><div class="line-three"></div></button>

				</div><!-- #site-navigation -->
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
			</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
