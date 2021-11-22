<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="theme-color" content="#a50404">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11"> 
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;900&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header"  itemscope itemtype="http://schema.org/WPHeader"  >
	    <?php get_template_part( 'templates/header/nav', get_post_format() ); ?>  
	    <div id="spacer"></div>
		<?php get_template_part( 'templates/header/title-page', get_post_format() ); ?>
	</header>
	
	<main id="main-page" class="container" data-aos="fade-up" data-aos-duration="1000">
