<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url()?>"><strong>Kalem</strong> Öğretir</a>
            </h1>
            <p><a class="site-footer__link" href="#">admin@kalem.xyz</a></p>
          </div>
      
          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Bağlantılar</h3>
              <nav class="nav-list">
                <?php
                 /*
                 wp_nav_menu(array(
                   'theme_location' => 'footerLocationOne' 

                 ))
                 */
                ?>
                
                
                <ul>
                  <li><a href="<?php echo site_url('/kurslar')?>">Kurslar</a></li>
                  <li><a href="<?php echo site_url('/kurslarim')?>">Kurslarım</a></li>
<!--                  
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Campuses</a></li> -->
                  
                </ul>
                
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Bilginize</h3>
              <nav class="nav-list">
                <?php 
                /*
                 wp_nav_menu(array(
                   'theme_location' => 'footerLocationTwo' 

                 ))
                */
                ?>
                
                <ul>
                  <li><a href="#">Legal</a></li>
                  <li <?php if (is_page('hakkimizda') or wp_get_post_parent_id(0) == 11) echo 'class="current-menu-item" '; ?>><a href="<?php echo site_url('/hakkimizda')?>">Hakkımızda</a></li>
                  <li><a href="<?php echo site_url('/verilerin-korunumu')?>">Verilerin Korunumu</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
                
              </nav>
            </div>
          </div>
        
          <div class="site-footer__col-four">
            <h3 class="headline headline--small">2021</h3>
          
            <nav>
                <ul class="min-list social-icons-list group">
                  <li>
                    <a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li> 
                  <li> 
                    <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li>
                    <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                  </li> 
                  <li>
                    <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  </li> 
                  <li>
                    <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>
                </ul>
              </nav>
           
          </div>
        </div>
      </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>