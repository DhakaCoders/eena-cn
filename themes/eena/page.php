<?php 
get_header(); 
while ( have_posts() ) :
the_post();

?>
<section class="innerpage-con-wrap">
  <div class="container-sm">
    <div class="row">
      <div class="col-sm-12">
        <article class="default-page-con">
          <?php 
            if(have_rows('inhoud')){ 
            while ( have_rows('inhoud') ) : the_row(); 
          if( get_row_layout() == 'introductietekst' ){
              $title = get_sub_field('titel');
              $afbeelding = get_sub_field('afbeelding');
              echo '<div class="dfp-promo-module clearfix">';
                if( !empty($title) ) printf('<div><strong class="dfp-promo-module-title">%s</strong></div>', $title);
                if( !empty($afbeelding) ){
                  echo '<div class="dfp-plate-one-img-bx">', cbv_get_image_tag($afbeelding), '</div>';
                }
              echo '</div>';    
          }elseif( get_row_layout() == 'teksteditor' ){
              $beschrijving = get_sub_field('fc_teksteditor');
              echo '<div class="dfp-text-module clearfix">';
                if( !empty( $beschrijving ) ) echo wpautop($beschrijving);
              echo '</div>';    
            }elseif( get_row_layout() == 'afbeelding_tekst' ){
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              $imgsrc = cbv_get_image_src($fc_afbeelding, 'dfpageg1');
              $fc_tekst = get_sub_field('fc_tekst');
              $fc_title = get_sub_field('fctitel');
              $positie_afbeelding = get_sub_field('positie_afbeelding');
              $imgposcls = ( $positie_afbeelding == 'right' ) ? 'fl-dft-rgtimg-lftdes' : '';
              echo '<div class="fl-dft-overflow-controller">';
                if(!empty($fc_title)) printf('<h2>%s</h2>', $fc_title);
                echo '<div class="fl-dft-lftimg-rgtdes clearfix '.$imgposcls.'">';
                      echo '<div class="fl-dft-lftimg-rgtdes-lft mHc" style="background: url('.$imgsrc.');"></div>';
                echo '<div class="fl-dft-lftimg-rgtdes-rgt mHc">';
                    echo wpautop($fc_tekst);
                echo '</div>';
              echo '</div></div>';      
            }elseif( get_row_layout() == 'wedstrijden' ){
              $fc_volgende_wedstrijd = get_sub_field('fc_volgende_wedstrijd');
              $fc_vorige_wedstrijd = get_sub_field('fc_vorige_wedstrijd');
            ?>
            <div class="dft-versus-match-cntlr">
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
                <?php 
                  if( !empty($fc_volgende_wedstrijd) ):
                  $query = new WP_Query(array( 
                      'post_type'=> 'matches',
                      'post_status' => 'publish',
                      'posts_per_page' => 1,
                      'post__in' => array($fc_volgende_wedstrijd),
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'match_cat',
                              'field'    => 'slug',
                              'terms'    => 'volgende-wedstrijd',
                          ),
                      ),
                    ) 
                  );
                  else:
                    $query = new WP_Query(array( 
                      'post_type'=> 'matches',
                      'post_status' => 'publish',
                      'posts_per_page' => 1,
                      'orderby' => 'date',
                      'order' => 'DESC',
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'match_cat',
                              'field'    => 'slug',
                              'terms'    => 'volgende-wedstrijd',
                          ),
                      ),
                    ) 
                  );
                  endif;

                  
                  if($query->have_posts()){
                ?>
                <div class="versus-match">
                  <?php
                    $i = 1;
                    while($query->have_posts()): $query->the_post();
                    $intro = get_field('intro', get_the_ID());
                    $teama = get_field('teama', get_the_ID());
                    $teamb = get_field('teamb', get_the_ID());
                  ?>
                  <div class="versus-team versus-match-item">
                    <?php if( $teama ): ?>
                    <div class="versus-team-logo versus-team-logo-lft">
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
                  <div class="versus-logo versus-match-item versus-team-logo-rgt" style="background: url('<?php echo THEME_URI; ?>/assets/images/vs-icon.png');">
                    <div class="versus-play-time hide-sm">
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
                </div>

                <div class="versus-play-time versus-play-time-sm show-sm">
                <?php if( !empty($intro['datuum2']) ) printf('<span>%s</span>', $intro['datuum2']); ?>
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
                <?php $i++; endwhile; ?>
                <?php } wp_reset_postdata();?>
              </div>
              <div id="mt-tab-2" class="fl-tab-content">
                <?php 
                  if( !empty($fc_vorige_wedstrijd) ):
                  $query = new WP_Query(array( 
                      'post_type'=> 'matches',
                      'post_status' => 'publish',
                      'posts_per_page' => 1,
                      'post__in' => array($fc_vorige_wedstrijd),
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'match_cat',
                              'field'    => 'slug',
                              'terms'    => 'vorige-wedstrijd',
                          ),
                      ),
                    ) 
                  );
                  else:
                    $query = new WP_Query(array( 
                      'post_type'=> 'matches',
                      'post_status' => 'publish',
                      'posts_per_page' => 1,
                      'orderby' => 'date',
                      'order' => 'DESC',
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'match_cat',
                              'field'    => 'slug',
                              'terms'    => 'vorige-wedstrijd',
                          ),
                      ),
                    ) 
                  );
                  endif;
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
            </div>
            <?php }elseif( get_row_layout() == 'galerij' ){
              $gallery_cn = get_sub_field('afbeeldingen');
              $lightbox = get_sub_field('lightbox');
              $kolom = get_sub_field('kolom');
              if( $gallery_cn ):
              echo "<div class='gallery-wrap clearfix'><div class='gallery gallery-columns-{$kolom}'>";
                foreach( $gallery_cn as $image ):
                $imgsrc = cbv_get_image_src($image['ID'], 'dfpageg2');  
                echo "<figure class='gallery-item'><div class='gallery-icon portrait'>";
                if( $lightbox ) echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                    //echo '<div class="dfpagegalleryitem" style="background: url('.$imgsrc.');"></div>';
                    echo wp_get_attachment_image( $image['ID'], 'dfpageg2' );
                if( $lightbox ) echo "</a>";
                echo "</div></figure>";
                endforeach;
              echo "</div></div>";
              endif;      
            }elseif( get_row_layout() == 'shopinfo' ){
              $fc_usps = get_sub_field('fc_shopinfo');
              echo "<div class='dft-fanshop-items'><div class='sp-fanshop-gallery-wrp'>";
              echo '<ul class="ulc clearfix reset-list">';
                $afbeeldingurl = '';
                foreach( $fc_usps as $usp ):
                    $iconobj = $usp['icon'];
                    if( !empty($usp['afbeeldingen']) ) $afbeeldingurl = cbv_get_image_src($usp['afbeeldingen']);

                    if( !empty($usp['knop']) ):
                      $shopurl = $usp['knop'];
                    else: 
                      $shopurl = '#';
                    endif;
                      echo '<li>';
                      echo '<div class="sp-fanshop-gallery-inr">';
                        echo '<div class="sp-fanshop-gallery-img" style="background: url('.$afbeeldingurl.');">';
                          echo '<a href="#" class="overlay-link"></a>';
                          echo '<div class="sp-fanshop-gallery-dsc">';
                            if( is_array($iconobj) ){
                              echo'<img src="'.$iconobj['url'].'" alt="'.$iconobj['alt'].'" title="'.$iconobj['title'].'">';
                            }
                            printf('<h3 class="sp-fanshop-gallery-title"><a href="%s">%s</a></h3>', $shopurl, $usp['titel']);
                            if( !empty( $usp['beschrijving'] ) ) echo wpautop($usp['beschrijving']);
                            echo '<a href="'.$shopurl.'">
                              <i>  
                                <svg class="sp-fanshop-gallery-arrows-svg" width="27" height="14" viewBox="0 0 27 14" fill="#F6C042">
                                  <use xlink:href="#sp-fanshop-gallery-arrows-svg"></use>
                                </svg>
                              </i>
                            </a>';
                          echo '</div>
                        </div>
                      </div>
                    </li>';
                endforeach;
                echo '</ul>';
              echo "</div></div>";
            }elseif( get_row_layout() == 'nieuws' ){
              $fc_nieuws = get_sub_field('fc_nieuws');
              if( !empty($fc_nieuws ) ){
                $query = new WP_Query(array( 
                    'post_type'=> 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => count($fc_nieuws),
                    'post__in' => $fc_nieuws
                  ) 
                );
              }else{
                $query = new WP_Query(array( 
                    'post_type'=> 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 2,
                    'orderby' => 'date',
                    'order' => 'DESC'
                  ) 
                );
              }
                
              if($query->have_posts()){
              echo '<div class="dft-news-overview-grds">
                <div class="clearfix dft-news-overview-slider dftNewsOverviewSlider">';
                  while($query->have_posts()): $query->the_post();
                  $thumb_id = get_post_thumbnail_id(get_the_ID());
                  if(!empty($thumb_id)){
                    $thumb = cbv_get_image_src($thumb_id, 'hbloggrid');
                  } else {
                    $thumb = THEME_URI.'/assets/images/hdflt-img.jpg';
                  }
                  echo '<div class="dftNewsOverviewSlideItem"><div class="eena-grd-item">';
                    echo '<div class="eena-grd-item-fea-img-ctlr">'; 
                      echo '<a href="'.get_the_permalink().'" class="overlay-link"></a>'; 
                      echo '<div class="eena-grd-item-fea-img" style="background: url('.$thumb.');"></div>'; 
                    echo '</div>'; 
                    echo '<div class="eena-grd-item-des mHc">'; 
                    echo '<strong>';
                    echo get_the_date( 'l j F - g:i A');
                    echo '</strong>'; 
                    echo '<h3 class="eena-gid-title mHc1">'; 
                    echo '<a href="'.get_the_permalink().'">'.get_the_title().'</a>'; 

                    echo '</h3>'; 
                    echo get_the_excerpt();
                  echo '<a href="'.get_the_permalink().'">LEES MEEr</a>'; 
                    echo '</div>'; 
                  echo '</div></div>'; 
                  endwhile;
              echo '</div></div>'; 
              } wp_reset_postdata();
            }elseif( get_row_layout() == 'partners' ){
              $fc_partners = get_sub_field('fc_partners');
              $fc_titel = get_sub_field('fc_titel');
              if( $fc_partners ):
              echo '<div class="dft-clint-logos">';
                if( !empty( $fc_titel ) ) printf( '<h5 class="dft-clint-logos-module-title">%s</h5>', $fc_titel); 
                foreach( $fc_partners as $partner ):
                $logoObj = $partner['selectpartners'];
                echo '<ul class="clearfix reset-list">';
                if( $logoObj ): 
                foreach( $logoObj as $logo_row ):
                  $iconobj = get_field('logo', $logo_row->ID);
                  if( is_array($iconobj) ){
                  echo'<li><div class="mHc"><img src="'.$iconobj['url'].'" alt="'.$iconobj['alt'].'" title="'.$iconobj['title'].'"></div></li>';
                }
                endforeach;
                endif;
                echo '</ul>';
                endforeach;
              echo '</div>';
            endif;
            }elseif( get_row_layout() == 'promo' ){
              $afbeeldingurl = '';
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              if( !empty($fc_afbeelding) ) $afbeeldingurl = cbv_get_image_src($fc_afbeelding, 'dfpageg3');
              $fc_titel = get_sub_field('fc_titel');
              $fc_beschrijving = get_sub_field('fc_beschrijving');
              $fc_knop = get_sub_field('fc_knop');
              echo'<div class="dft-back-in-time-sec">';
                echo'<div class="hm-back-in-time-sec clearfix">';
                  echo'<div class="hm-back-in-time-sec-angle"></div>';
                  echo'<div class="hm-back-in-time-sec-inr">';
                      echo'<div class="hm-back-in-time-sec-fea-img">';
                          echo'<div class="inline-bg" style="background: url('.$afbeeldingurl.');"></div>';
                      echo'</div>';
                    
                    echo'<div class="row">';
                      echo'<div class="col-md-5">';

                      echo'</div>';
                      echo'<div class="col-md-7">';
                        echo'<div class="hm-back-in-time-sec-des">';
                          echo'<div>';
                            echo'<span class="black-anlge-lft"><img src="'.THEME_URI.'/assets/images/black-anlge-lft-dft.png"></span>';
                            if( !empty( $fc_titel ) ) printf( '<strong>%s</strong>', $fc_titel); 
                            if( !empty( $fc_beschrijving ) ) echo wpautop($fc_beschrijving);
                            echo'<div class="hmbits-btns">';
                            echo'<div class="hmbits-btn hmbits-btn-1">';
                              if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
                                  printf('<a href="%s" target="%s">%s</a>', $fc_knop['url'], $fc_knop['target'], $fc_knop['title']); 
                              } 
                              echo'</div>';
                            echo'</div>';
                          echo'</div>';
                        echo'</div>';
                      echo'</div>';
                    echo'</div>';
                  echo'</div> ';   
                echo'</div>';
              echo'</div>';
            }elseif( get_row_layout() == 'table' ){
              $fc_table = get_sub_field('fc_table');
              cbv_table($fc_table);
            }elseif( get_row_layout() == 'trainingschema' ){
              $schemas = get_sub_field('fc_titel');
              $training = get_sub_field('fc_trainingschema'); 
              if( $training ){
              $arg_training = $training;
              } else{
              $args = array(
                'post_type' => 'trainingschema',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order'=> 'DESC',
              );
              $arg_training = get_posts( $args );
              }

              echo '<div class="hm-training-schedule">';
              if( !empty( $schemas ) ) printf( '<h4 class="hm-training-schedule-title">%s</h4>', $schemas); 
              if( $arg_training ): 
              echo '<ul class="reset-list">';

              foreach( $arg_training as $train_row ):
              $train_intro = get_field('intro', $train_row->ID);

              echo '<li><div><strong>';
                 echo $train_row->post_title.' - ';  
                  if( !empty($train_intro['datum']) ) printf('%s', $train_intro['datum']);
              echo '</strong>';
              if( !empty($train_intro['evenementenlocatie']) ) printf('<span>%s</span>', $train_intro['evenementenlocatie']); 
              echo '</div></li>';
              endforeach; 
              echo '</ul>';
              echo '<div class="versus-btn">';
              echo '<a href="'.esc_url( home_url('wedstrijden') ).'">Voorbeschouwing
                  <i>  
                    <svg class="sp-fanshop-gallery-arrows-svg" width="27" height="14" viewBox="0 0 27 14" fill="#F6C042">
                      <use xlink:href="#sp-fanshop-gallery-arrows-svg"></use>
                    </svg>
                  </i>
                </a>';
              echo '</div>';
              endif;
              echo '</div>';
          
            }elseif( get_row_layout() == 'lists' ){
              $fc_lists = get_sub_field('fc_lists');
              if( $fc_lists ):
              echo'<div class="dfp-text-module clearfix list-module">';
                echo'<div class="list-module-cntlr">';
                  echo'<ul class="reset-list">';
                  foreach( $fc_lists as $fc_list ):
                    echo '<li><div>';
                    if( !empty( $fc_list['titel'] ) ) printf( '<strong>%s</strong>', $fc_list['titel']); 
                    if( !empty( $fc_list['beschrijving'] ) ) printf( '<span>%s</span>', $fc_list['beschrijving']); 
                    echo '</div></li>';
                  endforeach;
                  echo'</ul>';
                echo'</div>';
              echo'</div>';
              endif;
            }elseif( get_row_layout() == 'horizontal_rule' ){
              $fc_horizontal_rule = get_sub_field('fc_horizontal_rule');
              echo '<div class="dft-2grd-img-content-separetor" style="height:'.$fc_horizontal_rule.'px"></div>';
            }elseif( get_row_layout() == 'afbeelding' ){
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              if( !empty( $fc_afbeelding ) ){
                printf('<div class="dfp-plate-one-img-bx">%s</div>', cbv_get_image_tag($fc_afbeelding));
              }
            }elseif( get_row_layout() == 'horizontal_rule' ){
              $rheight = get_sub_field('fc_horizontal_rule');
              printf('<div class="dfhrule clearfix" style="height: %spx;"></div>', $rheight);
          
            }elseif( get_row_layout() == 'gap' ){
             $gap = get_sub_field('fc_gap');
             printf('<div class="gap clearfix" data-value="20" data-md="20" data-sm="20" data-xs="10" data-xxs="10"></div>', $rheight);
            }
          
           endwhile;
         } else{
            echo '<div class="default-page-con">';
              the_content();
            echo '</div>';
           }
        ?>
        </article>

      </div>
    </div>
  </div>
</section>
<?php 
endwhile;
get_template_part('templates/footer', 'top'); 
get_footer(); 

?>