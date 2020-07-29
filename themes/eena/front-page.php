<?php get_header('home'); ?>
<?php 
  $showhide_nieuws = get_field('showhide_nieuws', HOMEID);
  if( $showhide_nieuws ):
    $nieuws = get_field('nieuwssec', HOMEID);
    if($nieuws):
      $nieuwses = $nieuws['selecteernieuws'];
?>
<?php 
  if( $nieuwses ){
    $arg_nieuws = $nieuwses;
  } else{
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => -1,
    );
    $arg_nieuws = get_posts( $args );
  }
?>
<section class="hm-news-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-news-sec-hdr">
          <h1 class="hmns-title">
            <?php 
              if( !empty( $nieuws['dtitel'] ) ) printf( '<span class="hide-sm">%s</span>', $nieuws['dtitel']); 
              if( !empty( $nieuws['mtitel'] ) ) printf( '<span class="show-sm">%s</span>', $nieuws['mtitel']); 
            ?>
          </h1>
          <?php if( $arg_nieuws ): ?>
          <div class="fl-prev-next hmNewsSecSliderPrevNext hide-sm">
            <span class="fl-prev">
              <i>
                <svg class="fl-prev-icon-svg" width="34" height="16" viewBox="0 0 34 16" fill="#C8C8C8">
                  <use xlink:href="#fl-prev-icon-svg"></use>
                </svg> 
              </i>
            </span>
            <span class="fl-next">
              <i>
                <svg class="fl-next-icon-svg" width="34" height="16" viewBox="0 0 34 16" fill="#C8C8C8">
                  <use xlink:href="#fl-next-icon-svg"></use>
                </svg> 
              </i>
            </span>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php if( $arg_nieuws ): ?>
      <div class="col-md-12">
        <div class="hm-news-sec-cntlr">
          <div class="hmNewsSecSlider clearfix">
            <?php 
            foreach( $arg_nieuws as $nieuws_row ):
              $thumb_id = get_post_thumbnail_id($nieuws_row);
              if(!empty($thumb_id)){
                $thumb = cbv_get_image_src($thumb_id, 'hbloggrid');
              } else {
                $thumb = THEME_URI.'/assets/images/hdflt-img.jpg';
              }
            ?>
            <div class="hmNewsSecSlideItem">
              <div class="eena-grd-item">
                <div class="eena-grd-item-fea-img-ctlr">
                  <a href="<?php echo esc_url( get_permalink($nieuws_row) ); ?>" class="overlay-link"></a>
                  <div class="eena-grd-item-fea-img" style="background: url('<?php echo $thumb; ?>');"></div>
                </div>
                <div class="eena-grd-item-des mHc">
                  <strong><?php echo get_the_date( 'l j F - g:i A', $nieuws_row->ID ); ?></strong>
                  <h3 class="eena-gid-title mHc1"><a href="<?php echo esc_url( get_permalink($nieuws_row) ); ?>"><?php echo $nieuws_row->post_title;?></a></h3>
                  <p class="mHc2"><?php echo cbv_get_excerpt($nieuws_row->post_content);?></p>
                  <a href="<?php echo esc_url( get_permalink($nieuws_row) ); ?>">LEES MEEr</a>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="fl-prev-next hmNewsSecSliderPrevNext show-sm">
            <span class="fl-prev">
              <i>
                <svg class="fl-prev-icon-svg" width="34" height="16" viewBox="0 0 34 16" fill="#C8C8C8">
                  <use xlink:href="#fl-prev-icon-svg"></use>
                </svg> 
              </i>
            </span>
            <span class="fl-next">
              <i>
                <svg class="fl-next-icon-svg" width="34" height="16" viewBox="0 0 34 16" fill="#C8C8C8">
                  <use xlink:href="#fl-next-icon-svg"></use>
                </svg> 
              </i>
            </span>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php 
  $showhide_actua = get_field('showhide_actua', HOMEID);
  if( $showhide_actua ):
    $actua = get_field('hactuasec', HOMEID);
    if($actua):
      $anieuwses = $actua['selecteernieuws'];
