<?php
function my_theme_setup(){
    register_nav_menus( array(
        'header'    => 'Header menu',
        'footer'    => 'Footer menu'
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup');
// Add featured image support for the posts
add_theme_support( 'post-thumbnails' );


// Custom Plugin
// this turns on the supports for the page
function project_init(){
    $args = array(
        'label'     => 'Project',
        'public'    => true,
        'show_ui'   => true,
        'capability_type'   => 'post',
        'taxonomies'    => array( 'category'),
        'hierarchical'  => 'false',
        'query_var'     =>true,
        'menu_icon'     => 'dashicons-album',
        'supports'      => array(
            'title',
            'editor',
            'excerpts',
            'trackbacks',
            'author',
            'post-formats',
            'page-attributes',
        )
    );
    register_post_type('project', $args);
}
add_action('init', 'project_init');
// setting how many posts per page
function project_shortcode(){
    $query = new WP_Query(array('post_type' => 'project', 'post_per_page' => 4, 'order' => 'asc'));
    while ($query -> have_posts()) : $query-> the_post(); ?>
    <div class="project-container">
        <div>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <div>
            <h4><?php the_title(); ?></h4>
            <?php the_content(); ?>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php
    endwhile;
    wp_reset_postdata();
}
add_shortcode('project', 'project_shortcode');

// Add in the support for woocommerce
function customtheme_add_woocommerce_support(){
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

// Add the cart functionality
function enqueue_wc_cart_fragments() {
    wp_enqueue_script( 'wc-cart-fragments' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_wc_cart_fragments' );
// Added this to deal with the variations
function enqueue_variation_script(){
    wp_enqueue_script('wc-add-to-cart-variation');
}
add_action('wp_enqueue_scripts', 'enqueue_variation_script');
// Clear out the preset title, tabs, carts, product, etc
// Remove....
// The title
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
// The price
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
// All add to cart options
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
// All product data tabs
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
// All product attributes
remove_action( 'woocommerce_product_additional_information', 'wc_display_product_attributes', 10 );
// All up-sale products 
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
// All related products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
// All single product variations
remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
// Al single product metadata
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Add the products back in the order of our choosing
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 10 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 15 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 15 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 15 );

add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 15 );

add_action( 'woocommerce_product_additional_information', 'wc_display_product_attributes', 15 );

add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 15 );

add_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 15 );


// add woocommerce support
function web_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_action( 'after_setup_theme', 'web_add_woocommerce_support' );

?>