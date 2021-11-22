<?php get_header(); ?>
<article id="page-<?php the_ID(); ?>" class=" hentry">
    <div id="tytul-block_6" class="title-bl ">
        <div class="wraper">
            <div class="tytul">
                <span class="nad"><span>Managerka.com</span></span>
                <h1 class="title">  Klienci </h1>
            </div>
        </div>
    </div>
    <?php if ( have_posts() ) : ?>
    <ul class="wrap-klienci">
        <?php
        $args = array(
            'category_name' => 'klienci',
            'posts_per_page' => -1,
            'order' => 'ASC',
        );
        $your_query = new WP_Query($args);
        while ($your_query->have_posts()) : $your_query->the_post(); ?>
        <li><?php the_post_thumbnail('box'); ?></li>
        <?php endwhile; ?>
    </ul>
    <?php endif; wp_reset_query(); ?>
</article>
<?php get_footer(); ?>