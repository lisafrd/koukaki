<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

    <header id="masthead" class="site-header">
        <nav id="site-navigation" class="main-navigation">
            <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
            <div class="menu-btn">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <div class="header__nav">
                <nav class="nav">
                    <div class="nav-background"></div>
                    <ul class="nav__list">
                        <img class="logo__header"src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                        <li class="nav__list_item list_item_story"><a class="nav__link" href="#story__article">Histoire</a></li>
                        <li class="nav__list_item list_item_characters"><a class="nav__link" href="#characters">Personnages</a></li>
                        <li class="nav__list_item list_item_place"><a class="nav__link" href="#place">Lieu</a></li>
                        <li class="nav__list_item list_item_studio"><a class="nav__link" href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <div class="text__logo__header"><a href="#">STUDIO KOUKAKI</a></div>
                </nav>
            </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
