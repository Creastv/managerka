<?php get_header(); ?>
<article id="page-<?php the_ID(); ?>" class=" hentry">
    <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</article>
<?php get_footer(); ?>