<?php get_header(); ?>

<?php
if (is_page('contact')): ?>

<?php the_content(); ?>

<?php else: ?>
    <div class="hero">
        <img src="<?php echo get_template_directory_uri(); ?>/hero.jpg" alt="Hero image" />
    </div>

    <h2 style="text-align:center;">Laatste recepten</h2>

    <div class="grid">
        <?php
        $query = new WP_Query(['post_type' => 'recipe', 'posts_per_page' => 12]);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                get_template_part('template-parts/content', 'recipe-card');
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p style="text-align:center;">Geen recepten gevonden.</p>';
        endif;
        ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>