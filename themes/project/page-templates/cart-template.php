<?php
/**
 * Template Name: Cart
 * Description: A custom template for the cart.
 * 
 */
get_header();
?>
<section>
    <?php
        echo do_shortcode( '[woocommerce_cart]' );
    ?>
</section>

<?php
get_footer();
?>