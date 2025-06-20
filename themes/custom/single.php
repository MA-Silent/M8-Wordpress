<?php
get_header();
?>
<?php the_post(); ?>
<div class="container my-5">
    <h1 class="mt-5"><?php the_title(); ?></h1>
    <div class="bg-opacity-25 bg-black p-2 rounded" style="width: fit-content;">
        <p class="text-warning " style="width: fit-content;"><?php the_date() ?></p>
        <p class="text-danger mb-0" style="width: fit-content;">Author: <?php the_author() ?></p>
    </div>
    <div class="col-lg-8 px-0">
        <?php the_excerpt() ?>
    </div>
    <?php the_post_navigation(
        [
            'next_text' => __( 'Next post', 'ma-theme' ),
            'prev_text' => __( 'Previous post', 'ma-theme' ),
        ] 
    ); ?>
</div>
<?php
get_footer();