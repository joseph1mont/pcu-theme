<?php
get_header();
?>

<section class="container container--narrow page-section">
<?php
    while(have_posts()) {
        the_post(); ?>
        <div class="post-item">
            <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
<?php } ?>

</section>


<?php
get_footer();
?>
