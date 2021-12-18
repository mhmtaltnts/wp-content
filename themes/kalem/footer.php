      <footer class="site-footer">
        <div class="site-footer__inner container container--narrow">
          <div class="group">
            <div class="site-footer__col-one">
              <h1 class="school-logo-text school-logo-text--alt-color">
                <a href="<?php echo site_url()?>"><strong>Kalem</strong> Öğretir</a>
              </h1>
              <p><a class="site-footer__link" href="#">admin@kalem.xyz</a></p>
            </div>
          </div>
        </div>
      </footer>
      <div class="search-overlay">
        <div class="search-overlay__top">
          <div class="container">
            <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
            <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
            <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
          </div>
        </div>
        <div class="container">
          <div id="search-overlay__results"></div>
        </div>
      </div>
    <?php wp_footer(); ?>
  </body>
</html>