<?php get_header(); ?>
<h2 style="text-align:center;">Recepten overzicht</h2>
<div class="grid">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'recipe-card');
        endwhile;
    else :
        echo '<p style="text-align:center;">Geen recepten gevonden.</p>';
    endif;
    ?>
</div>
<?php get_footer(); ?>