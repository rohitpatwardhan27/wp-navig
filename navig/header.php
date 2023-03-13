<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Navig
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!--Bootstrap 4 CSS-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'navig' ); ?></a>

	<header>
        <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
            <a href="#" class="navbar-brand">
               <span><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/image/logo.webp" alt="Logo"></span> <span class="text-uppercase font-weight-bold">navig</span> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSlide">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
				wp_nav_menu( array(
				
					'theme_location'	=> 'menu-1',
					'container'			=> 'nav',
					'container_class'	=> 'collapse navbar-collapse justify-content-end',
					'menu_class'		=> 'navbar-nav'

				) );
			?>
			
        </nav>
        
    </header>
