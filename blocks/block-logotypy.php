<?php
 $id = 'logotypy-' . $block['id'];
 if( !empty($block['anchor']) ) {
     $id = $block['anchor'];
 }
 $className = 'logotypy ';
 if( !empty($block['className']) ) {
     $className .= ' ' . $block['className'];
 }
 if( !empty($block['align']) ) {
     $className .= 'text-' . $block['align'];
 }
?>
<?php 
    $logosy = new WP_Query( array(
    //  'post__in' => get_option('sticky_posts'),
    'post_type' => 'post',
    // // 'posts_per_page' => 4,
      'category_name' => 'klienci',
      'posts_per_page' => -1,
    ));
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <div class="swiper-container logotypy-carousel">
            <div class="arrows">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="swiper-wrapper">
                  <?php while ( $logosy->have_posts() ) : $logosy->the_post(); ?>
                    <div class="swiper-slide">
                        <div class="img">
                        <?php the_post_thumbnail('medium'); ?>
                        </div>
                    </div>
                  <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
</section>
