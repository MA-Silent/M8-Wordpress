<article class="recipe-card">
    <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
        <h3><?php the_title(); ?></h3>
    </a>
</article>