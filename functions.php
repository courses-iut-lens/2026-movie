<?php
/**
 * myMovie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package myMovie
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mymovie_setup() {
	// Traductions
	load_theme_textdomain( 'mymovie', get_template_directory() . '/languages' );

	add_theme_support( 'post-thumbnails' );

	// Menus
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'mymovie' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'mymovie_setup' );


/**
 * Enqueue styles and scripts
 */
function mymovie_scripts() {
    // Tailwind CSS
    wp_enqueue_style(
        'mymovie-style',
        get_template_directory_uri() . '/dist/style.css',
        array(),
        _S_VERSION
    );

    // CSS dédié à la page 404
    if ( is_404() ) {
        wp_enqueue_style(
            'mymovie-404',
            get_template_directory_uri() . '/dist/404.css',
            array( 'mymovie-style' ),
            _S_VERSION
        );
    }

    // Scripts custom du thème (AVANT Alpine pour alpine:init)
    wp_enqueue_script(
        'mymovie-scripts',
        get_template_directory_uri() . '/dist/main.js',
        array(),
        _S_VERSION,
        array( 'strategy' => 'defer' )
    );

    // Alpine.js via CDN (après main.js)
    wp_enqueue_script(
        'alpinejs',
        'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
        array( 'mymovie-scripts' ),
        '3.14.8',
        array( 'strategy' => 'defer' )
    );
}
add_action( 'wp_enqueue_scripts', 'mymovie_scripts' );


/**
 * Register Custom Post Type: Movie
 */
function mymovie_register_movie_cpt() {
	$labels = array(
		'name'                  => _x( 'Films', 'Post Type General Name', 'mymovie' ),
		'singular_name'         => _x( 'Film', 'Post Type Singular Name', 'mymovie' ),
		'menu_name'             => __( 'Films', 'mymovie' ),
		'name_admin_bar'        => __( 'Film', 'mymovie' ),
		'archives'              => __( 'Archives des films', 'mymovie' ),
		'attributes'            => __( 'Attributs du film', 'mymovie' ),
		'parent_item_colon'     => __( 'Film parent:', 'mymovie' ),
		'all_items'             => __( 'Tous les films', 'mymovie' ),
		'add_new_item'          => __( 'Ajouter un nouveau film', 'mymovie' ),
		'add_new'               => __( 'Ajouter un film', 'mymovie' ),
		'new_item'              => __( 'Nouveau film', 'mymovie' ),
		'edit_item'             => __( 'Modifier le film', 'mymovie' ),
		'update_item'           => __( 'Mettre à jour le film', 'mymovie' ),
		'view_item'             => __( 'Voir le film', 'mymovie' ),
		'view_items'            => __( 'Voir les films', 'mymovie' ),
		'search_items'          => __( 'Rechercher un film', 'mymovie' ),
		'not_found'             => __( 'Aucun film trouvé', 'mymovie' ),
		'not_found_in_trash'    => __( 'Aucun film trouvé dans la corbeille', 'mymovie' ),
		'featured_image'        => __( 'Image à la une', 'mymovie' ),
		'set_featured_image'    => __( 'Définir l\'image à la une', 'mymovie' ),
		'remove_featured_image' => __( 'Retirer l\'image à la une', 'mymovie' ),
		'use_featured_image'    => __( 'Utiliser comme image à la une', 'mymovie' ),
		'insert_into_item'      => __( 'Insérer dans le film', 'mymovie' ),
		'uploaded_to_this_item' => __( 'Téléchargé vers ce film', 'mymovie' ),
		'items_list'            => __( 'Liste des films', 'mymovie' ),
		'items_list_navigation' => __( 'Navigation de la liste des films', 'mymovie' ),
		'filter_items_list'     => __( 'Filtrer la liste des films', 'mymovie' ),
	);

	$args = array(
		'label'                 => __( 'Film', 'mymovie' ),
		'description'           => __( 'Films du site', 'mymovie' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-video-alt3',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rewrite'               => array( 'slug' => 'films' ),
	);

	register_post_type( 'movie', $args );
}
add_action( 'init', 'mymovie_register_movie_cpt' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';