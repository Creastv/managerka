<article id="post-<?php the_ID(); ?>" class="con-partnerzy con" >
    <div class="wrap">   
        <a class="thumbnail" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumb'); ?>
        </a>
        <div class="content">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <!-- <a class="readmore" href="<?php the_permalink(); ?>">Czytaj więcej <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10"><path d="M879.877,562.788l-3.53-4a.81.81,0,0,0-1.248,0,1.1,1.1,0,0,0,0,1.414l2.023,2.293H866.017a1.008,1.008,0,0,0,0,2h11.105l-2.023,2.293a1.1,1.1,0,0,0,0,1.414.811.811,0,0,0,1.248,0l3.53-4A1.1,1.1,0,0,0,879.877,562.788Z" transform="translate(-865.135 -558.495)" fill="#414141"/></svg></a> -->
        </div>
    </div>
</article>

