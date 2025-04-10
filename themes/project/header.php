<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
<!-- Link to my css page -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/css/styles.css' ); ?>">

</head>
<body <?php body_class(); ?>>
<header class="site-header"><!-- this class is for overall styling-->
    <div class="header-wrapper">
        <div class="site-logo-container">
            <!--This is where my site logo is, it'll link to my home page-->
            <a href="<?php echo esc_url( home_url() ); ?>">
                <!-- Photo as a logo-->
                <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2025/04/project.svg' ) ); ?>" alt="header logo" class="site-logo">
            </a>
        </div>
        <nav class="site-nav">
            <?php
            // php hook for wordpress to use the menu
            wp_nav_menu( array(
                'menu'              => 'Project',
                'theme_location'    => '',
                'depth'             => 2,
                'fallback_cb'       => false
            ));
            ?>
        </nav>
        </div><!-- end of header wrapper -->
    </header>    
