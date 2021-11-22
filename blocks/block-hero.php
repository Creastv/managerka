<?php
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'hero ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container" >
        <div class="wraper-hero">
            <div class="left" data-aos="fade-up" data-aos-duration="1400">
                <InnerBlocks />
            </div>
            <div class="right"  data-aos="fade-up" data-aos-duration="1200">
                <?php $image = get_field('zdjecie');
                if( !empty( $image ) ): ?>
                    <img class="person" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php else : ?>
                   <img class="person" src="<?php echo get_template_directory_uri() ?>/src/img/magdalena-slider.webp">
                <?php endif; ?>
                <?php if(get_field('zwroty_do_animacji')) : ?>
                <div class="comunicate">
                    <div class="msg">
                        <span id="typed"></span>
                    </div>
                    <span class="dots-chat"></span>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <svg data-aos="fade-up" data-aos-duration="800" version="1.1" class="dots" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 947.7 600.5" style="enable-background:new 0 0 947.7 600.5" xml:space="preserve"><style>.st1{fill:none}</style><g style="opacity:.1"><circle transform="rotate(-45.001 912.369 354.816)" cx="912.4" cy="354.8" r="15.9"/><circle cx="700.6" cy="200.1" r="15.9"/><circle cx="660.9" cy="20.4" r="15.9"/><circle cx="660.9" cy="123.5" r="15.9"/><circle cx="660.9" cy="72" r="15.9"/><circle class="st1" cx="660.9" cy="226.6" r="15.9"/><circle cx="660.9" cy="175.1" r="15.9"/><circle cx="700.6" cy="45.5" r="15.9"/><circle cx="735.9" cy="277.5" r="15.9"/><circle cx="735.9" cy="225.9" r="15.9"/><circle cx="735.9" cy="174.3" r="15.9"/><circle cx="700.6" cy="148.6" r="15.9"/><circle class="st1" cx="700.5" cy="97" r="15.9"/><circle cx="660.9" cy="278.2" r="15.9"/><circle cx="625.5" cy="303.9" r="15.9"/><circle cx="590.2" cy="123.5" r="15.9"/><circle cx="660.8" cy="329.7" r="15.9"/><circle cx="735.9" cy="122.8" r="15.9"/><circle cx="590.3" cy="20.4" r="15.9"/><circle cx="590.3" cy="175.1" r="15.9"/><circle cx="590.3" cy="226.6" r="15.9"/><circle cx="590.3" cy="72" r="15.9"/><circle cx="625.6" cy="252.4" r="15.9"/><circle cx="625.6" cy="46.2" r="15.9"/><circle cx="660.9" cy="381.3" r="15.9"/><circle cx="625.5" cy="97.7" r="15.9"/><circle cx="625.6" cy="149.3" r="15.9"/><circle cx="625.6" cy="200.8" r="15.9"/><circle transform="rotate(-13.286 912.414 200.079)" cx="912.4" cy="200.1" r="15.9"/><circle transform="rotate(-45.001 877.067 19.714)" cx="877.1" cy="19.7" r="15.9"/><circle transform="rotate(-9.213 877.117 174.399)" cx="877.1" cy="174.4" r="15.9"/><circle transform="rotate(-13.286 877.124 71.272)" cx="877.1" cy="71.3" r="15.9"/><circle transform="rotate(-13.286 877.115 122.776)" cx="877.1" cy="122.8" r="15.9"/><circle transform="rotate(-45.001 877.09 277.503)" cx="877.1" cy="277.5" r="15.9"/><circle transform="rotate(-45.001 877.056 225.917)" cx="877.1" cy="225.9" r="15.9"/><circle transform="rotate(-67.5 912.366 148.575)" cx="912.4" cy="148.6" r="15.9"/><circle transform="rotate(-45.001 912.347 97.027)" cx="912.3" cy="97" r="15.9"/><circle transform="rotate(-13.286 877.123 328.984)" cx="877.1" cy="329" r="15.9"/><circle transform="rotate(-13.286 912.419 45.471)" cx="912.4" cy="45.5" r="15.9"/><circle transform="rotate(-13.286 912.427 251.68)" cx="912.4" cy="251.7" r="15.9"/><circle transform="rotate(-45.001 912.336 303.23)" class="st1" cx="912.3" cy="303.2" r="15.9"/><circle cx="590.3" cy="278.2" r="15.9"/><circle cx="806.5" cy="174.4" r="15.9"/><circle cx="771.2" cy="45.5" r="15.9"/><circle transform="rotate(-35.783 806.486 225.906)" cx="806.5" cy="225.9" r="15.9"/><circle transform="matrix(.9983 -.05747 .05747 .9983 -5.723 46.548)" cx="806.5" cy="122.8" r="15.9"/><circle transform="rotate(-45.001 735.893 71.282)" cx="735.9" cy="71.3" r="15.9"/><circle cx="735.9" cy="19.7" r="15.9"/><circle cx="771.2" cy="148.6" r="15.9"/><circle transform="rotate(-9.213 841.811 148.598)" cx="841.8" cy="148.6" r="15.9"/><circle transform="rotate(-13.286 841.806 96.976)" cx="841.8" cy="97" r="15.9"/><circle transform="rotate(-45.001 841.782 45.503)" cx="841.8" cy="45.5" r="15.9"/><circle transform="rotate(-45.001 877.084 380.604)" cx="877.1" cy="380.6" r="15.9"/><circle transform="rotate(-45.001 912.367 558.817)" cx="912.4" cy="558.8" r="15.9"/><circle transform="rotate(-45.001 877.087 481.504)" cx="877.1" cy="481.5" r="15.9"/><circle transform="rotate(-45.001 877.054 429.918)" cx="877.1" cy="429.9" r="15.9"/><circle transform="rotate(-13.286 877.123 532.995)" cx="877.1" cy="533" r="15.9"/><circle transform="rotate(-13.286 912.428 455.69)" cx="912.4" cy="455.7" r="15.9"/><circle transform="rotate(-13.286 912.428 407.199)" cx="912.4" cy="407.2" r="15.9"/><circle transform="rotate(-45.001 877.081 584.605)" cx="877.1" cy="584.6" r="15.9"/><circle cx="806.5" cy="71.3" r="15.9"/><circle transform="rotate(-45.001 841.739 200.12)" cx="841.7" cy="200.1" r="15.9"/><circle cx="806.5" cy="329" r="15.9"/><circle transform="rotate(-35.783 806.486 380.548)" cx="806.5" cy="380.5" r="15.9"/><circle transform="matrix(.9983 -.05747 .05747 .9983 -14.61 46.804)" cx="806.5" cy="277.4" r="15.9"/><circle transform="rotate(-9.213 841.811 303.238)" cx="841.8" cy="303.2" r="15.9"/><circle transform="rotate(-13.286 841.807 251.62)" cx="841.8" cy="251.6" r="15.9"/><circle transform="rotate(-45.001 841.737 354.755)" cx="841.7" cy="354.7" r="15.9"/><circle transform="rotate(-33.85 806.438 19.717)" cx="806.5" cy="19.7" r="15.9"/><circle cx="449.1" cy="20.4" r="15.9"/><circle cx="307.8" cy="20.4" r="15.9"/><path d="M931.8 71.3c0 8.8 7.1 15.9 15.9 15.9V55.3c-8.8 0-15.9 7.2-15.9 16z"/><circle cx="343.1" cy="252.4" r="15.9"/><circle cx="307.8" cy="72" r="15.9"/><circle cx="307.8" cy="175.1" r="15.9"/><circle cx="307.8" cy="123.5" r="15.9"/><circle cx="343.1" cy="200.8" r="15.9"/><circle cx="378.4" cy="20.4" r="15.9"/><circle cx="413.8" cy="200.8" r="15.9"/><circle cx="590.2" cy="329.7" r="15.9"/><circle cx="343.1" cy="149.3" r="15.9"/><circle cx="343.1" cy="97.8" r="15.9"/><circle cx="343.1" cy="46.2" r="15.9"/><path d="M931.8 277.5c0 8.8 7.1 15.9 15.9 15.9v-31.9c-8.8 0-15.9 7.2-15.9 16zM700.6 9.9c6.7 0 12.3-4.1 14.7-9.9h-29.5c2.4 5.8 8.1 9.9 14.8 9.9zm70.6 0c6.7 0 12.3-4.1 14.7-9.9h-29.5c2.4 5.8 8.1 9.9 14.8 9.9zm-145.6.7c6.9 0 12.8-4.4 15-10.6h-30c2.2 6.2 8.1 10.6 15 10.6zm216.2-.7c6.7 0 12.3-4.1 14.7-9.9H827c2.4 5.8 8.1 9.9 14.8 9.9zm-286.8.7c6.9 0 12.8-4.4 15-10.6h-30c2.2 6.2 8.1 10.6 15 10.6zm376.8 112.2c0 8.8 7.1 15.9 15.9 15.9v-31.9c-8.8.1-15.9 7.2-15.9 16zM912.4 9.9c6.7 0 12.3-4.1 14.7-9.9h-29.5c2.5 5.8 8.2 9.9 14.8 9.9zM931.8 329c0 8.8 7.1 15.9 15.9 15.9V313c-8.8.1-15.9 7.2-15.9 16z"/><circle cx="413.8" cy="149.3" r="15.9"/><path d="M931.8 174.4c0 8.8 7.1 15.9 15.9 15.9v-31.9c-8.8 0-15.9 7.2-15.9 16zM343.1 10.6c6.9 0 12.8-4.4 15-10.6h-30c2.3 6.2 8.1 10.6 15 10.6zm141.3 0c6.9 0 12.8-4.4 15-10.6h-30c2.2 6.2 8 10.6 15 10.6zm-70.6 0c6.9 0 12.8-4.4 15-10.6h-30c2.2 6.2 8 10.6 15 10.6z"/><circle cx="378.4" cy="123.5" r="15.9"/><circle cx="519.7" cy="20.4" r="15.9"/><circle transform="rotate(-13.286 519.708 71.983)" cx="519.7" cy="72" r="15.9"/><circle cx="519.7" cy="175.1" r="15.9"/><circle cx="519.7" cy="123.5" r="15.9"/><circle cx="519.6" cy="226.6" r="15.9"/><circle class="st1" cx="519.7" cy="278.2" r="15.9"/><circle cx="555" cy="303.9" r="15.9"/><circle cx="555" cy="46.2" r="15.9"/><circle cx="590.3" cy="381.3" r="15.9"/><circle transform="rotate(-9.213 554.989 97.697)" cx="555" cy="97.7" r="15.9"/><circle cx="519.7" cy="329.7" r="15.9"/><circle cx="555" cy="149.3" r="15.9"/><circle cx="555" cy="252.4" r="15.9"/><circle cx="484.4" cy="355.5" r="15.9"/><circle cx="449.1" cy="72" r="15.9"/><path d="M931.8 19.7c0 8.8 7.1 15.9 15.9 15.9V3.8c-8.8 0-15.9 7.1-15.9 15.9z"/><circle cx="449.1" cy="123.5" r="15.9"/><circle cx="449.1" cy="175.1" r="15.9"/><circle cx="413.8" cy="46.2" r="15.9"/><circle cx="413.7" cy="97.7" r="15.9"/><circle cx="166.5" cy="20.4" r="15.9"/><circle cx="201.8" cy="252.4" r="15.9"/><circle cx="166.5" cy="72" r="15.9"/><circle cx="166.5" cy="123.5" r="15.9"/><circle cx="201.8" cy="200.8" r="15.9"/><circle cx="237.1" cy="20.4" r="15.9"/><circle cx="272.5" cy="200.8" r="15.9"/><circle cx="201.8" cy="149.3" r="15.9"/><circle cx="201.8" cy="97.8" r="15.9"/><circle cx="201.8" cy="46.2" r="15.9"/><circle cx="272.5" cy="149.3" r="15.9"/><path d="M201.8 10.6c6.9 0 12.8-4.4 15-10.6h-30c2.3 6.2 8.1 10.6 15 10.6zM272.5 10.6c6.9 0 12.8-4.4 15-10.6h-30c2.2 6.2 8 10.6 15 10.6z"/><circle cx="237.1" cy="123.5" r="15.9"/><circle cx="272.5" cy="46.2" r="15.9"/><circle cx="272.4" cy="97.7" r="15.9"/><circle cx="95.5" cy="20.4" r="15.9"/><circle cx="95.5" cy="72" r="15.9"/><circle cx="95.5" cy="175.1" r="15.9"/><circle cx="95.5" cy="123.5" r="15.9"/><circle cx="130.8" cy="200.8" r="15.9"/><circle cx="130.8" cy="149.3" r="15.9"/><circle cx="130.8" cy="97.8" r="15.9"/><circle cx="130.8" cy="46.2" r="15.9"/><path d="M130.8 10.6c6.9 0 12.8-4.4 15-10.6h-30c2.3 6.2 8.1 10.6 15 10.6z"/><circle cx="24.5" cy="20.4" r="15.9"/><circle cx="24.5" cy="72" r="15.9"/><circle cx="59.8" cy="200.8" r="15.9"/><circle cx="59.8" cy="149.3" r="15.9"/><circle cx="59.8" cy="97.8" r="15.9"/><circle cx="59.8" cy="46.2" r="15.9"/><path d="M59.8 10.6c6.9 0 12.8-4.4 15-10.6h-30c2.3 6.2 8.1 10.6 15 10.6z"/><circle cx="484.4" cy="46.2" r="15.9"/><circle cx="484.4" cy="149.3" r="15.9"/><circle cx="484.4" cy="303.9" r="15.9"/><circle transform="rotate(-9.213 484.386 97.696)" cx="484.4" cy="97.7" r="15.9"/><circle cx="484.4" cy="252.4" r="15.9"/><circle cx="484.3" cy="200.8" r="15.9"/></g></svg>
    <img class="google-partner" data-aos="fade-up" data-aos-duration="1400" src="<?php echo get_template_directory_uri() ?>/src/img/Google_Partners_logo.jpg" alt="Google Partner"> 
