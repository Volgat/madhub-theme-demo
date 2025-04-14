<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <style>
        /* Style inline pour la démo */
        .site-header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            position: relative;
            z-index: 100;
        }
        
        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        
        .site-branding {
            display: flex;
            align-items: center;
        }
        
        .custom-logo-link img {
            max-height: 60px;
            width: auto;
        }
        
        .site-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin: 0;
            text-decoration: none;
        }
        
        .site-description {
            margin: 0;
            font-size: 14px;
            color: #6c757d;
        }
        
        .main-navigation {
            display: flex;
            align-items: center;
        }
        
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #333;
        }
        
        .primary-menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .primary-menu li {
            margin: 0 15px;
            position: relative;
        }
        
        .primary-menu a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            padding: 5px 0;
            display: block;
            position: relative;
        }
        
        .primary-menu a:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #4a90e2;
            transition: width 0.3s ease;
        }
        
        .primary-menu a:hover:after,
        .primary-menu .current-menu-item > a:after {
            width: 100%;
        }
        
        .primary-menu .menu-item-has-children {
            position: relative;
        }
        
        .primary-menu .sub-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            min-width: 200px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 100;
            list-style: none;
            padding: 10px 0;
            margin: 0;
        }
        
        .primary-menu .menu-item-has-children:hover > .sub-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .primary-menu .sub-menu li {
            margin: 0;
        }
        
        .primary-menu .sub-menu a {
            padding: 8px 20px;
            font-size: 14px;
        }
        
        .primary-menu .sub-menu a:hover {
            background-color: #f8f9fa;
        }
        
        .header-actions {
            display: flex;
            align-items: center;
        }
        
        .header-search,
        .header-cart {
            margin-left: 15px;
            color: #333;
            font-size: 18px;
            text-decoration: none;
            position: relative;
        }
        
        .header-search:hover,
        .header-cart:hover {
            color: #4a90e2;
        }
        
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #4a90e2;
            color: white;
            font-size: 10px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .menu-toggle {
                display: block;
            }
            
            .primary-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: white;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                padding: 20px;
                flex-direction: column;
            }
            
            .primary-menu.active {
                display: flex;
            }
            
            .primary-menu li {
                margin: 10px 0;
            }
            
            .primary-menu .sub-menu {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                padding-left: 20px;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'madhub'); ?></a>

    <header id="masthead" class="site-header">
        <div class="container header-container">
            <div class="site-branding">
                <?php madhub_site_logo(); ?>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="dashicons dashicons-menu"></span>
                </button>
                
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => function() {
                        echo '<ul class="primary-menu">';
                        echo '<li><a href="' . esc_url(home_url('/')) . '">Accueil</a></li>';
                        echo '<li><a href="#">Services</a></li>';
                        echo '<li><a href="#">Portfolio</a></li>';
                        echo '<li><a href="#">Blog</a></li>';
                        echo '<li><a href="#">Contact</a></li>';
                        echo '</ul>';
                    },
                ));
                ?>
            </nav>
            
            <div class="header-actions">
                <a href="#" class="header-search">
                    <span class="dashicons dashicons-search"></span>
                </a>
                
                <?php if (class_exists('WooCommerce')) : ?>
                <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="header-cart">
                    <span class="dashicons dashicons-cart"></span>
                    <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
        <?php if (is_front_page() && !is_home()) : ?>
            <!-- Hero section for front page only -->
            <div class="hero-section" style="background-color: #333; background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg'); background-size: cover; background-position: center; color: white; padding: 120px 0; text-align: center;">
                <div class="container">
                    <h1 class="hero-title" style="font-size: 3rem; margin-bottom: 20px; font-weight: 700;">MadHub Digital Solutions</h1>
                    <div class="hero-description" style="font-size: 1.2rem; margin-bottom: 40px; max-width: 800px; margin-left: auto; margin-right: auto;">
                        <p>Nous créons des solutions web innovantes et des boutiques e-commerce performantes pour faire croître votre entreprise en ligne.</p>
                    </div>
                    <div class="hero-buttons" style="display: flex; gap: 20px; justify-content: center;">
                        <a href="#services" class="btn btn-primary">Nos Services</a>
                        <a href="#contact" class="btn btn-outline" style="background-color: transparent; color: white; border: 2px solid white;">Contactez-nous</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>