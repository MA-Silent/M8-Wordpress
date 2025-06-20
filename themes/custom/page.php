<?php
get_header();
?>
<?php the_post(); ?>
<div class="container my-5">
    <h1 class="mt-5"><?php the_title(); ?></h1>
    <div class="col-lg-8 px-0">
        <?php the_content() ?>
    </div>
</div>
<?php
get_footer();