<?php
get_header();

while(have_posts()) {
    the_post();
    pageBanner();

?>

<div class="container container--narrow page-section">

<h2>Page Content</h2>

</div>
<?php }



    get_footer();
?>