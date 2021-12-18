<?php
 get_header();
 pageBanner();
 while(have_posts()) {
     the_post();
     ?>    
    <div class="container container--narrow">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo site_url('/yazilar');?>">
               <i class="fa fa-home" aria-hidden="true"></i> Yazılar Anasayfa</a> 
               <span class="metabox__main">
                    <?php the_author_posts_link(); ?> tarafından <?php the_time('d/m/Y') ?> tarihinde 
                    <?php echo get_the_category_list(', ');?> konusunda yazıldı.
               </span>
            </p>
        </div>
     <div class="generic-content"><?php the_content();?></div>

    </div>   
 <?php }
 get_footer();
?>