</section>
<div class="managerka-hero">
    <div class="wrap">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 1341.6 156.8" style="enable-background:new 0 0 1341.6 156.8" xml:space="preserve"><style>.st0,.st1{opacity:.1;fill:#320e1c}.st1{fill:#a50404}</style><path class="st0" d="m96.5 118.7-.3-45.2-21.5 36.3H60L38.4 75v43.6H8V19.5h27.5l32.3 52.8 31.5-52.8h27.5l.3 99.2H96.5zM217.2 48.9C224.4 55 228 64.3 228 77v41.7h-29.8v-10.2c-3.7 7.7-11 11.6-22 11.6-6.1 0-11.4-1.1-15.7-3.2-4.3-2.1-7.6-5-9.8-8.6-2.2-3.6-3.3-7.7-3.3-12.3 0-7.7 2.9-13.5 8.8-17.4 5.9-4 14.7-6 26.6-6h12.9c-1-6-5.9-9.1-14.6-9.1-3.5 0-7 .5-10.6 1.6-3.6 1.1-6.7 2.6-9.2 4.5l-10.2-21.1c4.4-2.7 9.8-4.9 16.1-6.4 6.3-1.6 12.5-2.3 18.8-2.3 13.7-.1 24.1 3 31.2 9.1zM192 99c1.8-1.2 3.1-3.1 4-5.5v-5.4h-7.9c-6.5 0-9.8 2.2-9.8 6.5 0 1.8.7 3.3 2.1 4.5 1.4 1.2 3.2 1.8 5.6 1.8 2.2-.1 4.2-.7 6-1.9zM328 48.4c5.8 5.8 8.7 14.5 8.7 26.1v44.2h-32V80c0-8.9-3.2-13.3-9.5-13.3-3.6 0-6.5 1.3-8.7 3.8-2.2 2.5-3.3 6.4-3.3 11.8v36.4h-32V41.2h30.5v7.7c3-3 6.5-5.3 10.5-6.8s8.3-2.3 12.9-2.3c9.4-.1 17.1 2.8 22.9 8.6zM425.7 48.9c7.2 6.1 10.8 15.5 10.8 28.1v41.7h-29.8v-10.2c-3.7 7.7-11 11.6-22 11.6-6.1 0-11.4-1.1-15.7-3.2-4.3-2.1-7.6-5-9.8-8.6-2.2-3.6-3.3-7.7-3.3-12.3 0-7.7 2.9-13.5 8.8-17.4 5.9-4 14.7-6 26.6-6h12.9c-1-6-5.9-9.1-14.6-9.1-3.5 0-7 .5-10.6 1.6-3.6 1.1-6.7 2.6-9.2 4.5l-10.2-21.1c4.4-2.7 9.8-4.9 16.1-6.4 6.3-1.6 12.5-2.3 18.8-2.3 13.6-.1 24 3 31.2 9.1zM400.4 99c1.8-1.2 3.1-3.1 4-5.5v-5.4h-7.9c-6.5 0-9.8 2.2-9.8 6.5 0 1.8.7 3.3 2.1 4.5 1.4 1.2 3.2 1.8 5.6 1.8 2.2-.1 4.2-.7 6-1.9zM547.5 41.2v62.1c0 14.7-4.1 25.8-12.3 33.2-8.2 7.4-19.8 11.1-34.9 11.1-7.7 0-15-.8-21.7-2.5-6.7-1.7-12.4-4-17.1-7.2l10.8-21.8c3 2.3 6.8 4.1 11.5 5.5 4.6 1.4 9.1 2.1 13.3 2.1 6.4 0 11.1-1.4 14-4.1 2.9-2.7 4.4-6.8 4.4-12v-1.4c-4.8 5.5-12 8.2-21.4 8.2-6.6 0-12.8-1.5-18.5-4.6-5.7-3.1-10.3-7.5-13.7-13.2-3.4-5.7-5.1-12.3-5.1-19.6 0-7.4 1.7-13.9 5.1-19.6 3.4-5.7 8-10 13.7-13.1 5.7-3.1 11.9-4.6 18.5-4.6 10.6 0 18.2 3.4 23 10.2v-8.8h30.4zM512 86c2.5-2.3 3.8-5.3 3.8-9s-1.3-6.7-3.8-8.9c-2.5-2.3-5.6-3.4-9.4-3.4-3.9 0-7.1 1.1-9.6 3.4s-3.8 5.2-3.8 8.9 1.3 6.7 3.8 9 5.7 3.5 9.5 3.5c3.9 0 7-1.2 9.5-3.5zM652.9 87.3h-53.8c1.1 2.9 3 5.2 5.7 6.7 2.6 1.6 6 2.3 9.9 2.3 3.4 0 6.3-.4 8.6-1.3 2.3-.8 4.8-2.3 7.6-4.4l16.7 16.9c-7.6 8.3-18.8 12.5-33.9 12.5-9.4 0-17.6-1.7-24.7-5.2-7.1-3.4-12.6-8.2-16.4-14.4-3.9-6.1-5.8-13-5.8-20.7 0-7.7 1.9-14.7 5.7-20.8 3.8-6.1 9.1-10.8 15.7-14.2 6.7-3.4 14.1-5.1 22.5-5.1 7.8 0 15 1.6 21.5 4.7S643.8 52 647.6 58c3.8 6 5.7 13.3 5.7 21.7 0 .6-.1 3.1-.4 7.6zm-50.1-23c-2.2 1.8-3.6 4.3-4.3 7.7h24.9c-.7-3.2-2.1-5.7-4.3-7.6-2.2-1.8-4.9-2.8-8.2-2.8-3.2 0-6 .9-8.1 2.7zM728.1 39.7V68c-2.5-.4-4.9-.6-7.1-.6-11 0-16.4 5.6-16.4 16.7v34.4h-32V41.2h30.5v8.4c5.6-6.6 14-9.9 25-9.9zM783.5 94.9l-5.1 5.5v18.3h-32V13.5h32v50.2l22.2-22.5h37.8l-32 33.6 34.6 43.9h-38.7l-18.8-23.8zM921.1 48.9c7.2 6.1 10.8 15.5 10.8 28.1v41.7h-29.8v-10.2c-3.7 7.7-11 11.6-22 11.6-6.1 0-11.4-1.1-15.7-3.2-4.3-2.1-7.6-5-9.8-8.6-2.2-3.6-3.3-7.7-3.3-12.3 0-7.7 2.9-13.5 8.8-17.4 5.9-4 14.7-6 26.6-6h12.9c-1-6-5.9-9.1-14.6-9.1-3.5 0-7 .5-10.6 1.6-3.6 1.1-6.7 2.6-9.2 4.5L855 48.5c4.4-2.7 9.8-4.9 16.1-6.4 6.3-1.6 12.5-2.3 18.8-2.3 13.6-.1 24 3 31.2 9.1zM895.9 99c1.8-1.2 3.1-3.1 4-5.5v-5.4H892c-6.5 0-9.8 2.2-9.8 6.5 0 1.8.7 3.3 2.1 4.5 1.4 1.2 3.2 1.8 5.6 1.8 2.2-.1 4.2-.7 6-1.9z"/><path class="st1" d="M956 114.9c-3.5-3.4-5.3-7.9-5.3-13.2 0-5.4 1.8-9.8 5.3-13.1 3.5-3.4 8-5 13.4-5s9.8 1.7 13.4 5c3.5 3.4 5.3 7.7 5.3 13.1 0 5.4-1.8 9.8-5.3 13.2-3.5 3.4-8 5.2-13.4 5.2s-9.8-1.7-13.4-5.2zM1025.3 115c-6.9-3.4-12.4-8.2-16.3-14.3-3.9-6.1-5.9-13.1-5.9-20.8 0-7.7 2-14.7 5.9-20.8 3.9-6.1 9.4-10.8 16.3-14.2 6.9-3.4 14.8-5.1 23.6-5.1 9.4 0 17.5 2 24.2 6.1 6.7 4.1 11.3 9.7 13.9 16.9L1062.2 75c-3-6.8-7.5-10.2-13.5-10.2-3.8 0-6.9 1.3-9.4 4-2.5 2.6-3.8 6.4-3.8 11.2 0 4.9 1.3 8.7 3.8 11.3 2.5 2.6 5.6 4 9.4 4 6 0 10.4-3.4 13.5-10.2l24.8 12.2c-2.6 7.2-7.2 12.8-13.9 16.9-6.7 4.1-14.8 6.1-24.2 6.1-8.8-.2-16.6-1.9-23.6-5.3zM1120.7 114.9c-6.8-3.4-12.2-8.2-16.1-14.3-3.9-6.1-5.8-13-5.8-20.8 0-7.7 1.9-14.7 5.8-20.8 3.9-6.1 9.2-10.8 16.1-14.2 6.8-3.4 14.6-5.1 23.2-5.1 8.7 0 16.5 1.7 23.3 5.1 6.8 3.4 12.2 8.1 16 14.2 3.8 6.1 5.7 13 5.7 20.8 0 7.7-1.9 14.7-5.7 20.8-3.8 6.1-9.2 10.9-16 14.3-6.8 3.4-14.6 5.2-23.3 5.2-8.7 0-16.4-1.7-23.2-5.2zm32.2-23.8c2.4-2.7 3.5-6.4 3.5-11.3 0-4.8-1.2-8.5-3.5-11.2-2.4-2.6-5.4-4-9.1-4s-6.7 1.3-9.1 4c-2.4 2.6-3.5 6.4-3.5 11.2 0 4.8 1.2 8.6 3.5 11.3 2.4 2.7 5.4 4 9.1 4s6.7-1.3 9.1-4zM1333.2 48.4c5.6 5.8 8.4 14.5 8.4 26.1v44.2h-32V80c0-8.9-2.9-13.3-8.6-13.3-3 0-5.5 1.1-7.3 3.4-1.8 2.3-2.8 5.9-2.8 10.8v37.8h-32V80c0-8.9-2.9-13.3-8.6-13.3-3 0-5.5 1.1-7.3 3.4-1.8 2.3-2.8 5.9-2.8 10.8v37.8h-32V41.2h30.5v7.2c5.8-5.8 13.1-8.6 22-8.6 5.2 0 9.9 1 14 2.9 4.2 1.9 7.6 4.9 10.2 8.9 3.1-3.8 6.9-6.7 11.3-8.7 4.4-2 9.3-3 14.6-3 9.3-.2 16.8 2.7 22.4 8.5z"/></svg>
    </div>
</div>   

<?php if(get_field('zwroty_do_animacji')) : ?>
<script>
// const arr = ['<b>Witam Cię serdecznie!</b>', 'Nazywam się <b>Magdalena Leszczyńska</b>', 'Posiadam 20 lat doświadczenia zawodowego', ' w obszarach związanych z zarządzaniem', 'marketingiem', 'zarządzaniem zasobami ludzkimi', 'PR i rozwijaniem firm', '<b>Zapraszam do kontaktu!</b>']
 const arr = [<?php the_field('zwroty_do_animacji'); ?>]
</script>
<?php endif; ?>