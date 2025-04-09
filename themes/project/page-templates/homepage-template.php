<?php
/**
 * Template Name: Project Homepage
 * Template Post Type: page
 * Description: A custom homepage template.
 */
get_header();
?>
<main>
   <!-- This is the homepage template for the giant project-->
   <section class="home-masthead" style="background-image: url('<?php echo wp_kses_post(get_field('masthead_image')); ?>')">
        <div>
            <h1><?php echo wp_kses_post(get_field('masthead_title'));?></h1>
        </div>
    </section>
    <section class="home-row">
        <div class="home-row-one">
            <h2><?php echo wp_kses_post(get_field('row_one_title'));?></h2>
            <p><?php echo wp_kses_post(get_field('row_one_text'));?></p>
        </div>
    </section>
</main>
<?php

get_footer();
?>