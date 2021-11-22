<?php
$id = 'tytul-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'title-bl ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
$classFlex ="wraper";

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
$nadTytulem = get_field('nad_tytulem');
$tytul = get_field('tytul');
$tag = get_field('tag');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
   <div class="<?php echo esc_attr($classFlex); ?>">
    <div class="tytul">
        <span class="nad"><span><?php echo $nadTytulem; ?></span></span>
        <<?php echo $tag; ?> class="title">  <?php echo $tytul; ?> </<?php echo $tag; ?>>
    </div>
   </div>
</div>

