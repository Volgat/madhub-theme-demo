<?php
/**
 * @package MadHub
 * @wordpress-plugin
 */

</div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="footer-widgets-wrap">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <?php madhub_site_logo(); ?>
                        </div>
                        <div class="footer-description">
                            <p>MadHub Digital Solutions fournit des services de développement web innovants et des solutions e-commerce pour les entreprises de toutes tailles.</p>
                        </div>
                        <div class="social-links">
                            <a href="#" class="social-link">
                                <span class="dashicons dashicons-facebook-alt"></span>
                            </a>
                            <a href="#" class="social-link">
                                <span class="dashicons dashicons-twitter"></span>
                            </a>
                            <a href="#" class="social-link">
                                <span class="dashicons dashicons-linkedin"></span>
                            </a>
                            <a href="#" class="social-link">
                                <span class="dashicons dashicons-instagram"></span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="footer-widget">
                        <h3 class="widget-title">Liens Rapides</h3>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_class'     => 'footer-menu',
                            'container'      => false,
                            'depth'          => 1,
                            'fallback_cb'    => function() {
                                echo '<ul class="footer-menu">';
                                echo '<li><a href="' . esc_url(home_url('/')) . '">Accueil</a></li>';
                                echo '<li><a href="#">À propos</a></li>';
                                echo '<li><a href="#">Services</a></li>';
                                echo '<li><a href="#">Portfolio</a></li>';
                                echo '<li><a href="#">Blog</a></li>';
                                echo '<li><a href="#">Contact</a></li>';
                                echo '</ul>';
                            },
                        ));
                        ?>
                    </div>
                    
                    <div class="footer-widget">
                        <h3 class="widget-title">Nos Services</h3>
                        <ul class="footer-menu">
                            <li><a href="#">Développement Web</a></li>
                            <li><a href="#">Solutions E-commerce</a></li>
                            <li><a href="#">Design UI/UX</a></li>
                            <li><a href="#">Marketing Digital</a></li>
                            <li><a href="#">SEO</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-widget">
                        <h3 class="widget-title">Newsletter</h3>
                        <p>Abonnez-vous pour recevoir les dernières actualités et tendances du digital.</p>
                        <form class="newsletter-form">
                            <input type="email" placeholder="Votre adresse email" required>
                            <button type="submit" class="btn-primary">S'abonner</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>. Tous droits réservés.
                </div>
                <div class="footer-bottom-links">
                    <a href="#">Mentions légales</a>
                    <a href="#">Politique de confidentialité</a>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<style>
    /* Footer Styles */
    .site-footer {
        background-color: #333;
        color: rgba(255, 255, 255, 0.8);
        padding-top: 60px;
        margin-top: 60px;
    }
    
    .footer-widgets-wrap {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        padding-bottom: 40px;
    }
    
    .footer-widget {
        margin-bottom: 30px;
    }
    
    .footer-widget .site-title {
        color: white;
        font-size: 22px;
    }
    
    .footer-widget .site-description {
        color: rgba(255, 255, 255, 0.6);
    }
    
    .footer-description {
        margin: 15px 0;
        line-height: 1.6;
    }
    
    .widget-title {
        color: white;
        font-size: 18px;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }
    
    .widget-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 2px;
        background-color: #4a90e2;
    }
    
    .social-links {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }
    
    .social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        transition: background-color 0.3s ease;
    }
    
    .social-link:hover {
        background-color: #4a90e2;
        color: white;
    }
    
    .footer-menu {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .footer-menu li {
        margin-bottom: 10px;
    }
    
    .footer-menu a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .footer-menu a:hover {
        color: white;
    }
    
    .newsletter-form {
        display: flex;
        margin-top: 15px;
    }
    
    .newsletter-form input {
        flex: 1;
        padding: 10px;
        border: none;
        border-radius: 4px 0 0 4px;
    }
    
    .newsletter-form button {
        padding: 10px 15px;
        border: none;
        border-radius: 0 4px 4px 0;
        background-color: #4a90e2;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .newsletter-form button:hover {
        background-color: #3a7bc8;
    }
    
    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding: 20px 0;
    }
    
    .footer-bottom .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }
    
    .copyright {
        color: rgba(255, 255, 255, 0.6);
        font-size: 14px;
    }
    
    .footer-bottom-links {
        display: flex;
        gap: 20px;
    }
    
    .footer-bottom-links a {
        color: rgba(255, 255, 255, 0.6);
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s ease;
    }
    
    .footer-bottom-links a:hover {
        color: white;
    }
    
    @media (max-width: 768px) {
        .footer-bottom .container {
            flex-direction: column;
            gap: 15px;
        }
    }
</style>

<script>
    // Toggle mobile menu
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.querySelector('.menu-toggle');
        const primaryMenu = document.querySelector('.primary-menu');
        
        if (menuToggle && primaryMenu) {
            menuToggle.addEventListener('click', function() {
                primaryMenu.classList.toggle('active');
                menuToggle.setAttribute('aria-expanded', 
                    menuToggle.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
                );
            });
        }
    });
</script>

</body>
</html>