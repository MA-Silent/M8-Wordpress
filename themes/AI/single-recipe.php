<?php get_header(); ?>

<main style="max-width:800px;margin:auto;padding:2rem;">
    <h1><?php the_title(); ?></h1>
    <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
    <?php the_content(); ?>

    <h3>Ingrediënten:</h3>
    <?php the_terms(get_the_ID(), 'ingredient', '<ul><li>', '</li><li>', '</li></ul>'); ?>
</main>

<?php get_footer(); ?>