<?php
$id = 'uslugi-car-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'uslugi-car ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
   <div class="uslugi-widget">
        <?php $uslugi = get_field('uslugi');
        if( $uslugi ): ?>
            <?php foreach( $uslugi as $usluga ):  setup_postdata($usluga);
              $permalink = get_permalink( $usluga->ID );
              $title = get_the_title( $usluga->ID );
              $imagen = get_the_post_thumbnail($usluga->ID);
              $ex = get_the_excerpt($usluga->ID);
            ?>
            <div class="col">
                <article id="post-<?php the_ID(); ?>" class="con-uslugi" >
                    <div class="wrap">   
                        <h2><a href="<?php echo esc_url( $permalink ); ?>">
                            <?php if(get_field('tytul_usl',  $usluga->ID )) : ?>
                            <?php the_field('tytul_usl',  $usluga->ID ); ?>
                            <?php else: ?>
                            <?php echo esc_html( $title ); ?>
                            <?php endif; ?>
                        </a></h2>
                   
                        <a class="thumbnail" href="<?php echo esc_url( $permalink ); ?>">
                            <?php echo $imagen; ?>
                        </a>
                        
                    </div>
                </article>
                </div>
            <?php endforeach; ?>
           <?php wp_reset_postdata(); ?>
        <?php endif; ?>
   </div>
</section>

