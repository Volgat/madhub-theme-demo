<?php
/**
 * @package MadHub
 * @wordpress-plugin
 */

// Configuration de base du thème
if (!function_exists('madhub_setup')) {
    function madhub_setup() {
        // Ajout de  la prise en charge des images mises en avant
        add_theme_support('post-thumbnails');
        
        // Ajout de la prise en charge du titre du document
        add_theme_support('title-tag');
        
        // Ajout de la prise en charge des menus de navigation
        register_nav_menus(array(
            'primary' => esc_html__('Menu Principal', 'madhub'),
            'footer' => esc_html__('Menu Pied de page', 'madhub'),
        ));
        
        // Prise en charge HTML5
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        
        // Prise en charge de l'éditeur de blocs
        add_theme_support('editor-styles');
        add_theme_support('wp-block-styles');
        add_theme_support('responsive-embeds');
        
        // Prise en charge WooCommerce
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
    }
}
add_action('after_setup_theme', 'madhub_setup');

// Enregistrer les scripts et les styles
function madhub_scripts() {
    // Styles principaux
    wp_enqueue_style('madhub-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Scripts personnalisés
    wp_enqueue_script('madhub-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true);
    
    // Conditionnel pour les pages WooCommerce
    if (class_exists('WooCommerce') && is_woocommerce()) {
        wp_enqueue_style('madhub-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'madhub_scripts');

// Widget Areas
function madhub_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Barre latérale', 'madhub'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Ajoutez des widgets ici.', 'madhub'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Pied de page 1', 'madhub'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Premier widget de pied de page.', 'madhub'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Pied de page 2', 'madhub'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Deuxième widget de pied de page.', 'madhub'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Pied de page 3', 'madhub'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Troisième widget de pied de page.', 'madhub'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'madhub_widgets_init');

// Custom Post Types pour les projets
function madhub_register_post_types() {
    $labels = array(
        'name'               => _x('Projets', 'post type general name', 'madhub'),
        'singular_name'      => _x('Projet', 'post type singular name', 'madhub'),
        'menu_name'          => _x('Projets', 'admin menu', 'madhub'),
        'name_admin_bar'     => _x('Projet', 'add new on admin bar', 'madhub'),
        'add_new'            => _x('Ajouter', 'projet', 'madhub'),
        'add_new_item'       => __('Ajouter un nouveau projet', 'madhub'),
        'new_item'           => __('Nouveau projet', 'madhub'),
        'edit_item'          => __('Modifier le projet', 'madhub'),
        'view_item'          => __('Voir le projet', 'madhub'),
        'all_items'          => __('Tous les projets', 'madhub'),
        'search_items'       => __('Rechercher des projets', 'madhub'),
        'parent_item_colon'  => __('Projets parents:', 'madhub'),
        'not_found'          => __('Aucun projet trouvé.', 'madhub'),
        'not_found_in_trash' => __('Aucun projet trouvé dans la corbeille.', 'madhub')
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'projet'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    );
    
    register_post_type('project', $args);
    
    // Taxonomie de catégories de projets
    $taxonomy_labels = array(
        'name'              => _x('Catégories de projets', 'taxonomy general name', 'madhub'),
        'singular_name'     => _x('Catégorie de projet', 'taxonomy singular name', 'madhub'),
        'search_items'      => __('Rechercher des catégories', 'madhub'),
        'all_items'         => __('Toutes les catégories', 'madhub'),
        'parent_item'       => __('Catégorie parente', 'madhub'),
        'parent_item_colon' => __('Catégorie parente:', 'madhub'),
        'edit_item'         => __('Modifier la catégorie', 'madhub'),
        'update_item'       => __('Mettre à jour la catégorie', 'madhub'),
        'add_new_item'      => __('Ajouter une nouvelle catégorie', 'madhub'),
        'new_item_name'     => __('Nouveau nom de catégorie', 'madhub'),
        'menu_name'         => __('Catégories', 'madhub'),
    );
    
    $taxonomy_args = array(
        'hierarchical'      => true,
        'labels'            => $taxonomy_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'categorie-projet'),
        'show_in_rest'      => true,
    );
    
    register_taxonomy('project_category', array('project'), $taxonomy_args);
}
add_action('init', 'madhub_register_post_types');

// Personnalisation de l'extrait
function madhub_custom_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'madhub_custom_excerpt_length', 999);

function madhub_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'madhub_excerpt_more');

// Prise en charge WooCommerce (si activé)
if (class_exists('WooCommerce')) {
    // Personnaliser le nombre de produits par ligne
    function madhub_woocommerce_loop_columns() {
        return 3; // 3 produits par ligne
    }
    add_filter('loop_shop_columns', 'madhub_woocommerce_loop_columns');
    
    // Nombre de produits par page
    function madhub_woocommerce_products_per_page() {
        return 9;
    }
    add_filter('loop_shop_per_page', 'madhub_woocommerce_products_per_page');
}

// Fonction pour afficher le logo ou le nom du site
function madhub_site_logo() {
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        echo '<a href="' . esc_url(home_url('/')) . '" class="site-title">' . get_bloginfo('name') . '</a>';
        if (get_bloginfo('description')) {
            echo '<p class="site-description">' . get_bloginfo('description') . '</p>';
        }
    }
}

// Fonction pour numéroter pagination
function madhub_pagination() {
    global $wp_query;
    
    if ($wp_query->max_num_pages <= 1) {
        return;
    }
    
    $big = 999999999;
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
        'type' => 'array',
    ));
    
    if (is_array($pages)) {
        echo '<div class="pagination">';
        foreach ($pages as $page) {
            echo $page;
        }
        echo '</div>';
    }
}