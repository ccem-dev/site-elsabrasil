<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elsatheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.css" />
	<noscript><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/noscript.css" /></noscript>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/style3.css" />
		
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site" style="background:#FFF;">


	<!-- Header --><a href="http://elsabrasil.org/" style="border: none;" alt=""><img src="http://elsabrasil.org/wp-content/uploads/2018/10/logo-elsa-baixo.png" alt="ELSA" class="logoelsa"/></a>
				<header id="header" class="alt" style="float:right!important; margin-top:3%;">
					<h1 id="logo" style="background:#000;"><a href="index.html"><span></span></a></h1>
					<nav id="nav">
						        <?php wp_nav_menu(array(
           	'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
            'menu_class' => 'dropdown-menu forAnimate', // add classes for the dropdown
            'container'  => '', // don't wrap the menu in <div>
            'items_wrap' => '<ul id="%1$s" class="%2$s" role="menu" >%3$s</ul>',
        ));?>
					</nav>
				</header>