<?php
$id = 'cennik-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$classes = 'cennik ';
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
?>
<div id="<?php echo $id; ?>" class="<?php echo esc_attr($classes); ?>" >
<?php if( have_rows('pakiety') ): ?>
    <div class="pakiety">
    <?php while( have_rows('pakiety') ): the_row();
    $wyr = " ";
    if(get_sub_field('wyroznione')) : $wyr = " scall"; endif;
    ?>
        <div class="pakiet <?php echo $wyr; ?>">
            <div class="wrap-pa">
                <div class="head-pa">
                    <h3 class="title-pa"><?php the_sub_field('nazwa_pakietu'); ?></h3>
                    <div class="cena-pa">
                       <?php the_sub_field('cena_pakietu'); ?>
                    </div>
                </div>
                <div class="content-pa">
                    <?php if(get_sub_field('tytul')) { ?>
                        <span><?php the_sub_field('tytul'); ?></span>
                    <?php } ?>
                    <?php if( have_rows('w_cenie') ): ?>
                        <ul>
                        <?php while( have_rows('w_cenie') ): the_row();
                         $no = "yes";
                        if(!get_sub_field('zawiera_pakiet')) : $no = "no"; endif;
                        ?>
                            <li class="<?php echo $no; ?>">
                               <?php the_sub_field('zaleta'); ?>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <?php 
                $link = get_sub_field('link');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <div class="cta-pa">
                        <a class="btn btn-main" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10"><path d="M879.877,562.788l-3.53-4a.81.81,0,0,0-1.248,0,1.1,1.1,0,0,0,0,1.414l2.023,2.293H866.017a1.008,1.008,0,0,0,0,2h11.105l-2.023,2.293a1.1,1.1,0,0,0,0,1.414.811.811,0,0,0,1.248,0l3.53-4A1.1,1.1,0,0,0,879.877,562.788Z" transform="translate(-865.135 -558.495)" fill="#fff"/></svg></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
<?php endif; ?>
</div>