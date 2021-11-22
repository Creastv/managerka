<?php
$id = 'wy-posty-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'wy-posty ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>
<?php 
    $wyroPosty = new WP_Query( array(
    'post__in' => get_option('sticky_posts'),
    // 'post_type' => 'post',
    // 'posts_per_page' => 4,
      'category_name' => 'publikacje',
      'posts_per_page' => 4,
    ));
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container-fluid">
        <div class="wy-posty-wrap">
                <?php while ( $wyroPosty->have_posts() ) : $wyroPosty->the_post(); ?>
                <?php get_template_part( 'templates/content-publikacje', get_post_format() ); ?>
                <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>