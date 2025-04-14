<?php
/**
 * Template for displaying WooCommerce pages
 *
 * @package MadHub
 */

get_header();
?>

<div class="container">
    <div class="woocommerce-content-wrapper">
        <?php woocommerce_content(); ?>
    </div>
</div>

<style>
    /* Styles WooCommerce personnalisés */
    .woocommerce-content-wrapper {
        padding: 40px 0;
    }
    
    /* Page Produits */
    .woocommerce .woocommerce-result-count,
    .woocommerce .woocommerce-ordering {
        margin-bottom: 30px;
    }
    
    .woocommerce .woocommerce-ordering select {
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    
    .woocommerce nav.woocommerce-pagination {
        margin-top: 40px;
    }
    
    .woocommerce nav.woocommerce-pagination ul {
        border: none;
    }
    
    .woocommerce nav.woocommerce-pagination ul li {
        border: none;
        margin: 0 5px;
    }
    
    .woocommerce nav.woocommerce-pagination ul li a,
    .woocommerce nav.woocommerce-pagination ul li span {
        padding: 10px 15px;
        background-color: #f8f9fa;
        border-radius: 4px;
        color: #333;
        transition: all 0.3s ease;
    }
    
    .woocommerce nav.woocommerce-pagination ul li a:hover,
    .woocommerce nav.woocommerce-pagination ul li span.current {
        background-color: #4a90e2;
        color: white;
    }
    
    /* Page produit unique */
    .woocommerce div.product div.images .woocommerce-product-gallery__wrapper {
        border-radius: 8px;
        overflow: hidden;
    }
    
    .woocommerce div.product .product_title {
        font-size: 28px;
        margin-bottom: 15px;
    }
    
    .woocommerce div.product p.price {
        color: #4a90e2;
        font-size: 24px;
        margin-bottom: 20px;
    }
    
    .woocommerce div.product .woocommerce-product-rating {
        margin-bottom: 15px;
    }
    
    .woocommerce div.product form.cart {
        margin-top: 30px;
    }
    
    .woocommerce div.product form.cart div.quantity {
        margin-right: 15px;
    }
    
    .woocommerce .quantity .qty {
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    
    .woocommerce div.product form.cart .button {
        background-color: #4a90e2;
        color: white;
        text-transform: none;
        font-weight: 500;
        padding: 12px 25px;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }
    
    .woocommerce div.product form.cart .button:hover {
        background-color: #3a7bc8;
    }
    
    .woocommerce div.product .woocommerce-tabs ul.tabs {
        margin-bottom: 30px;
    }
    
    .woocommerce div.product .woocommerce-tabs ul.tabs li {
        background-color: #f8f9fa;
        border-radius: 4px 4px 0 0;
        margin-right: 5px;
    }
    
    .woocommerce div.product .woocommerce-tabs ul.tabs li a {
        font-weight: 500;
        color: #666;
        padding: 10px 20px;
    }
    
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
        background-color: white;
        border-bottom-color: white;
    }
    
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active a {
        color: #4a90e2;
    }
    
    /* Panier */
    .woocommerce table.shop_table {
        border-radius: 8px;
        border: none;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .woocommerce table.shop_table th {
        background-color: #f8f9fa;
        padding: 15px;
        font-weight: 600;
    }
    
    .woocommerce table.shop_table td {
        padding: 15px;
    }
    
    .woocommerce-cart table.cart img {
        width: 80px;
        border-radius: 4px;
    }
    
    .woocommerce-cart table.cart td.actions .coupon .input-text {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        min-width: 200px;
    }
    
    .woocommerce-cart table.cart td.actions .button {
        background-color: #4a90e2;
        color: white;
        padding: 12px 20px;
        border-radius: 4px;
        text-transform: none;
        font-weight: 500;
    }
    
    .woocommerce-cart table.cart td.actions .button:hover {
        background-color: #3a7bc8;
    }
    
    .woocommerce-cart table.cart td.actions .button[name="update_cart"] {
        background-color: #6c757d;
    }
    
    .woocommerce-cart table.cart td.actions .button[name="update_cart"]:hover {
        background-color: #5a6268;
    }
    
    .woocommerce .cart-collaterals .cart_totals,
    .woocommerce-page .cart-collaterals .cart_totals {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 20px;
    }
    
    .woocommerce .cart-collaterals .cart_totals h2,
    .woocommerce-page .cart-collaterals .cart_totals h2 {
        font-size: 22px;
        margin-bottom: 20px;
    }
    
    .woocommerce-cart .wc-proceed-to-checkout a.checkout-button {
        background-color: #4a90e2;
        text-transform: none;
        font-weight: 500;
    }
    
    .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover {
        background-color: #3a7bc8;
    }
    
    /* Checkout */
    .woocommerce-checkout .woocommerce-billing-fields h3,
    .woocommerce-checkout .woocommerce-additional-fields h3,
    #order_review_heading {
        font-size: 22px;
        margin-bottom: 20px;
    }
    
    .woocommerce form .form-row input.input-text,
    .woocommerce form .form-row textarea {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    
    .woocommerce-checkout #payment {
        background-color: #f8f9fa;
        border-radius: 8px;
    }
    
    .woocommerce-checkout #payment div.payment_box {
        background-color: #e9ecef;
    }
    
    .woocommerce-checkout #payment div.payment_box::before {
        border-bottom-color: #e9ecef;
    }
    
    #add_payment_method #payment ul.payment_methods,
    .woocommerce-cart #payment ul.payment_methods,
    .woocommerce-checkout #payment ul.payment_methods {
        border-bottom: 1px solid #ddd;
    }
    
    .woocommerce #payment #place_order,
    .woocommerce-page #payment #place_order {
        background-color: #4a90e2;
        text-transform: none;
        font-weight: 500;
        padding: 12px 25px;
    }
    
    .woocommerce #payment #place_order:hover,
    .woocommerce-page #payment #place_order:hover {
        background-color: #3a7bc8;
    }
    
    /* My Account */
    .woocommerce-account .woocommerce-MyAccount-navigation {
        width: 25%;
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 20px;
    }
    
    .woocommerce-account .woocommerce-MyAccount-content {
        width: 73%;
    }
    
    .woocommerce-account .woocommerce-MyAccount-navigation ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .woocommerce-account .woocommerce-MyAccount-navigation ul li {
        margin-bottom: 10px;
    }
    
    .woocommerce-account .woocommerce-MyAccount-navigation ul li a {
        display: block;
        padding: 10px 15px;
        color: #666;
        border-radius: 4px;
        transition: all 0.3s ease;
    }
    
    .woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a,
    .woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover {
        background-color: #4a90e2;
        color: white;
    }
    
    .woocommerce-account .woocommerce-MyAccount-content {
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .woocommerce-account .woocommerce-MyAccount-content h2,
    .woocommerce-account .woocommerce-MyAccount-content h3 {
        margin-bottom: 20px;
    }
    
    .woocommerce-account .addresses .title .edit {
        float: right;
        color: #4a90e2;
    }
    
    .woocommerce form .form-row .select2-container .select2-selection--single {
        height: 40px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    
    .woocommerce form .form-row .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 40px;
        padding-left: 15px;
    }
    
    .woocommerce form .form-row .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 38px;
    }
</style>

<?php
get_footer();