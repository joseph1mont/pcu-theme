<?php
/**
* Template Name: Contact Page
*/

get_header();

while(have_posts()) {
    the_post();
?>

<div class="page-banner contact-page-banner">
    <div class="page-banner__bg-image">
        <video class="featured-video" video autobuffer autoplay muted loop playsinline>
            <source src="<?php echo get_theme_file_uri('/images/downtown-indianapolis-canal.mp4')?>" type="video/mp4">
        </video>
        <div class="page-banner__content container container--narrow">    
            <H1 class="page-banner__title"><?php the_title() ?></H1>
        </div>
    </div>
</div>
</div>
</div>

<section class="contact-info page-section">
    <div class="container container--narrow">
        <div class="row justify-content-center">
            <div class="col-md col-md-10">
                <div class="row" data-sf-element="Row">
                    <div id="Content_C007_Col00" class="sf_colsIn col-lg-6" datat-sf-element="Column 1" data-placeholder-label="Column 1">
                        <div class="content-block container">
                            <div>
                                <h3 class="legend without-border">Contact&nbsp;Info</h3>
                                <p>
                                    <strong>
                                        Phone:&nbsp;
                                        <a href="tel:+13172102010">+1.317.210.2010</a>
                                    </strong>
                                </p>
                                <address>
                                    <strong>
                                        Point Comfort Underwriters
                                        <br>
                                        306 Prospect Street, Suite 100
                                        <br>
                                        Indianapolis, IN 46225&nbsp;
                                    </strong>
                                        <br>
                                        <strong>Email:</strong>&nbsp;
                                        <a href="mailto:info@pointcomfort.com">info@pointcomfort.com</a> 
                                </address>
                                <p>Call during regular business hours: 9:00 AM to 6:00 PM EST, Monday – Friday, and speak with real people.</p>
                                <p>
                                    After-hours calls are handled by our after-hours call service. Or, you may email us at&nbsp;
                                    <a href="mailto:info@pointcomfort.com">info@pointcomfort.com</a>.<br>
                                </p>
                                <p>Point Comfort Underwriters’ offices are located in the historic Turnverein building in the up-and-coming Bates-Hendricks Neighborhood in Indianapolis, Indiana. Come visit us if you are in the neighborhood!</p>
                                <p>We look forward to hearing from you.</p>
                            </div>
                        </div>
                    </div>
                    <div id="Content_C007_Col00" class="sf_colsIn col-lg-6" datat-sf-element="Column 1" data-placeholder-label="Column 1">
                        <div class="content-block container">
                            <div>
                                <h3 class="without-border">Department Emails</h3>
                                <p></p>
                                <p>
                                    <strong>
                                        Claims
                                    </strong>
                                </p>
                                <p>
                                    <a href="mailto:claims@pointcomfort.com">claims@pointcomfort.com</a>
                                </p>
                                <p>
                                    <strong>
                                        Client Relations
                                    </strong>
                                </p>
                                <p>
                                    <a href="mailto:service@pointcomfort.com">service@pointcomfort.com</a>
                                </p>
                                <p>
                                    <strong>
                                        Provider Relations
                                    </strong>
                                </p>
                                <p>
                                    <a href="mailto:providers@pointcomfort.com">providers@pointcomfort.com</a>
                                </p>    
                                
                                
                                <p>
                                    <strong>
                                        Clinical
                                    </strong>
                                </p>
                                <p>
                                    <a href="mailto:clinical@pointcomfort.com">clinical@pointcomfort.com</a>
                                </p>
                                <p>
                                    <strong>
                                        Accounting
                                    </strong>
                                </p>
                                <p>
                                    <a href="mailto:accounting@pointcomfort.com">accounting@pointcomfort.com</a>
                                </p>
                                <p>
                                    <strong>
                                        IT
                                    </strong>
                                </p>
                                <p>
                                    <a href="mailto:itdept@pointcomfort.com">itdept@pointcomfort.com</a>
                                </p>  
                                <p>
                                    <strong>
                                        Human Resouces
                                    </strong>
                                </p>
                                <p>
                                    <a href="mailto:hr@pointcomfort.com">hr@pointcomfort.com</a>
                                </p>  
                            </div>
                        </div>
                    </div>
                </div>
                <img src="http://pointcomfortcom.local/wp-content/uploads/2023/02/point-comfort-underwriters-interior-scaled.jpg" title="Point Comfort Underwriters- Interior" alt="Point Comfort Underwriters- Interior">
            </div>
        </div>
    </div>
</section>




<?php }
    get_footer();
?>