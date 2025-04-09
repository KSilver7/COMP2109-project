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
<header>
            <div>
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <!-- Photo as a logo-->
                    <img src="<?php echo esc_url( home_url( 'http://project.local/wp-content/uploads/2025/04/logo.svg' ) ); ?>" alt="header logo" class="site-logo">>
                </a>
            </div>
            <nav>
                <?php
                // php hook for wordpress to use the menu
                wp_nav_menu( array(
                    'menu'              => 'main',
                    'theme_location'    => '',
                    'depth'             => 2,
                    'fallback_cb'       => false
                ));
                ?>
            </nav>
        </header>    
</body>
</html>