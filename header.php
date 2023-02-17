<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- <div class="login-panel" style="width: 120px;"> -->
        <div id="login-panel" class="login-panel">

        <!-- <input id="UsePortalLogin" type="hidden">
            <input id="PottalLoginURL" type="hidden"> -->
            <div class="controls">
                <button class="log-toggle">
                    <svg class="open-action"></svg>
                    <svg class="close-action"></svg>
                    <span class="open-action">Login</span>
                    <span class="close-action">Close</span>
                </button>
            </div>
            <div class="panel">
                <P class="heading">
                    Looking to login to one of our portals?
                    <br>
                    You're in the right place.
                </P>
                <img class="logo" src="<?php echo get_theme_file_uri('/images/pcu-logo-icon.svg')?>">
                <P class="welcome"><strong></strong><br></P>
                <P class="title"></P>
                <form id="login-form" action method="post">
                    <label for="panel-username">Email</label>
                    <input type="text" id="panel-username" name="username">
                    <label for="panel-password">Password</label>
                    <input type="password" id="panel-password" name="password">
                    <input type="submit" value="Login">
                </form>
                <form id="forgot-password-form">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                    <input type="submit" value="Submit">
                </form>
                <P class="forgot-password">
                    <a href id="forgot-password-link">Forgot password?</a>
                </P>
                <P class="login">
                    <a href id="login-link">Already have an account? Login.</a>
                </P>
                <P class="register">Not a member?
                    <a href="#">Sign up here.</a>
                </P>
                <P class="cancel">
                    <a href="#" class="cancel-button">
                        <svg>
                            <use xlink:href=""></use>
                        </svg>
                        Close
                    </a>
                </P>
            </div>
        </div> 

        <header class="site-header" id="header">
        <div class="container">
            <!-- <div class="row justify-content-center">
                <div class="col-12"> -->
            <nav class="navbar navbar-expand-md navbar-dark justify-content-between" id="navbar">
            <a href="<?php echo site_url(); ?>"><img class="site-header__logo" id="logo" 
                    src="<?php echo get_theme_file_uri( '/images/pcu-logo-white.svg' ) ?>"></img></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" 
                            data-target="#navbarCollapse" aria-controls="navbarCollapse" 
                            aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
            <div class="container">
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