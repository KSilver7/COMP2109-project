<?php
/**
 * The main template file
 */
get_header();

// featured image
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<section class="post-masthead" style="background: url('<?php echo $featuredImg[0];?>')">
    <div>
        <h1><?php the_title(); ?></h1>
    </div>
</section>
<section class="homepage-content">
    <?php echo get_the_content(); ?>
</section>
<?php
get_footer();
?>
