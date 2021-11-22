<?php get_header(); ?>
<div class="page-content page-content-index">
    <div class="page-main-content">
        <div class="wraper-posts">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php if(is_category('34')) { ?> 
                    <?php get_template_part( 'templates/content-projekty', get_post_format() ); ?>
                <?php } elseif(is_category('31') ) { ?> 
                    <?php get_template_part( 'templates/content-publikacje', get_post_format() ); ?>
                <?php } elseif(is_category('26') || is_category('38') ) { ?> 
                    <?php get_template_part( 'templates/content-partnerzy', get_post_format() ); ?>
                <?php } else { ?>
                    <?php get_template_part( 'templates/content-publikacje', get_post_format() ); ?>
                <?php } ?>
                <?php endwhile; ?>
            <?php else : ?>
                <h1 class="text-center">Nic nie znaleziono</h1>
            <?php endif; ?>
        </div>
        <?php if(paginate_links()) { ?>
        <div class="pagin">
            <?php pagination_bars(); ?>
        </div>
        <?php } ?>
    </div>
     <aside class="page-sidebar" >
        <div class="wraper">
            <?php do_action( 'before_sidebar' ); ?>
            <?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?><?php endif; ?>
        </div>
    </aside>
</div>
<?php get_footer(); ?>
<?php if(!is_category('34') || !is_category('31')) { ?> 
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script>
    var elem = document.querySelector('.wraper-posts');
    var msnry = new Masonry( elem, {
    // options
    itemSelector: '.con',
    });
    </script>
<?php } ?>
