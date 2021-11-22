<?php
function register_acf_block_types() {
    acf_register_block_type(array(
        'name'              => 'tytul',
        'title'             => __('Nagłówek'),
        'render_template'   => 'blocks/block-tytul.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e21c1f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'tytuł', 'nagłówek' ),
    ));
    acf_register_block_type(array(
        'name'              => 'tlo',
        'title'             => __('Tło'),
        'render_template'   => 'blocks/block-tlo.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e21c1f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'supports'			=> array(
          'align' => true,
          'mode' => true,
          'jsx' => true
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'tło' ),
    ));
    acf_register_block_type(array(
        'name'              => 'icona_link',
        'title'             => __('Icona + link'),
        'render_template'   => 'blocks/block-icona-link.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e21c1f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'supports'			=> array(
          'align' => true,
          'mode' => true,
          'jsx' => true
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'ikona link' ),
    ));
    acf_register_block_type(array(
        'name'              => 'uslugi',
        'title'             => __('Usługi'),
        'render_template'   => 'blocks/block-uslugi.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e21c1f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'supports'			=> array(
          'align' => true,
          'mode' => true,
          'jsx' => true
        ),
        'mode'            => 'preview', 
        'keywords'          => array( 'usługi' ),
    ));
    acf_register_block_type(array(
        'name'              => 'o-mnie',
        'title'             => __('O mnie'),
        'render_template'   => 'blocks/block-omnie.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e21c1f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'supports'			=> array(
          'align' => true,
          'mode' => true,
          'jsx' => true
        ),
        'mode'            => 'preview', 
        'keywords'          => array( 'O mnie' ),
    ));
    acf_register_block_type(array(
        'name'              => 'uslugi-widget',
        'title'             => __('Usługi-widget'),
        'render_template'   => 'blocks/block-uslugi-widget.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e21c1f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'supports'			=> array(
          'align' => true,
          'mode' => true,
          'jsx' => true
        ),
        'mode'            => 'preview', 
        'keywords'          => array( 'usługi' ),
    ));
    acf_register_block_type(array(
        'name'              => 'cennik',
        'title'             => __('Cennik'),
        'render_template'   => 'blocks/block-cennik.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e21c1f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'supports'			=> array(
          'align' => true,
          'mode' => true,
          'jsx' => true
        ),
        'mode'            => 'preview', 
        'keywords'          => array( 'cennik' ),
    ));
    acf_register_block_type(array(
        'name'              => 'cennik-tabla',
        'title'             => __('Cennik - Tabela'),
        'render_template'   => 'blocks/block-table.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e21c1f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'supports'			=> array(
          'align' => true,
          'mode' => true,
          'jsx' => true
        ),
        'mode'            => 'preview', 
        'keywords'          => array( 'cennik - tabela' ),
    ));
    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'render_template'   => 'blocks/block-hero.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e21c1f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'supports'			=> array(
          'align' => true,
          'mode' => true,
          'jsx' => true
        ),
        'mode'            => 'preview', 
        'keywords'          => array( 'Hero' ),
        'enqueue_assets'    => function(){
          wp_enqueue_script('cr-typer', 'https://cdn.jsdelivr.net/npm/typed.js@2.0.12',  array(), '299930456', true );
          wp_enqueue_script( 'block-hero', get_template_directory_uri() . '/blocks/includes/hero.js', array(), '20130457', true );
        },
    ));
    acf_register_block_type(array(
      'name'              => 'block_logotypy',
      'title'             => __('Logotypy - carousel'),
      'render_template'   => 'blocks/block-logotypy.php',
      'category'          => 'formatting',
      'icon' => array(
          'background' => '#ff7800',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview',
      'keywords'          => array( 'Logotypy' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'cr_svipeer_css', 'https://unpkg.com/swiper@6.5.6/swiper-bundle.min.css' );
          wp_enqueue_script('cr-swiper_js', 'https://unpkg.com/swiper@6.5.6/swiper-bundle.min.js',  array(), '20130456', true );
          wp_enqueue_script( 'block-slider-script', get_template_directory_uri() . '/blocks/includes/logos.js', array(), '20130457', true );
      },
    ));
     // Register a restricted block.
    acf_register_block_type(array(
      'name'				=> 'fade',
      'title'				=> 'FadeUp',
      'category'			=> 'formatting',
      'mode'				=> 'edit',
      'icon' => array(
        'background' => '#e21c1f',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'supports'			=> array(
        'align' =>false,
        'mode' => 'edit',
        'jsx' => true
      ),
      'render_template' => 'blocks/block-fade.php',
    ));
    acf_register_block_type(array(
        'name'              => 'button',
        'title'             => __('Button'),
        'render_template'   => 'blocks/block-button.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e21c1f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'mode'            => 'preview',
        'keywords'          => array( 'odnośnik', 'button' ),
    ));
    acf_register_block_type(array(
        'name'              => 'rozw-tekst',
        'title'             => __('Seo tekst '),
        'render_template'   => 'blocks/block-seo-text.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e21c1f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'mode'            => 'preview',
        'keywords'          => array( 'seo' ),
    ));
    acf_register_block_type(array(
        'name'              => 'wyr_posty',
        'title'             => __('Wyróznione posty'),
        'render_template'   => 'blocks/block-wyroznione-posty.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e21c1f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview',
      'keywords'          => array( 'posty' ),
    ));
}
// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

