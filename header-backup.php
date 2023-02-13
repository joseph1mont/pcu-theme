<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head();; ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="site-header" id="header">
            <div class="container">
                <a href="<?php echo site_url(); ?>"><img class="site-header__logo" id="logo" 
                src="<?php get_theme_file_uri( '/images/pcu-logo-white.svg' ) ?>"></a>
                <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
                <div class="site-header__menu group">
                    <nav class="main-navigation" id="navbar">
                        <?php
                            wp_nav_menu([
                            'menu'            => 'primary-top',
                            'theme_location'  => 'headerMenuLocation',
                            'container'       => 'div',
                            'container_id'    => 'navbarCollapse',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_id'         => false,
                            'menu_class'      => 'nav navbar-nav mr-auto',
                            'depth'           => 2,
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker(),
                            ]);
                        ?>
                    </nav>
                </div>
            </div>
        </header>