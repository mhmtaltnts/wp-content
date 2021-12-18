<?php

get_header(); 

pageBanner(array(
  'title' => 'Tüm Etkinlikler',
  'subtitle' => 'Dünyamızda neler oluyor öğrenin.',
  'photo' => NULL
));
?>

<div class="container container--narrow page-section">
<?php
  while(have_posts()) {
    the_post(); 
    get_template_part('template-parts/turkce-tarih-formatli-etkinlik');
  }
  echo paginate_links();
?>
<hr class="section-break">
<p>Önceki etkinliklerimizi merak edenler için  <a href="<?php echo site_url('/onceki-etkinlikler') ?>">buradayız.</a></p>
</div>

<?php get_footer();

?>