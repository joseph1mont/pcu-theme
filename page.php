<?php
get_header();

while(have_posts()) {
    the_post();
    pageBanner();

?>

<div class="container container--narrow page-section page-default">
    <div class="row justify-content-center">
        <div class="col-md col-md-10">
            <div class="content-block container"></div>

<?php the_content() ?>

            </div>
        </div>
    </div>
</div>
<?php }



    get_footer();
?>