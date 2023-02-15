<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="site-header" id="header">
        <div class="container">
            <!-- <div class="row justify-content-center">
                <div class="col-12"> -->
            <nav class="navbar navbar-expand-md navbar-dark justify-content-between" id="navbar">
            <a href="<?php echo site_url(); ?>"><img class="site-header__logo" id="logo" 
                    src="<?php echo get_theme_file_uri( '/images/pcu-logo-white.svg' ) ?>"></img></a>


            <div class="container">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                            data-target="#navbarCollapse" aria-controls="navbarCollapse" 
                            aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
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
                        </div>
                    </nav>
                        <!-- </div>
                        </div> -->
        </div>


</header>