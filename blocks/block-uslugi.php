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
   <div class="uslugi-car-wrap">
        <div class="col">
            <div class="title-bl">
                <div class="wraper">
                    <div class="tytul">
                        <?php if(get_field('nad_tytul')) : ?>
                        <span class="nad"><?php the_field('nad_tytul')?></span>
                        <?php endif; ?>
                        <?php if(get_field('tytul_us')) : ?>
                        <<?php the_field('tag')?> class="title"><?php the_field('tytul_us')?></<?php the_field('tag')?>>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php if(get_field('opis_usl')); { ?>
            <?php the_field('opis_usl'); ?>
            <?php } ?>
        </div>
        <?php $uslugi = get_field('uslugi');
        if( $uslugi ): ?>
            <?php foreach( $uslugi as $usluga ):  setup_postdata($usluga);
              $permalink = get_permalink( $usluga->ID );
              $title = get_the_title( $usluga->ID );
              $imagen = get_the_post_thumbnail($usluga->ID, 'medium');
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
                        <div class="content">
                           
                            <span class="title">
                                 <a href="<?php echo esc_url( $permalink ); ?>">
                                <?php if(get_field('tytul_usl',  $usluga->ID )) : ?>
                                    <?php the_field('tytul_usl',  $usluga->ID ); ?>
                                <?php else: ?>
                                    <?php echo esc_html( $title ); ?>
                                <?php endif; ?>
                                </a>
                            </span>
                            
                            <?php if ($imagen ) { ?>
                             <p> <?php echo $ex;  ?></p>
                            <a class="readmore" href="<?php echo esc_url( $permalink ); ?>">Czytaj więcej <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10"><path d="M879.877,562.788l-3.53-4a.81.81,0,0,0-1.248,0,1.1,1.1,0,0,0,0,1.414l2.023,2.293H866.017a1.008,1.008,0,0,0,0,2h11.105l-2.023,2.293a1.1,1.1,0,0,0,0,1.414.811.811,0,0,0,1.248,0l3.53-4A1.1,1.1,0,0,0,879.877,562.788Z" transform="translate(-865.135 -558.495)" fill="#fff"/></svg></a>
                            <?php } ?>
                        </div>
                    </div>
                </article>
                </div>
            <?php endforeach; ?>
           <?php wp_reset_postdata(); ?>
        <?php endif; ?>
   </div>
   <div class="btn-group  justify-content-end">
        <?php  $link = get_field('link_za_usl');
            if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a class="readmore" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                <?php echo esc_html( $link_title ); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10"><path d="M879.877,562.788l-3.53-4a.81.81,0,0,0-1.248,0,1.1,1.1,0,0,0,0,1.414l2.023,2.293H866.017a1.008,1.008,0,0,0,0,2h11.105l-2.023,2.293a1.1,1.1,0,0,0,0,1.414.811.811,0,0,0,1.248,0l3.53-4A1.1,1.1,0,0,0,879.877,562.788Z" transform="translate(-865.135 -558.495)" fill="#a50404"/></svg>
            </a>
        <?php endif; ?>
    </div>
</section>

