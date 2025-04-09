<?php
/**
 * Template Name: Checkout Page
 * Description: A custom template for the checkout page.
 */
get_header();
?>
<section>
    <?php
        echo do_shortcode( '[woocommerce_checkout]');
    ?>
</section>

<?php
get_footer();
?>