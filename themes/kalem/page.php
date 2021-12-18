
<?php
get_header();
pageBanner(array(
  'title' => get_the_title(),
  'subtitle' => get_the_archive_description(),
  'photo' => NULL
));  
 ?>
<div class="container container--narrow">
    <?php
      while(have_posts()) {
        the_post();
        $theChild = get_the_ID(); 
        icindekiler($theChild);
      } ?>
</div> 
 <?php 
   get_footer() ;

?>