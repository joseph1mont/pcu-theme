<footer>
    <div id="footer-main" class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-lg-5">
                <img src="<?php echo get_theme_file_uri( '/images/pcu-logo-color.svg' ) ?>" alt="PCU Colored Logo">
                <div class="details">
                    <div class="boxcrush_social">
                        <a href="#" title="facebook">
                            <svg></svg>
                        </a>
                        <a href="#" title="facebook">
                            <svg></svg>
                        </a>
                        <a href="#" title="facebook">
                            <svg></svg>
                        </a>
                    </div>
                    <div class="content-block container">
                        <div>
                            <p style="text-align: justify">
                                <strong>POINT COMFORT UNDERWRITERS</strong>
                                &nbsp
                                <br>
                                PCU is a healthcare management and administration company providing cost-saving solutions and insurance for international travelers, multi-national organizations, government sponsored programs and other international establishments.  PCU holds agreements with several well-known insurers and as such, has the authority to quote, bind and administer a range of insurance products on their behalf.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    <div class="col-lg-2"></div>
    <div class="col-11 col-lg-5">
        <nav>
            <ul class="nav nav-sitemap">
                <li class="nav-item">
                    <a class="nav-link top-level" href="#" targe="_self"><strong>Who We Are</strong></a>
                        <?php
                            wp_nav_menu(array(
                                'menu'              => 'footer-menu1',
                                'theme_location'    => 'footerMenuLocation1',
                                'menu_class'        => 'nav flex-column'
                            ));
                        ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link top-level" href="#" targe="_self"><strong>Producers</strong></a>
                    <?php
                            wp_nav_menu(array(
                                'menu'              => 'footer-menu2',
                                'theme_location'    => 'footerMenuLocation2',
                                'menu_class'        => 'nav flex-column'
                            ));
                        ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link top-level" href="#" targe="_self"><strong>Services</strong></a>
                    <?php
                            wp_nav_menu(array(
                                'menu'              => 'footer-menu3',
                                'theme_location'    => 'footerMenuLocation3',
                                'menu_class'        => 'nav flex-column'
                            ));
                        ?>
                </li>
            </ul>
        </nav>
    </div>
        </div>
    </div>


</footer>

<?php wp_footer(); ?>
</body>
</html>