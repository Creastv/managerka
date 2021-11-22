<?php get_header(); ?> 
<div class="page-content page-content-single">
    <article class="page-main-content">
    <div id="page-<?php the_ID(); ?>" class="hentry">
        <?php if (have_posts()) :
            while ( have_posts() ) : the_post(); ?>
                <div class="entry-post-categories">
					<?php the_category( ', ' ); ?>
                </div>
                  <?php if ( function_exists('yoast_breadcrumb')  ) { ?>
                    <?php yoast_breadcrumb( '<div id="breadcrumbs">','</div><br>' ); ?>
                <?php } ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="thumbnail">
                    <?php $image = get_field('zdjecie');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    } else {
                        the_post_thumbnail('large'); 
                    } ?>
                </div>
                <div class="entry-content">
                <?php the_content(); ?>
                </div>
                 <?php if(!empty(the_tags())):?>
                    <div class="entry-post-tags">
						<div class="tagcloud">
							<?php the_tags( '', ', ', '' ); ?>
						</div>
                    </div>
                    <?php endif;?>
                <div class="entry-footer">
                    <div class="bottom">
                    <?php echo do_shortcode("[addtoany]"); ?>
                    </div>
                </div>

                <?php if(in_category('publikacje')  ) { ?> 

                <div id="author-bio">
                <?php
                    $pic_object = get_field( 'zdjecie', 'user_' . $value['ID'] ); 
                    $pic = ( $pic_object ? '<img src="' . $pic_object['sizes']['thumbnail']. '" alt="' . $pic_object['alt'] . '" />' : '' );
                ?>
                <?php echo $pic; ?>
                <?php   $av_id = get_the_author_meta('ID');
                    $im = get_field('avatar_', 'user_'. $av_id); ?>
                    <?php  if (!empty( $im )) { ?>
                        <div id="author-avatar"><img style="max-width:60px; height:auto;" src="<?php echo esc_url($im['url']); ?>" alt="<?php echo esc_attr($im['alt']); ?>" /></div>
                    <?php } elseif (get_avatar( get_the_author_meta( 'ID' ), 60 )) { ?>
                        <div id="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?></div>
                    <?php } ?>
                    <div id="author-details">
                        <div class="author-head">
                            <div class="title">
                                <h2><?php the_author_posts_link(); ?></h2>
                                <i><?php $author_id = get_the_author_meta('ID'); the_field('pozycja', 'user_'. $author_id); ?></i>
                            </div>
                            <div class="links">
                            <?php  if (get_the_author_meta('user_url') ) { ?>
                            <a href="<?php the_author_meta('user_url'); ?>" class="author-website" target="_blank">
                            <i class="fas fa-link"></i>
                            </a>
                            <?php } ?>
                            <?php  if (get_the_author_meta('linkedin') ) { ?>
                            <a href="<?php the_author_meta('linkedin'); ?>" class="author-linkedin" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                            </a>
                            <?php } ?>
                            <?php  if (get_the_author_meta('facebook') ) { ?>
                            <a href="<?php the_author_meta('facebook'); ?>" class="author-facebook" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                            </a>
                            <?php } ?>
                            <?php  if (get_the_author_meta('twitter') ) { ?>
                            <a href="<?php the_author_meta('twitter'); ?>" class="author-twitter" target="_blank">
                            <i class="fab fa-twitter"></i>
                            </a>
                            <?php }?>
                            <?php  if (get_the_author_meta('instagram') ) { ?>
                            <a href="<?php the_author_meta('instagram'); ?>" class="author-instagram" target="_blank">
                            <i class="fab fa-instagram"></i>
                            </a>
                            <?php } ?>
                            </div>
                        </div>
                        <div class="author-footer">
                           <p> <?php the_author_description(); ?></p>
                        </div>
                    </div><!-- #author-details -->
                </div><!-- #author-bio -->

                <?php comments_template( '/comments.php' ); ?> 

                <?php } ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    </article>
    <aside class="page-sidebar" >
        <div class="wraper">
        <?php if(in_category('publikacje')  ) { ?> 
            <div class="last-posts">
            <?php  get_template_part( 'templates/last', 'posts' ); ?>
            </div>
            <?php do_action( 'before_sidebar' ); ?>
            <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?><?php endif; ?>
        <?php } else { ?>
            <?php do_action( 'before_sidebar' ); ?>
            <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?><?php endif; ?>
        <?php } ?>
        </div>
    </aside>
</div>
<?php get_footer(); ?>