?>
<?php 
  if( $anieuwses ){
    $arg_anieuws = $anieuwses;
  } else{
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => -1,
    );
    $arg_anieuws = get_posts( $args );
  }
?>
<section class="eena-breadcrumbs-sec">
  <div class="eena-brdcrmb-left">
    <?php if( !empty( $actua['titel'] ) ) printf( '<strong>%s</strong>', $actua['titel']); ?>
  </div>
    <div class="eena-breadcrumbs-sec-inr">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
      <div class="eena-breadcrumbs-sec-Wrap">
      <?php if( $arg_anieuws ): ?>
      <div class="eena-brdcrmb-sliders bdcmbSlider">
        <?php 
        foreach( $arg_anieuws as $anieuws_row ):
        ?>
        <div class="eena-brdcrmb-slider-item">
          <a href="<?php echo esc_url( get_permalink($anieuws_row) ); ?>"><?php echo get_the_date( 'l j F', $anieuws_row->ID ); ?> <span>- <?php echo $anieuws_row->post_title;?>...</span></a>
        </div>
        <?php endforeach; ?>
        <?php 
        foreach( $arg_anieuws as $anieuws_row ):
        ?>
        <div class="eena-brdcrmb-slider-item">
          <a href="<?php echo esc_url( get_permalink($anieuws_row) ); ?>"><?php echo get_the_date( 'l j F', $anieuws_row->ID ); ?> <span>- <?php echo $anieuws_row->post_title;?>...</span></a>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>
