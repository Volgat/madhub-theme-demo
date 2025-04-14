<?php
/**
 * Template pour la page d'accueil
 *
 * @wordpress-plugin
 * @package MadHub
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Section Services -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Nos Services</h2>
                <p class="section-description">Nous fournissons des solutions digitales complètes pour aider votre entreprise à se développer en ligne.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <span class="dashicons dashicons-admin-site-alt3"></span>
                    </div>
                    <h3 class="service-title">Développement Web</h3>
                    <p class="service-description">Sites web personnalisés créés avec les technologies modernes et les meilleures pratiques pour des performances optimales.</p>
                    <a href="#" class="service-link">En savoir plus</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <span class="dashicons dashicons-cart"></span>
                    </div>
                    <h3 class="service-title">Solutions E-commerce</h3>
                    <p class="service-description">Boutiques en ligne riches en fonctionnalités, optimisées pour les conversions et la croissance avec Shopify et WooCommerce.</p>
                    <a href="#" class="service-link">En savoir plus</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <span class="dashicons dashicons-art"></span>
                    </div>
                    <h3 class="service-title">Design UI/UX</h3>
                    <p class="service-description">Interfaces intuitives et attrayantes qui engagent votre audience et améliorent l'expérience utilisateur.</p>
                    <a href="#" class="service-link">En savoir plus</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <span class="dashicons dashicons-chart-bar"></span>
                    </div>
                    <h3 class="service-title">Marketing Digital</h3>
                    <p class="service-description">Campagnes stratégiques pour augmenter votre visibilité en ligne et attirer un trafic de qualité.</p>
                    <a href="#" class="service-link">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section Portfolio -->
    <section id="portfolio" class="portfolio-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Nos Projets Récents</h2>
                <p class="section-description">Découvrez quelques-uns de nos travaux récents pour nos clients satisfaits.</p>
            </div>
            
            <div class="portfolio-filters">
                <button class="portfolio-filter active" data-filter="all">Tous</button>
                <button class="portfolio-filter" data-filter="web">Web</button>
                <button class="portfolio-filter" data-filter="ecommerce">E-commerce</button>
                <button class="portfolio-filter" data-filter="design">Design</button>
            </div>
            
            <div class="portfolio-grid">
                <?php
                // Projets de démonstration pour l'entretien
                $demo_projects = array(
                    array(
                        'title' => 'Site web Eco-Friendly',
                        'category' => 'web',
                        'image' => get_template_directory_uri() . '/assets/images/project1.jpg'
                    ),
                    array(
                        'title' => 'Boutique de Mode en Ligne',
                        'category' => 'ecommerce',
                        'image' => get_template_directory_uri() . '/assets/images/project2.jpg'
                    ),
                    array(
                        'title' => 'Application Mobile Finance',
                        'category' => 'design',
                        'image' => get_template_directory_uri() . '/assets/images/project3.jpg'
                    ),
                    array(
                        'title' => 'Refonte Site Corporate',
                        'category' => 'web',
                        'image' => get_template_directory_uri() . '/assets/images/project4.jpg'
                    ),
                    array(
                        'title' => 'Marketplace Locale',
                        'category' => 'ecommerce',
                        'image' => get_template_directory_uri() . '/assets/images/project5.jpg'
                    ),
                    array(
                        'title' => 'Identité de Marque',
                        'category' => 'design',
                        'image' => get_template_directory_uri() . '/assets/images/project6.jpg'
                    ),
                );
                
                // Pour l'entretien, nous allons afficher des projets de démonstration
                foreach ($demo_projects as $project) :
                ?>
                <div class="portfolio-item" data-category="<?php echo esc_attr($project['category']); ?>">
                    <div class="portfolio-image">
                        <img src="https://via.placeholder.com/600x400" alt="<?php echo esc_attr($project['title']); ?>">
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title"><?php echo esc_html($project['title']); ?></h3>
                        <span class="portfolio-category"><?php echo esc_html(ucfirst($project['category'])); ?></span>
                        <a href="#" class="portfolio-link">Voir le projet</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="portfolio-cta text-center">
                <a href="/portfolio/" class="btn btn-primary">Voir tous les projets</a>
            </div>
        </div>
    </section>
    
    <!-- Section Témoignages -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Ce que disent nos clients</h2>
                <p class="section-description">Découvrez les témoignages de nos clients satisfaits.</p>
            </div>
            
            <div class="testimonials-slider">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"MadHub a transformé notre présence en ligne avec un site e-commerce qui a augmenté nos ventes de 45% en seulement trois mois. Leur équipe est réactive et professionnelle."</p>
                    </div>
                    <div class="testimonial-meta">
                        <div class="testimonial-image">
                            <img src="https://via.placeholder.com/80x80" alt="Sophie Martin">
                        </div>
                        <div class="testimonial-info">
                            <h4 class="testimonial-name">Sophie Martin</h4>
                            <span class="testimonial-position">CEO, Fashion Store</span>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"L'approche de MadHub en matière de conception UX a complètement changé la façon dont nos utilisateurs interagissent avec notre application. Le taux d'engagement a augmenté de 60%."</p>
                    </div>
                    <div class="testimonial-meta">
                        <div class="testimonial-image">
                            <img src="https://via.placeholder.com/80x80" alt="Thomas Dubois">
                        </div>
                        <div class="testimonial-info">
                            <h4 class="testimonial-name">Thomas Dubois</h4>
                            <span class="testimonial-position">Directeur Marketing, TechApp</span>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"Des professionnels talentueux qui ont parfaitement compris nos besoins et ont livré un site web qui dépasse toutes nos attentes. Notre trafic a doublé en un mois!"</p>
                    </div>
                    <div class="testimonial-meta">
                        <div class="testimonial-image">
                            <img src="https://via.placeholder.com/80x80" alt="Laura Blanc">
                        </div>
                        <div class="testimonial-info">
                            <h4 class="testimonial-name">Laura Blanc</h4>
                            <span class="testimonial-position">Fondatrice, Eco Solutions</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section Contact -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Contactez-nous</h2>
                <p class="section-description">Discutons de votre projet et voyons comment nous pouvons vous aider.</p>
            </div>
            
            <div class="contact-wrapper">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <span class="dashicons dashicons-location"></span>
                        </div>
                        <div class="contact-text">
                            <h4>Notre adresse</h4>
                            <p>123 Rue du Commerce, 75001 Paris</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <span class="dashicons dashicons-email-alt"></span>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p>info@madhub.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <span class="dashicons dashicons-phone"></span>
                        </div>
                        <div class="contact-text">
                            <h4>Téléphone</h4>
                            <p>+33 1 23 45 67 89</p>
                        </div>
                    </div>
                    
                    <div class="contact-social">
                        <h4>Suivez-nous</h4>
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
                </div>
                
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Votre email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Sujet" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" rows="5" placeholder="Votre message" required></textarea>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="btn btn-primary">Envoyer le message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php if (class_exists('WooCommerce')) : ?>
    <!-- Section Produits en vedette (si WooCommerce est activé) -->
    <section id="featured-products" class="featured-products-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Nos Produits en Vedette</h2>
                <p class="section-description">Découvrez nos solutions numériques les plus populaires.</p>
            </div>
            
            <div class="woocommerce columns-4">
                <?php
                // Pour la démo, affichons quelques produits factices
                echo '<ul class="products columns-4">';
                for ($i = 1; $i <= 4; $i++) {
                    echo '<li class="product">';
                    echo '<a href="#" class="woocommerce-LoopProduct-link">';
                    echo '<div class="product-image-placeholder" style="background-color: #f5f5f5; height: 250px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">';
                    echo '<span class="dashicons dashicons-products" style="font-size: 48px; color: #ddd;"></span>';
                    echo '</div>';
                    echo '<h2 class="woocommerce-loop-product__title">Produit Exemple ' . $i . '</h2>';
                    echo '<span class="price"><span class="woocommerce-Price-amount amount">199,99 €</span></span>';
                    echo '</a>';
                    echo '<a href="#" class="button add_to_cart_button">Ajouter au panier</a>';
                    echo '</li>';
                }
                echo '</ul>';
                ?>
            </div>
            
            <div class="text-center mt-4">
                <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="btn btn-primary">Voir tous les produits</a>
            </div>
        </div>
    </section>
    <?php endif; ?>
</main>

<style>
    /* Styles pour la page d'accueil */
    .section-header {
        margin-bottom: 50px;
    }
    
    .section-title {
        font-size: 36px;
        margin-bottom: 15px;
        color: #333;
    }
    
    .section-description {
        font-size: 18px;
        color: #666;
        max-width: 800px;
        margin: 0 auto;
    }
    
    /* Services Section */
    .services-section {
        padding: 80px 0;
        background-color: white;
    }
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 30px;
    }
    
    .service-card {
        background-color: #fff;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }
    
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .service-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(74, 144, 226, 0.1);
        border-radius: 50%;
    }
    
    .service-icon .dashicons {
        font-size: 36px;
        color: #4a90e2;
    }
    
    .service-title {
        font-size: 20px;
        margin-bottom: 15px;
        color: #333;
    }
    
    .service-description {
        color: #666;
        margin-bottom: 20px;
    }
    
    .service-link {
        color: #4a90e2;
        font-weight: 500;
        display: inline-block;
        position: relative;
    }
    
    .service-link:after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #4a90e2;
        transition: width 0.3s ease;
    }
    
    .service-link:hover:after {
        width: 100%;
    }
    
    /* Portfolio Section */
    .portfolio-section {
        padding: 80px 0;
        background-color: #f8f9fa;
    }
    
    .portfolio-filters {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-bottom: 30px;
    }
    
    .portfolio-filter {
        background: none;
        border: none;
        padding: 8px 20px;
        margin: 5px;
        cursor: pointer;
        font-weight: 500;
        color: #666;
        transition: all 0.3s ease;
    }
    
    .portfolio-filter.active,
    .portfolio-filter:hover {
        color: #4a90e2;
    }
    
    .portfolio-filter.active {
        background-color: rgba(74, 144, 226, 0.1);
        border-radius: 30px;
    }
    
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
    }
    
    .portfolio-item {
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .portfolio-image img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
    }
    
    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        padding: 20px;
        text-align: center;
    }
    
    .portfolio-item:hover .portfolio-image img {
        transform: scale(1.1);
    }
    
    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
    }
    
    .portfolio-title {
        color: white;
        margin-bottom: 5px;
        transform: translateY(20px);
        transition: transform 0.4s ease;
    }
    
    .portfolio-category {
        color: #4a90e2;
        margin-bottom: 15px;
        display: block;
        transform: translateY(20px);
        transition: transform 0.4s ease 0.1s;
    }
    
    .portfolio-link {
        color: white;
        background-color: #4a90e2;
        padding: 8px 20px;
        border-radius: 30px;
        transform: translateY(20px);
        transition: transform 0.4s ease 0.2s, background-color 0.3s ease;
    }
    
    .portfolio-link:hover {
        background-color: #3a7bc8;
        color: white;
    }
    
    .portfolio-item:hover .portfolio-title,
    .portfolio-item:hover .portfolio-category,
    .portfolio-item:hover .portfolio-link {
        transform: translateY(0);
    }
    
    .portfolio-cta {
        margin-top: 40px;
    }
    
    /* Testimonials Section */
    .testimonials-section {
        padding: 80px 0;
        background-color: white;
    }
    
    .testimonials-slider {
        max-width: 800px;
        margin: 0 auto;
    }
    
    .testimonial-item {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 30px;
        margin: 20px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .testimonial-content {
        font-style: italic;
        position: relative;
        padding: 0 20px;
        margin-bottom: 20px;
    }
    
    .testimonial-content:before,
    .testimonial-content:after {
        content: '"';
        font-size: 50px;
        color: #4a90e2;
        line-height: 1;
        position: absolute;
    }
    
    .testimonial-content:before {
        top: -10px;
        left: -10px;
    }
    
    .testimonial-content:after {
        bottom: -30px;
        right: -10px;
    }
    
    .testimonial-meta {
        display: flex;
        align-items: center;
    }
    
    .testimonial-image {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 15px;
    }
    
    .testimonial-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .testimonial-name {
        margin: 0 0 5px;
        color: #333;
    }
    
    .testimonial-position {
        color: #666;
        font-size: 14px;
    }
    
    /* Contact Section */
    .contact-section {
        padding: 80px 0;
        background-color: #f8f9fa;
    }
    
    .contact-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
    }
    
    .contact-info {
        flex: 1;
        min-width: 300px;
    }
    
    .contact-form {
        flex: 1;
        min-width: 300px;
    }
    
    .contact-item {
        display: flex;
        margin-bottom: 20px;
    }
    
    .contact-icon {
        margin-right: 15px;
    }
    
    .contact-icon .dashicons {
        font-size: 24px;
        color: #4a90e2;
    }
    
    .contact-text h4 {
        margin: 0 0 5px;
        color: #333;
    }
    
    .contact-text p {
        margin: 0;
        color: #666;
    }
    
    .contact-social {
        margin-top: 30px;
    }
    
    .contact-social h4 {
        margin-bottom: 15px;
        color: #333;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: white;
        transition: border-color 0.3s ease;
    }
    
    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #4a90e2;
        outline: none;
    }
    
    .form-submit {
        text-align: right;
    }
    
    /* WooCommerce Products Section */
    .featured-products-section {
        padding: 80px 0;
        background-color: white;
    }
    
    .woocommerce ul.products {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 30px;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .woocommerce ul.products li.product {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        padding: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }
    
    .woocommerce ul.products li.product:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .woocommerce-loop-product__title {
        font-size: 18px !important;
        margin: 15px 0 !important;
        color: #333;
    }
    
    .woocommerce ul.products li.product .price {
        color: #4a90e2;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 15px;
        display: block;
    }
    
    .woocommerce ul.products li.product .button {
        background-color: #4a90e2;
        color: white;
        border-radius: 4px;
        padding: 10px 20px;
        text-transform: none;
        font-weight: 500;
        margin-top: 10px;
        transition: background-color 0.3s ease;
    }
    
    .woocommerce ul.products li.product .button:hover {
        background-color: #3a7bc8;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .portfolio-grid,
        .services-grid,
        .woocommerce ul.products {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 576px) {
        .portfolio-grid,
        .services-grid,
        .woocommerce ul.products {
            grid-template-columns: 1fr;
        }
        
        .contact-wrapper {
            flex-direction: column;
        }
    }
</style>

<script>
    // Simple Portfolio Filtering
    document.addEventListener('DOMContentLoaded', function() {
        const filters = document.querySelectorAll('.portfolio-filter');
        const items = document.querySelectorAll('.portfolio-item');
        
        filters.forEach(filter => {
            filter.addEventListener('click', function() {
                // Update active filter
                filters.forEach(f => f.classList.remove('active'));
                this.classList.add('active');
                
                // Filter items
                const category = this.getAttribute('data-filter');
                
                items.forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') === category) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>

<?php
get_footer();