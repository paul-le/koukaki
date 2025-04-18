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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
        <div id="headerTopOfPage">
            <div>
                <h1>
                    Fleurs d'oranger & chats errants
                </h1>
            </div>
            <div class="button_container" id="toggle">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>
            <div class="overlay" id="overlay">
                <img id="fleurOrangeBottomRight" src=<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus_footer.png'; ?>>
                <img id="fleurBlancheTopRight" src=<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'; ?>>
                <img id="fleurVioletteTopLeft" src=<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?>>
                <nav class="overlay-menu">
                <img id="fleurOrangeMiddleLeft" src=<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'; ?>>
                <img id="fleurRoseMiddleRight" src=<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'; ?>>
                <img id="catHeader1" src=<?php echo get_stylesheet_directory_uri() . '/assets/images/cat1.png'; ?>>
                <img id="catHeader2" src=<?php echo get_stylesheet_directory_uri() . '/assets/images/cat2.png'; ?>>
                <nav class="overlay-menu">
                    <ul>
                        <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                </nav>
            </div>
    </div>
	</header>