<section class="hm-ranking-section inline-bg" style="background:url(<?php echo THEME_URI; ?>/assets/images/hm-ranking-sec-bg.jpg);">
  <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xl-6">
          <div class="hm-ranking-sec-lft-des">
            <div class="versus-match-cntlr">
              <div class="versus-match-title">
                <div class="fl-tabs match-tabs">
                  <ul class="reset-list clearfix">
                    <li><a class="tab-link current" href="#" data-tab="mt-tab-1">volgende wedstrijd</a></li>
                    <li><a class="tab-link" href="#" data-tab="mt-tab-2">vorige wedstrijd</a></li>
                  </ul>
                </div>
              </div>
              
              <div id="mt-tab-1" class="fl-tab-content current">
                <?php get_template_part('templates/upcomming', 'game'); ?>
              </div>
              <div id="mt-tab-2" class="fl-tab-content">
                <?php 
                  $query = new WP_Query(array( 
                      'post_type'=> 'matches',
                      'post_status' => 'publish',
                      'posts_per_page' => 1,
                      'orderby' => 'date',
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'match_cat',
                              'field'    => 'slug',
                              'terms'    => 'vorige-wedstrijd',
                          ),
                      ),
                    ) 
                  );
                  
                  if($query->have_posts()){
                ?>
                <div class="versus-match">
                  <?php
                    while($query->have_posts()): $query->the_post();
                    $intro = get_field('intro', get_the_ID());
                    $teama = get_field('teama', get_the_ID());
                    $teamb = get_field('teamb', get_the_ID());
                  ?>
                  <div class="versus-team versus-match-item">
                    <?php if( $teama ): ?>
                    <div class="versus-team-logo">
                    <?php 
                        $teamaobj = $teama['logo'];
                        if( is_array($teamaobj) ){
                          echo '<img src="'.$teamaobj['url'].'" alt="'.$teamaobj['alt'].'" title="'.$teamaobj['title'].'">';
                        }
                      ?>
                    </div>
                    <?php if(  !empty($teama['naam'])) printf('<h5 class="versus-team-name">%s</h5>', $teama['naam']); ?>
                    
                  <?php endif; ?>
                  </div>
                  <div class="versus-logo versus-match-item" style="background: url('<?php echo THEME_URI; ?>/assets/images/vs-icon.png');">
                    <div class="versus-play-time">
                      <?php if( !empty($intro['datuum2']) ) printf('<span>%s</span>', $intro['datuum2']); ?>
                    </div>
                  </div>
                  <div class="versus-team2 versus-match-item">
                    <?php if( $teamb ): ?>
                    <div class="versus-team-logo">
                    <?php 
                        $teambobj = $teamb['logo'];
                        if( is_array($teambobj) ){
                          echo '<img src="'.$teambobj['url'].'" alt="'.$teambobj['alt'].'" title="'.$teambobj['title'].'">';
                        }
                      ?>
                    </div>
                    <?php if(  !empty($teamb['naam'])) printf('<h5 class="versus-team-name">%s</h5>', $teamb['naam']); ?>
                    
                  <?php endif; ?>
                  </div>
                  <?php endwhile; ?>
                </div>
                <div class="versus-btn">
                  <a href="<?php echo esc_url( home_url('wedstrijden') );?>">Voorbeschouwing
                    <i>  
                      <svg class="sp-fanshop-gallery-arrows-svg" width="27" height="14" viewBox="0 0 27 14" fill="#F6C042">
                        <use xlink:href="#sp-fanshop-gallery-arrows-svg"></use>
                      </svg>
                    </i>
                  </a>
                </div>
                <?php } wp_reset_postdata();?>
              </div>
            </div>

          </div>
          <div class="hm-training-schedule">
            <h4 class="hm-training-schedule-title">TRAININGSSCHEMA</h4>
            <ul class="reset-list">
              <li>
                <div>
                  <strong>DONDERDAG   -  17/01/2020  -  18u15</strong>
                  <span>Zandberg</span>
                </div>
              </li>
              <li>
                <div>
                  <strong>Zondag  -  17/01/2020  -  18u15</strong>
                  <span>EA-Châtelet</span>
                </div>
              </li>
              <li>
                <div>
                  <strong>DONDERDAG  -  17/01/2020  -  18u15</strong>
                  <span>Dender-EA</span>
                </div>
              </li>
            </ul>
            <div class="versus-btn">
                <a href="#">Voorbeschouwing
                  <i>  
                    <svg class="sp-fanshop-gallery-arrows-svg" width="27" height="14" viewBox="0 0 27 14" fill="#F6C042">
                      <use xlink:href="#sp-fanshop-gallery-arrows-svg"></use>
                    </svg>
                  </i>
                </a>
              </div>
          </div>
        </div>
        <div class="col-lg-12 col-xl-6">
          <div class="hm-ranking-sec-rgt-des">
            <?php get_template_part('templates/home', 'klassement'); ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php 
  $showhide_promo = get_field('showhide_promo', HOMEID);
  if( $showhide_promo ):
    $hpromo = get_field('home_promo', HOMEID);
    $ltype = $hpromo['layouttype'];
    if( $ltype == 'promo' ){
    $promo = $hpromo['promo'];
    if($promo):

    $bafbeelding = '';
    if( !empty($promo['afbeelding']) ){
      $bvafbeelding = cbv_get_image_src($promo['afbeelding'], 'hpromo');
    }
?>
<section class="hm-back-in-time-sec clearfix">
  <span class="hbits-topline"></span>
  <div class="hm-back-in-time-sec-angle"></div>
  <div class="hm-back-in-time-sec-inr">
      <div class="hm-back-in-time-sec-fea-img">
          <div class="inline-bg" style="background: url(<?php echo $bvafbeelding; ?>);"></div>
      </div>
    
    <div class="container">
        <div class="row">
          <div class="col-md-6">

          </div>
          <div class="col-md-6">
            <div class="hm-back-in-time-sec-des">
              <div>
                <span class="black-anlge-lft"><img src="<?php echo THEME_URI; ?>/assets/images/black-anlge-lft.png"></span>
                <?php if( !empty( $promo['hoofdtitel'] ) ) printf( '<h2 class="hmbitsdes-title">%s</h2>', $promo['hoofdtitel']);?>
                
                <?php if( !empty( $promo['datum'] ) ) printf( '<span class="hbitsdate">%s</span>', date("d F Y", strtotime($promo['datum'])) ); ?>
                <?php  
                  if( !empty( $promo['titel'] ) ) printf( '<strong>%s</strong>', $promo['titel']); 
                  if( !empty( $promo['beschrijving'] ) ) echo wpautop($promo['beschrijving']);  
                ?>
                <div class="hmbits-btns">
                  <?php 
                  $pknop1 = $promo['knop_1'];
                  $pknop2 = $promo['knop_2'];
                  if( is_array( $pknop1 ) &&  !empty( $pknop1['url'] ) ){
                      printf('<div class="hmbits-btn hmbits-btn-1"><a href="%s" target="%s">%s</a></div>', $pknop1['url'], $pknop1['target'], $pknop1['title']); 
                  } 
                  if( is_array( $pknop2 ) &&  !empty( $pknop2['url'] ) ){
                      printf('<div class="hmbits-btn hmbits-btn-2"><a href="%s" target="%s">%s</a></div>', $pknop2['url'], $pknop2['target'], $pknop2['title']); 
                  } 
                ?>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>    
</section>
<?php endif; ?>
<?php } else{ 
$webshop = $hpromo['webshop'];
if($webshop):

$shopproducts = $webshop['selecteerproducten']; 
  if( $shopproducts ){
    $arg_products = $shopproducts;
  } else{
    $args = array(
      'post_type' => 'product',
      'post_status' => 'publish',
      'posts_per_page' => -1,
    );
    $arg_products = get_posts( $args );
  }
?>
<section class="hm-back-in-time-sec hm-webshop-sec clearfix">
  <span class="hbits-topline"></span>
  <div class="hm-back-in-time-sec-inr">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="hm-webshop-sec-cntlr">
              <?php if( !empty( $webshop['titel'] ) ) printf( '<h2 class="hmws-title">%s</h2>', $webshop['titel']);?>
              <?php if( $arg_products ): ?>
              <div class="hm-webshop-slider hmWebshopSlider">
              <?php 
              foreach( $arg_products as $product_row ):
                setup_postdata($product_row);
                global $product;
                $thumb_id = get_post_thumbnail_id($product_row);
                if(!empty($thumb_id)){
                  $thumb = cbv_get_image_src($thumb_id, 'hproductgrid');
                } else {
                  $thumb = THEME_URI.'/assets/images/dproductgrid.jpg';
                }


              ?>
                <div class="hmWebshopSlideItem">
                  <div class="fanshop-post-grid-inr mHc clearfix">
                    <div class="fanshop-post-grid-img-cntlr">
                      <a href="<?php echo esc_url( get_permalink($product_row) ); ?>" class="overlay-link"></a>
                      <div class="fanshop-post-grid-img" style="background: url(<?php echo $thumb; ?>);">
                      </div>
                    </div>
                    <div class="fanshop-post-grid-dsc">
                      <strong>
                      <?php 
                        if($product->is_type('variable')): 
                          echo wc_price($product->get_variation_regular_price( 'min' )); 
                        else:
                          echo $product->get_price_html();
                        endif;
                      ?> 
                      </strong>
                      <h3 class="fanshop-post-grid-title mHc1"> <a href="<?php echo esc_url( get_permalink($product_row) ); ?>"><?php echo $product_row->post_title;?></a></h3>
                      <a href="<?php echo esc_url( get_permalink($product_row) ); ?>">
                        <i>  
                          <svg class="fanshop-post-arrows-icon-svg" width="27" height="14" viewBox="0 0 27 14" fill="#B4B4B4">
                            <use xlink:href="#fanshop-post-arrows-icon-svg"></use>
                          </svg>
                        </i>
                       meer info
                      </a>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>

              <div class="hm-webshop-sec-btmbar">
                <div class="fl-prev-next hmWebshopSliderPrevNext">
                  <span class="fl-prev">
                    <i>
                      <svg class="fl-prev-icon-svg" width="34" height="16" viewBox="0 0 34 16" fill="#fff">
                        <use xlink:href="#fl-prev-icon-svg"></use>
                      </svg> 
                    </i>
                  </span>
                  <span class="fl-next">
                    <i>
                      <svg class="fl-next-icon-svg" width="34" height="16" viewBox="0 0 34 16" fill="#fff">
                        <use xlink:href="#fl-next-icon-svg"></use>
                      </svg> 
                    </i>
                  </span>
                </div>
                <div class="hm-webshop-sec-btmbar-btn">
                  <a href="<?php echo get_permalink( get_option( 'woocommerce_shop_page_id' ) ); ?>">Meer producten</a>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
    </div>
  </div>    
</section> 
<?php endif; ?>
<?php } ?>

