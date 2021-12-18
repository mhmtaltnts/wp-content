<div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month"><?php 
                
                  $gun_dizi = array(
                      'Jan'       => 'Oca',
                      'Feb'       => 'Şub',
                      'Mar'       => 'Mar',
                      'Apr'       => 'Nis',
                      'May'       => 'May',
                      'Jun'       => 'Haz',
                      'Jul'       => 'Tem',
                      'Aug'       => 'Ağu',
                      'Sep'       => 'Eyl',
                      'Oct'       => 'Eki',
                      'Nov'       => 'Kas',
                      'Dec'       => 'Ara',
                  );
                  
              $etkinlikTarihi = new DateTime(get_field('etkinlik_tarihi'));

               
                $turkceTarih = $etkinlikTarihi->format('M');
                echo $gun_dizi[$turkceTarih]
              ?></span>
              <span class="event-summary__day"><?php echo $etkinlikTarihi->format('d'); ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
              <p><?php 
                    if (has_excerpt()){
                       echo get_the_excerpt();
                    }else {
                      echo wp_trim_words(get_the_content(), 18);
                    }
                    ?> <a href="<?php the_permalink(); ?>" class="nu gray">Devamını Okuyunuz</a></p>
            </div>
          </div>