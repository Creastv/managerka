<?php
$id = 'bg-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'bg-tlo ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
$kon = get_field('kontener');
$konClass = 'container-fluid';
if($kon == "Box") { $konClass = 'container'; }

$full = 'full';
if(($kon == "Normalny")) { $full = 'normal'; }

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="<?php echo esc_attr($full); ?>" style="background-color:<?php the_field('kolor_tla'); ?>">
        <div class="<?php echo esc_attr($konClass); ?>">
            <InnerBlocks />
        </div>
    </div>
</section>

