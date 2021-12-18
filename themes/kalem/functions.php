<?php

require get_theme_file_path('/inc/search-route.php');

function university_custom_rest() {
  register_rest_field('post', 'authorName', array(
    'get_callback' => function() {return get_the_author();}
  ));
}

add_action('rest_api_init', 'university_custom_rest');

function university_files() {
  wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));

  wp_localize_script('main-university-js', 'universityData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));

}

add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'university_features');


//Sayfa Afişi
function pageBanner(array $args = [
  'title' => null,
  'subtitle' => null,
  'photo' => null]) {
  
      if (!$args['title']) {
        $args['title'] = get_the_title();
      }

      if (!$args['subtitle']) {
        $args['subtitle'] = get_field('page_banner_subtitle');
      }

      if (!$args['photo']) {
        if (get_field('page_banner_background_image')) {
          $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
        } else {
          $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
        }
      }
      ?>
      <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);">
        </div>
        <div class="page-banner__content container container--narrow">
          <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
            <div class="page-banner__intro">
             <p><?php echo $args['subtitle']; ?></p>
            </div>
        </div>  
      </div>
  <?php 
  } 

function icindekiler($theChild){
      $theParent = wp_get_post_parent_id($theChild);
      if ($theParent) { 
        ?>
          <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
              <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent);?>">
                <i class="fa fa-home" aria-hidden="true"></i>
                <?php echo get_the_title($theParent);?>
              </a> 
              <span class="metabox__main"><?php the_title();?></span>
            </p>
          </div>
        <?php }
        $testArray = get_pages(array(
              'child_of' => $theChild,
            ));
          if ($theParent or $testArray) { 
         ?>
          <div class="page-links">
            <h2 class="page-links__title">
              <a href="<?php echo get_permalink($theParent) ?>">
                <?php echo get_the_title($theParent)?>
              </a>
            </h2>
            <ul class="min-list">
              <?php
                  if ($theParent) {
                      $findChildrenOf = $theParent;
                    }else {
                      $findChildrenOf = $theChild;
                    }
                  wp_list_pages(array(
                    'title_li' => NULL,
                    'child_of' => $findChildrenOf,
                    'sort_column' => 'menu_order'
                  ));
               ?>
            </ul>
          </div>
        <?php }  ?>
    <div class="generic-content">
        <?php the_content();?>
    </div>
 <?php }


add_action( 'after_setup_theme', 'declare_sensei_support' );
function declare_sensei_support() {
    add_theme_support( 'sensei' );
}


add_action( 'init', 'remove_hooks', 11 );
function remove_hooks(){   
 remove_action('sensei_archive_before_course_loop', array( 'Sensei_Course', 'archive_header' ), 10, 0 );
 remove_action( 'sensei_single_lesson_content_inside_before', array( 'Sensei_Lesson', 'the_title' ), 15 );
 remove_action( 'sensei_single_quiz_content_inside_before', array( 'Sensei_Quiz', 'the_title' ), 20 );
 }



// Redirect subscriber accounts out of admin and onto homepage



//Abone üyeleri direk ana sayfaya yönlendirir.
add_action('admin_init', 'redirectSubsToFrontend');

function redirectSubsToFrontend() {
    $ourCurrentUser = wp_get_current_user();
  
    if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
      wp_redirect(site_url('/'));
      exit;
    }
  }
//Wordpress dashboard menüsünü aboneler için kaldırır.  
  add_action('wp_loaded', 'noSubsAdminBar');
  
  function noSubsAdminBar() {
    $ourCurrentUser = wp_get_current_user();  
    if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
      show_admin_bar(false);
    }
  }
  
 // Customize Login Screen
add_filter('login_headerurl', 'ourHeaderUrl');

function ourHeaderUrl() {
  return esc_url(site_url('/'));
}

add_action('login_enqueue_scripts', 'ourLoginCSS');

function ourLoginCSS() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_filter('login_headertitle', 'ourLoginTitle');

function ourLoginTitle() {
  return get_bloginfo('name');
}
#Registering the Sidebar

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'Ders sayfası kenarında olacak.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
  
  }
