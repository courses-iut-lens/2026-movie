<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myMovie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php echo get_template_part('template-parts/warning'); ?>
<?php echo get_template_part('template-parts/stories'); ?>

<div id="page" class="site">

    <header class="site-header">
        <div class="site-branding">
            <?php the_custom_logo(); ?>
        </div>

<!--        <nav id="site-navigation" class="main-navigation">-->
<!--            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'mymovie' ); ?><!--</button>-->
<!--            --><?php
//                wp_nav_menu(
//                    array(
//                        'theme_location' => 'menu-1',
//                        'menu_id'        => 'primary-menu',
//                    )
//                );
//            ?>
<!--        </nav>-->
    </header>
