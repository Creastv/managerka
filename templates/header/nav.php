<div id="navbar" class="navigacja ">
	<nav  id="nav" class="navbar container-fluid "  itemscope itemtype="http://schema.org/SiteNavigationElement">
		<?php if(get_field('logo_header', 'options')):
			$logoHeader = get_field('logo_header', 'options'); 
		?>
			<a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
				<img  src="<?php echo esc_url($logoHeader['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  />
			</a>
		<?php else : ?>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<p class="site-title"><?php bloginfo( 'description' ); ?></p>
			</a>
		<?php endif; ?>
					
		<div class="hamburger hidden hamburger--spin js-hamburger" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<div class="hamburger-box">
				<div class="hamburger-inner"></div>
			</div>
		</div>
					
		<?php wp_nav_menu( array(
			'walker' => new WP_Bootstrap_Navwalker(),
			'theme_location'	=> 'primary',
			'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
			'container'			=> 'div',
			'container_class'	=> 'main-menu',
			'container_id'		=> '',
			'menu_class'		=> 'navbar-nav',
		) ); ?>
		<?php if(get_field('nr_telefonu', 'options') ) { ?> 
		<div class="tel-nav">
			<a href="tel:<?php the_field('nr_telefonu', 'options')?>">
			<div class="icon">
             <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41"><defs><clipPath id="a"><path data-name="Rectangle 47" transform="translate(9.202 21.543)" fill="none" d="M0 0h41v41H0z"/></clipPath></defs><g data-name="Vector Smart Object"><g data-name="Vector Smart Object"><g data-name="Group 139"><g data-name="Group 138"><g data-name="Group 137" clip-path="url(#a)" transform="translate(-9.202 -21.543)"><path data-name="Path 69" d="M27.8 52.734a.8.8 0 1 0 1.131 0 .8.8 0 0 0-1.131 0Zm0 0"/><path data-name="Path 70" d="m48.323 51.347-6.075-5.154a.768.768 0 0 0-.089-.065 3.983 3.983 0 0 0-4.976.545l-3.312 3.3a.8.8 0 0 1-.872.173 21.7 21.7 0 0 1-9.132-6.906 16.048 16.048 0 0 1-2.49-4.418.816.816 0 0 0-.049-.165.793.793 0 0 1 .174-.869l3.312-3.305a3.96 3.96 0 0 0 .546-4.965l-.025-.038-4.388-6.08a4.006 4.006 0 0 0-6.191-.659l-.663.662-2.37 2.367c-2.823 2.817-3.285 7.05-1.335 12.243A40.618 40.618 0 0 0 19.8 51.72a40.906 40.906 0 0 0 14.111 9.567c4.547 1.657 9.384 1.862 12.807-1.554l2.233-2.228a3.986 3.986 0 0 0-.631-6.158Zm-7.066-3.9 6.07 5.149a.723.723 0 0 0 .089.065 2.392 2.392 0 0 1 .408 3.714l-.166.166L37.3 48.809l1.01-1.007a2.389 2.389 0 0 1 2.942-.354ZM19.61 24.281l.025.037 4.385 6.08a2.376 2.376 0 0 1-.339 2.961l-.978.976-7-10.275.188-.187a2.4 2.4 0 0 1 3.723.408Zm14.852 35.507a39.3 39.3 0 0 1-13.528-9.2 39.007 39.007 0 0 1-9.049-13.138c-1.2-3.182-2-7.6.969-10.554l1.693-1.689 7 10.275-1.177 1.182a2.381 2.381 0 0 0-.548 2.541 17.708 17.708 0 0 0 2.587 4.762 23.465 23.465 0 0 0 9.977 7.659A2.4 2.4 0 0 0 35 51.107l1.159-1.157 10.352 7.733-.924.922c-3.176 3.171-7.803 2.395-11.125 1.183Zm0 0"/></g></g><path data-name="Path 71" d="M17.098 29.285c-.846-.739-2.307-2.011-3.077-2.8a52.5 52.5 0 0 1-5.046-5.977.8.8 0 0 0-1.315.909 54.158 54.158 0 0 0 5.214 6.18c.813.834 2.287 2.117 3.169 2.888a.8.8 0 0 0 1.055-1.2Zm0 0"/></g></g><path data-name="Color Overlay" d="M24.712 39.745a40.913 40.913 0 0 1-14.111-9.567 40.624 40.624 0 0 1-9.415-13.707C-.764 11.278-.303 7.044 2.522 4.227L4.89 1.865l.664-.662a4.006 4.006 0 0 1 6.191.66l4.387 6.082a.4.4 0 0 1 .025.038 3.958 3.958 0 0 1-.546 4.964l-3.311 3.3a.792.792 0 0 0-.174.869.847.847 0 0 1 .049.165 16.034 16.034 0 0 0 2.49 4.418 21.7 21.7 0 0 0 9.132 6.906.8.8 0 0 0 .871-.174l3.313-3.3a3.981 3.981 0 0 1 4.975-.544.8.8 0 0 1 .089.065l6.075 5.154a3.986 3.986 0 0 1 .631 6.158l-2.233 2.228a9.41 9.41 0 0 1-6.9 2.714 17.5 17.5 0 0 1-5.906-1.161ZM3.653 5.357c-2.966 2.958-2.164 7.372-.968 10.554a39.01 39.01 0 0 0 9.049 13.138 39.3 39.3 0 0 0 13.527 9.2c3.322 1.211 7.949 1.988 11.128-1.184l.924-.923L26.96 28.41l-1.159 1.157a2.4 2.4 0 0 1-2.615.519 23.457 23.457 0 0 1-9.977-7.659 17.716 17.716 0 0 1-2.588-4.762 2.381 2.381 0 0 1 .548-2.541l1.182-1.18-7-10.274Zm25.46 20.9-1.01 1.007L38.455 35l.166-.166a2.393 2.393 0 0 0-.408-3.714.715.715 0 0 1-.089-.066l-6.07-5.149a2.39 2.39 0 0 0-2.941.354ZM6.686 2.33l-.188.188 7 10.275.978-.977a2.375 2.375 0 0 0 .339-2.961l-4.385-6.08a.509.509 0 0 1-.026-.038 2.4 2.4 0 0 0-3.722-.408ZM18.6 32.32a.8.8 0 1 1 .565.234.8.8 0 0 1-.565-.234Zm-2.557-1.834c-.882-.771-2.356-2.055-3.169-2.888a54.223 54.223 0 0 1-5.215-6.18.8.8 0 0 1 1.315-.91 52.594 52.594 0 0 0 5.046 5.977c.77.79 2.232 2.062 3.077 2.8a.8.8 0 0 1-1.055 1.2Z" fill="#c70131"/></g></svg>
			</div>
			<div class="no">
				<span>Masz pytania? Zadzwoń:</span>
				<b><?php the_field('nr_telefonu', 'options')?></b>
			</div>
			</a>
		</div>
		<?php } ?>
	</nav>
</div>	
