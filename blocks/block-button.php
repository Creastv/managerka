<?php
$id = 'btn-group-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'btn-group ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
$classFlex =" ";

if( !empty($block['align']) ) {
    if($block['align'] == 'center'){
        $classFlex .= ' justify-content-center';
    } elseif($block['align'] == 'right') {
        $classFlex .= ' justify-content-end';
    }
    elseif($block['align'] == 'left') {
        $classFlex .= ' justify-content-start';
    }
}
$url = get_field('url');
$tytul = get_field('text');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo esc_attr($classFlex); ?>">
<?php if(get_field('styl') == "Button") { ?>
    <?php  $link = get_field('link_tbtn');
        if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
        <a class="btn-main" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
            <?php echo esc_html( $link_title ); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10"><path d="M879.877,562.788l-3.53-4a.81.81,0,0,0-1.248,0,1.1,1.1,0,0,0,0,1.414l2.023,2.293H866.017a1.008,1.008,0,0,0,0,2h11.105l-2.023,2.293a1.1,1.1,0,0,0,0,1.414.811.811,0,0,0,1.248,0l3.53-4A1.1,1.1,0,0,0,879.877,562.788Z" transform="translate(-865.135 -558.495)" fill="#fff"/></svg>
        </a>
    <?php endif; ?>
<?php } else { ?>
    <?php  $link = get_field('link_tbtn');
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
    <?php } ?>
</div>


