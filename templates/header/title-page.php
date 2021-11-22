
<?php if (!is_category('klienci') && !is_page_template('templates/home.php') && (!is_page_template('templates/no-title-form.php')) && !is_page_template('templates/no-head-title.php') && !is_singular('post') ) { ?>
<?php if (have_posts()) : ?>
<?php endif; ?>

    <div class="container">
		<?php if ( function_exists('yoast_breadcrumb')  ) { ?>
		  <?php yoast_breadcrumb( '<div id="breadcrumbs">','</div>' ); ?>
		<?php } ?>
		<?php if (is_single()) :?>
		<h2 class="page-title" title="<?php the_title(); ?>">
		<?php else: ?>
		<h1 class="page-title" title="<?php the_title(); ?>">
		<?php endif; ?>
		<?php if ( is_category() ) : single_cat_title();						
		elseif ($post->post_type == 'lekarze') :
			_e( 'Lekarze', 'vinci');
		elseif (is_404()) :
			// _e( '404', 'cr');
		elseif (is_page() ) :
			the_title();
		elseif ( is_tag() ) :
			single_tag_title();
		elseif ( is_author() ) :
			the_post();
			printf( __( '%s', 'cr' ), get_the_author() );
			rewind_posts();
		elseif ( is_day() ) :
			printf( __( 'Dzień: %s', 'cr' ), '<span>' . get_the_date() . '</span>' );
		elseif ( is_month() ) :
			printf( __( 'Miesiąc: %s', 'cr' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
		elseif ( is_year() ) :
			printf( __( 'Rok: %s', 'cr' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

		elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
			_e( 'Asides', 'cr' );

		elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
			_e( 'Images', 'cr');

		elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
			_e( 'Videos', 'cr' );

		elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
			_e( 'Quotes', 'cr' );

		elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
			_e( 'Links', 'cr' );
		else :
			_e( 'Publikacje', 'cr' );
		endif; ?>
		<?php if (is_single()) : ?>
		</h2>
		<?php else: ?>
		</h1>
		<?php endif; ?>
		<?php if (is_404()): ?>
			<div class="wrap-404">
			<h1>404</h1>
			<a class="btn btn-main" href="<?php echo esc_url( home_url( '/' ) ); ?>">Powrót do strony głównej</a>
			</div>
		<?php endif; ?>
	
	</div>
</div>	
<?php } ?>
