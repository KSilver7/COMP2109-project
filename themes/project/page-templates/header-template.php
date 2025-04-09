<?php
/**
 * Template Name: Header
 * Decription: Project header template
 */
get_header();
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
    <section class="project-header-template">
        <div style="background-image: url('<?php echo $featuredImg[0]; ?>');"></div>
        <div>
<!-- title goes here-->
            <h1><?php the_title(); ?></h1>
            <p><?php echo get_the_content(); ?></p>
        </div>
<?php
get_footer();
?>