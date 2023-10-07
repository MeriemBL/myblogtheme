  <!-- hero sectoin -->
  <?php
  //Hero height:
  $hero_height = get_theme_mod( 'set_hero_height', 450);
   //slid1:
   $hero_title1 = get_theme_mod('set_slid1_hero_title', 'Change Your Title');
   $hero_subtitle1 = get_theme_mod('set_slid1_hero_subtitle', 'Change Your Subtitle');
   $hero_button_text1 = get_theme_mod('set_slid1_hero_text_button', 'READ MORE');
   $hero_button_link1 = get_theme_mod( 'set_slid1_hero_button_link', '#');
   $hero_background1 = wp_get_attachment_url(get_theme_mod( 'set_slid1_hero_background'));
   //slid2:
   $hero_title2 = get_theme_mod('set_slid2_hero_title', 'Change Your Title');
   $hero_subtitle2 = get_theme_mod('set_slid2_hero_subtitle', 'Change Your Subtitle');
   $hero_button_text2 = get_theme_mod('set_slid2_hero_text_button', 'READ MORE');
   $hero_button_link2 = get_theme_mod( 'set_slid2_hero_button_link', '#');
   $hero_background2 = wp_get_attachment_url(get_theme_mod( 'set_slid2_hero_background'));
   //slid3:
   $hero_title3 = get_theme_mod('set_slid3_hero_title', 'Change Your Title');
   $hero_subtitle3 = get_theme_mod('set_slid3_hero_subtitle', 'Change Your Subtitle');
   $hero_button_text3 = get_theme_mod('set_slid3_hero_text_button', 'READ MORE');
   $hero_button_link3 = get_theme_mod( 'set_slid3_hero_button_link', '#');
   $hero_background3 = wp_get_attachment_url(get_theme_mod( 'set_slid3_hero_background'));
  ?>
  <section class="hero" style="height:<?php echo $hero_height ?>px">
      <div class="slider-container">
          <button class="prev" onclick="prevSlide()"><i class="fa-solid fa-chevron-left"></i></button>
          <div class="slide one"
              style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.329), rgba(0, 0, 0, 0.5)), url('<?php echo $hero_background1 ?>');">
              <div class="sild-content">
                  <h2><?php echo $hero_title1 ?></h2>
                  <p><?php echo nl2br($hero_subtitle1);  ?></p>
                  <button><a href="<?php echo  $hero_button_link1  ?>"><?php echo $hero_button_text1 ?></a></button>
              </div>
          </div>
          <div class="slide two"
              style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.329), rgba(0, 0, 0, 0.5)), url('<?php echo $hero_background2 ?>');">
              <div class="sild-content">
                  <h2><?php echo $hero_title2 ?></h2>
                  <p><?php echo nl2br($hero_subtitle2); ?></p>
                  <button><a href="<?php echo  $hero_button_link2  ?>"><?php echo $hero_button_text2 ?></a></button>
              </div>

          </div>
          <div class="slide three"
              style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.329), rgba(0, 0, 0, 0.5)), url('<?php echo $hero_background3 ?>');">
              <div class="sild-content">
                  <h2><?php echo $hero_title3 ?></h2>
                  <p><?php echo nl2br($hero_subtitle3); ?></p>
                  <button><a href="<?php echo  $hero_button_link3  ?>"><?php echo $hero_button_text3 ?></a></button>
              </div>

          </div>
          <button class="next" onclick="nextSlide()"><i class="fa-solid fa-chevron-right"></i></button>
      </div>
  </section>