<article id="post-<?php the_ID(); ?>" class="con-projekty con" >
    <div class="wrap">   
        <a class="thumbnail" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumb'); ?>
        </a>
        <div class="content">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          
        </div>
    </div>
</article>

