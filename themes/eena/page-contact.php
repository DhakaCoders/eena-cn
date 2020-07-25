<?php 
  /*
    Template Name: Contact
  */
  get_header(); 

  $thisID = get_the_ID();
  $spacialArry = array(".", "/", "+", " ", "(", ")");$replaceArray = '';
  $intro = get_field('introsec', $thisID); 
  $gmap = get_field('gmap', $thisID); 
  $cont = get_field('contacteer_ons', $thisID); 
?>
<section class="contact-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form-cntlr clearfix">
          <div class="contact-form-lft">
            <div class="contact-form-dsc">
              <?php 
                if( !empty( $intro['titel'] ) ) printf( '<h2 class="contact-form-dsc-title">%s</h2>', $intro['titel']); 
                if( !empty( $intro['beschrijving'] ) ) echo wpautop($intro['beschrijving']); 
              ?>
            </div>
            <div class="contact-form-wrp clearfix">
              <div class="wpforms-container">
              <?php if(!empty($intro['form_shortcode'])) echo do_shortcode( $intro['form_shortcode'] ); ?>
              </div>
            </div>
          </div>
          <div class="contact-form-rgt clearfix">
            <?php 
              if( $gmap ): 
              $map = $gmap['map'];
              $adres = $gmap['adres'];
              if( $map ):
            ?>
            <div id="googlemap" data-latitude="<?php echo $map['lat']; ?>" data-longitude="<?php echo $map['long']; ?>"></div>
            <?php endif; ?>
            <div class="contact-map-info">
              <div class="contact-map-info-dsc">
                <ul class="reset-list">
                  <?php if( $adres ): ?>
                    <?php 
                      foreach( $adres as $adr  ):
                      $gmapsurl = $adr['gmap_url']; 
                      $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
                    ?>
                  <li>
                    <?php 
                      if( !empty( $adr['titel'] ) ) printf( '<h6 class="contact-map-title">%s</h6>', $adr['titel']);
                      if( !empty( $adr['adres'] ) ) printf( '<a href="%s">%s</a>', $gmaplink, $adr['adres']);
                    ?>
                  </li>
                  <?php endforeach; ?>
                  <?php endif; ?>
                  <li>
                    <h6 class="contact-map-title"><?php _e('Contact Info', THEME_NAME); ?></h6>
                    <?php 
                      if( !empty($gmap['telephone']) ){
                        $telefoon = trim(str_replace($spacialArry, $replaceArray, $gmap['telephone']));
                        printf('<span>Tel: <a href="tel:%s"> %s</a></span>', $telefoon, $gmap['telephone']); 
                      }
                      if( !empty($gmap['email']) ){
                        printf('<span>Mail: <a href="mailto:%s">%s</a></span>', $gmap['email'], $gmap['email']); 
                      }
                    ?>
                  </li>
                </ul>               
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>

<?php 
if( $cont ): 
?>
<section class="contact-info-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-info-wrp clearfix">
          <div class="contact-info-lft">
            <div class="contact-info-lft-img" style="background: url(
              <?php if( !empty($cont['afbeelding']) ) echo cbv_get_image_src($cont['afbeelding'], 'contimg'); ?>
              );">
            </div>
          </div>
          <div class="contact-info-rgt">
            <div class="contact-info-dsc">
              <?php 
                if( !empty( $cont['titel'] ) ) printf( '<h3 class="contact-info-dsc-title">%s</h3>', $cont['titel']); 
                if( !empty( $cont['beschrijving'] ) ) echo wpautop($cont['beschrijving']); 
              ?>
            </div>

            <div class="contact-info-adrs-wrp clearfix">
              <?php 
                $conts = $cont['contacts'];
                if( $conts ):
              ?>
              <ul class="reset-list clearfix">
                <?php foreach( $conts as $contt ): ?>
                <li>
                  <div class="contact-info-adrs">
                    <?php 
                    if( !empty( $contt['titel'] ) ) printf( '<h5 class="contact-info-adrs-title">%s</h5>', $contt['titel']); 
                    if( !empty( $contt['naam'] ) ) printf( '<span>%s</span>', $contt['naam']); 
                    ?>
                    <?php if( !empty($contt['email'] ) ): ?>
                    <a href="mailto:<?php echo $contt['email']; ?>">
                    <i>  
                      <svg class="contact-info-email-svg" width="18" height="18" viewBox="0 0 18 18" fill="#6A6A6A">
                        <use xlink:href="#contact-info-email-svg"></use>
                      </svg>
                    </i>
                    <?php echo $contt['email']; ?>
                   </a>
                   <?php endif; ?>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>