
<?php
get_header(); 
pageBanner(array(
  'photo' => get_theme_file_uri('/images/library-hero.jpg'),
  'title' =>'Hoş Geldiniz',
  'subtitle' => 'Sitemizde verimli vakit geçireceğinizi umarız.'
))?>
    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Son Dersler</h2>
          <?php
             $today = date('Ymd'); 
             $homepageEvents = new WP_Query(array(
              "post_per_page" => 2,
              "post_type" => 'lesson',
              ) 
             );
              while($homepageEvents->have_posts()) {
                $homepageEvents->the_post();
                get_template_part('template-parts/tarih-formatli-yazi'); 
              }
              ?>           

          <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('etkinlik')?>" class="btn btn--blue">Diğer Dersler</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Son Makaleler</h2>

          <?php
           $homepagePosts = new WP_Query(array(
               'posts_per_page' => 2,
           ));
          
            while ($homepagePosts->have_posts()) {
                $homepagePosts->the_post(); 
                get_template_part('template-parts/tarih-formatli-yazi');
            } 
            
            wp_reset_postdata();
          
          ?>

          <p class="t-center no-margin"><a href="<?php echo site_url('/yazilar');?>" class="btn btn--yellow">Diğer Yazılarımız</a></p>
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/mekanik.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">9. SINIF FİZİK</h2>
                <p class="t-center">9. Sınıf konuları işlenecek.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">İnceleyiniz.</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/optik.png') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">10. SINIF FİZİK</h2>
                <p class="t-center">10. Sınıf konuları işlenecek.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">İnceleyiniz.</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/elektrik.jpg')?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">11. SINIF FİZİK</h2>
                <p class="t-center">11. Sınıf konuları işlenecek.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">İnceleyiniz.</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/fotoelektrik.jpg')?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">12. SINIF FİZİK</h2>
                <p class="t-center">12. Sınıf konuları işlenecek.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">İnceleyiniz.</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>

<?php

 get_footer();
?>