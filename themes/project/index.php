<?php

// This is the main template file.

get_header();
// it seems this page isnt quite set the way it's supposed to be.
// add a loop for wordpress to cycle through the posts
if ( have_posts() ) : 
    while ( have_posts() ) : 
        the_post();
// the featured image
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
?>
<!--esc_url for cleaning-->
<section class="post-masthead" style="background: url('<?php echo esc_url($featuredImg[0]);?>')">
    <div>
        <h1><?php the_title(); ?></h1>
    </div>
</section>
<section class="homepage-content">
    <?php echo get_the_content(); ?>
</section>

<?php
    endwhile;
else :
    // if there's no posts... go back to main (for safely translating)
?>
<section class="homepage-content">
    <h2><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></h2>
    <p><?php esc_html_e( 'Please try again.' ); ?></p>
<?php
endif;
get_footer();
?>