<?php endif; ?>
<?php 
  $showhide_shop = get_field('showhide_shop', HOMEID);
  if( $showhide_shop ):
    $shops = get_field('shopinfo', HOMEID);
    if($shops):
?>
<section class="sp-fanshop-gallery-sec-wrp hm-sp-fanshop-gallery-sec-cntlr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sp-fanshop-gallery-wrp">
          <ul class="ulc clearfix reset-list">
            <?php $i = 1; 
            $shoparray = array();
            foreach( $shops as $shop_row ): 

              if( $i >= 5 ){
                $shoparray[] = $shop_row;
              }
              if( !empty($shop_row['knop']) )
                $knopurl = $shop_row['knop'];
              else
                $knopurl = '#';
              if( $i < 5 ){
            ?>
            <li>
              <div class="sp-fanshop-gallery-inr">
                <div class="sp-fanshop-gallery-img" style="background: url(<?php if( !empty($shop_row['afbeelding']) ) echo cbv_get_image_src($shop_row['afbeelding']); ?>);">
                  <a href="<?php echo $knopurl; ?>" class="overlay-link"></a>
                  <div class="sp-fanshop-gallery-dsc">
                  <?php 
                    $iconobj = $shop_row['icon'];
                    if( is_array($iconobj) ){
                      echo'<img src="'.$iconobj['url'].'" alt="'.$iconobj['alt'].'" title="'.$iconobj['title'].'">';
                    }
                  ?>
                  <?php 
                    if( !empty( $shop_row['titel'] ) ) printf( '<h3 class="sp-fanshop-gallery-title"><a href="%s">%s</a></h3>', $knopurl, $shop_row['titel']); 
                    if( !empty( $shop_row['beschrijving'] ) ) echo wpautop($shop_row['beschrijving']); 
                  ?>
                    <a href="<?php echo $knopurl; ?>">
                      <i>  
                        <svg class="sp-fanshop-gallery-arrows-svg" width="27" height="14" viewBox="0 0 27 14" fill="#F6C042">
                          <use xlink:href="#sp-fanshop-gallery-arrows-svg"></use>
                        </svg>
                      </i>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <?php } $i++; endforeach; 
            ?>
          </ul>
        </div>
      </div>
      <?php if( $shoparray ): ?>
      <div class="col-md-12">
        <div class="sp-fanshop-gallery-btm">
          <ul class="clearfix reset-list">
            <?php 
            foreach( $shoparray as $shopr ): 
              if( !empty($shopr['knop']) )
                $rknopurl = $shopr['knop'];
              else
                $rknopurl = '#';
            ?>
            <li>
              <div class="sp-fanshop-btm-gallery-item">
                <div class="inline-bg sp-fanshop-btm-gallery-item-inr" style="background: url(<?php if( !empty($shopr['afbeelding']) ) echo cbv_get_image_src($shopr['afbeelding']); ?>);">
                  <a href="<?php echo $rknopurl; ?>" class="overlay-link"></a>
                  <div class="spfbg-item-des-cntlr">
                    <?php 
                    if( !empty( $shopr['titel'] ) ) printf( '<h3><a href="%s">%s</a></h3>', $rknopurl, $shopr['titel']); 
                    if( !empty( $shopr['beschrijving'] ) ) printf( '<p class="mHc">%s</p>', $shopr['beschrijving']);
                  ?>
                    <a href="<?php echo $rknopurl; ?>">
                      <i>  
                        <svg class="sp-fanshop-gallery-arrows-svg" width="27" height="14" viewBox="0 0 27 14" fill="#F6C042">
                          <use xlink:href="#sp-fanshop-gallery-arrows-svg"></use>
                        </svg>
                      </i>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>