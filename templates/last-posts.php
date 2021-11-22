<?php 
    $lop = new WP_Query( array(
    'post__in' => get_option('sticky_posts'),
    'posts_per_page' => 3,
    'post_type' => 'post',
    
     
    ));
?>
<div class="title-bl ">
   <div class="wraper">
   <div class="tytul">
   <span class="nad">Menagerka<span>.com</span></span>
   <h4 class="title">  Wyróżnione posty </h4>
   </div>
   </div>
</div>
<?php while ( $lop->have_posts() ) : $lop->the_post(); ?>
<article id="post-<?php the_ID(); ?>" class="last-post" >
    <a  class="thumbnail" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('box'); ?>
    </a>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</article>
<?php endwhile; wp_reset_query(); ?>