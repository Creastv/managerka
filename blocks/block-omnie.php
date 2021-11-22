<?php
$id = 'omnie-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'omnie';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>

<?php if( get_field('zdjecie_po_stronie') == "Lewa"): ?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="wrap-omnie">
        <div class="left">
             <div class="box">
                 <?php 
                $image = get_field('zdjecie');
                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                } ?>
            </div>
            <span class="ornament-point"></span>
            <span class="ornament-mpoint">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 90" style="enable-background:new 0 0 106 90" xml:space="preserve"><path style="fill:#a41e21" d="M0 90h16.3l2.5-56.7L31.3 90h15.5l12-56.7 4 56.7h17.5l-7-90H53L40.2 61.3 25.8 0H7.3z"/><circle cx="95.8" cy="79.8" r="10.2" style="fill:#2f131d"/></svg>
            </span>
            <?php $link = get_field('button_na_zdjeciu');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="link">
                    <a href="<?php echo esc_url( $link_url ); ?>" class="btn btn-main" target="<?php echo esc_attr( $link_target ); ?>">
                       <?php echo esc_html( $link_title ); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10"><path d="M879.877,562.788l-3.53-4a.81.81,0,0,0-1.248,0,1.1,1.1,0,0,0,0,1.414l2.023,2.293H866.017a1.008,1.008,0,0,0,0,2h11.105l-2.023,2.293a1.1,1.1,0,0,0,0,1.414.811.811,0,0,0,1.248,0l3.53-4A1.1,1.1,0,0,0,879.877,562.788Z" transform="translate(-865.135 -558.495)" fill="#fff"/></svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="right">
            <div class="con">
                <InnerBlocks />
            </div>
        </div>
    </div>
</section>

<?php else : ?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="wrap-omnie2">
        <div class="left">
            <div class="con">
                <InnerBlocks />
            </div>
        </div>
        <div class="right">
             <div class="box">
                <?php 
                $image = get_field('zdjecie');
                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                } ?>
            <span class="ornament-point"></span>
            <span class="ornament-mpoint">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 90" style="enable-background:new 0 0 106 90" xml:space="preserve"><path style="fill:#a41e21" d="M0 90h16.3l2.5-56.7L31.3 90h15.5l12-56.7 4 56.7h17.5l-7-90H53L40.2 61.3 25.8 0H7.3z"/><circle cx="95.8" cy="79.8" r="10.2" style="fill:#2f131d"/></svg>
            </span>
            <?php $link = get_field('button_na_zdjeciu');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="link">
                    <a href="<?php echo esc_url( $link_url ); ?>" class="btn btn-main" target="<?php echo esc_attr( $link_target ); ?>">
                       <?php echo esc_html( $link_title ); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10"><path d="M879.877,562.788l-3.53-4a.81.81,0,0,0-1.248,0,1.1,1.1,0,0,0,0,1.414l2.023,2.293H866.017a1.008,1.008,0,0,0,0,2h11.105l-2.023,2.293a1.1,1.1,0,0,0,0,1.414.811.811,0,0,0,1.248,0l3.53-4A1.1,1.1,0,0,0,879.877,562.788Z" transform="translate(-865.135 -558.495)" fill="#fff"/></svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php endif; ?>
