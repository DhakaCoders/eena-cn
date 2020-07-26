<?php 
get_header(); 
while ( have_posts() ) :
the_post();

?>
<section class="innerpage-con-wrap">
  <?php if(have_rows('inhoud')){  ?>
  <div class="container-sm">
    <div class="row">
      <div class="col-sm-12">
        <article class="default-page-con">
          <strong class="post-date">VRIJDAG 27 MAART - 14U05</strong>
          <div class="dfp-promo-module clearfix">
            <div>
              <strong class="dfp-promo-module-title"><?php the_title(); ?></strong>
            </div>
            <div class="social-media">
              <strong>DELEN:</strong>
              <ul class="reset-list">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>
          <?php 
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
              $positie_afbeelding = get_sub_field('positie_afbeelding');
              $imgposcls = ( $positie_afbeelding == 'right' ) ? 'fl-dft-rgtimg-lftdes' : '';
              echo '<div class="fl-dft-overflow-controller">
                <div class="fl-dft-lftimg-rgtdes clearfix '.$imgposcls.'">';
                      echo '<div class="fl-dft-lftimg-rgtdes-lft mHc" style="background: url('.$imgsrc.');"></div>';
                echo '<div class="fl-dft-lftimg-rgtdes-rgt mHc">';
                    echo wpautop($fc_tekst);
                echo '</div>';
              echo '</div></div>';      
            }elseif( get_row_layout() == 'galerij' ){
              $gallery_cn = get_sub_field('afbeeldingen');
              $lightbox = get_sub_field('lightbox');
              $kolom = get_sub_field('kolom');
              if( $gallery_cn ):
              echo "<div class='gallery-wrap clearfix'><div class='gallery gallery-columns-{$kolom}'>";
                foreach( $gallery_cn as $image ):
                $imgsrc = cbv_get_image_src($image['ID'], 'dfpageg1');  
                echo "<figure class='gallery-item'><div class='gallery-icon portrait'>";
                if( $lightbox ) echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                    //echo '<div class="dfpagegalleryitem" style="background: url('.$imgsrc.');"></div>';
                    echo wp_get_attachment_image( $image['ID'], 'dfpageg1' );
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
            }elseif( get_row_layout() == 'producten' ){
              $fc_prodcts = get_sub_field('fc_producten');
                echo '<div class="dft-pro-items">
                    <div class="dft-pro-item">
                      <div class="hm-pro-bxe-item">
                        <div class="hm-pro-bxe-item-icon mHc1">
                          <i>
                            <svg class="hm-pro-bxe-item-icon-01-svg" width="84" height="84" viewBox="0 0 84 84" fill="#000062">
                              <use xlink:href="#hm-pro-bxe-item-icon-01-svg"></use>
                            </svg> 
                          </i>';
                echo '</div>';
                if( !empty( $fc_prodcts['titel'] ) ) printf( '<h3 class="hm-pro-bxe-item-title mHc2">%s</h3>', $fc_prodcts['titel']); 
                if( !empty( $fc_prodcts['beschrijving'] ) ) echo wpautop($fc_prodcts['beschrijving']); 
                if( !empty($fc_prodcts['knop']) ):
                echo '<div class="hm-pro-bxe-item-more-link">'; 
                  printf('<a href="%s">Ontdek onze oplossingen</a>', $fc_prodcts['knop']);
                echo '</div>';
                endif;
                echo '</div></div></div>';
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
              if( !empty($fc_afbeelding) ) $afbeeldingurl = cbv_get_image_src($fc_afbeelding);
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
          
           endwhile;?>
          <div class="social-media">
            <strong>DELEN:</strong>
            <ul class="reset-list">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div>
          <div class="prv-nxt-page-btns clearfix">
            <a class="prv-page-btn" href="#">
              <i>
                <svg class="prv-nxt-lft-arrow-icon-svg" width="30" height="30" viewBox="0 0 30 30" fill="#111111">
                  <use xlink:href="#prv-nxt-lft-arrow-icon-svg"></use>
                </svg> 
              </i>
              <span>vorig artikel</span>
            </a>
            <a class="nxt-page-btn" href="#">
              <span>volgend artikel</span>
              <i>
                <svg class="prv-nxt-rgt-arrow-icon-svg" width="30" height="30" viewBox="0 0 30 30" fill="#111111">
                  <use xlink:href="#prv-nxt-rgt-arrow-icon-svg"></use>
                </svg> 
              </i>
            </a>
          </div>
        </article>

      </div>
    </div>
  </div>
<?php }else{ ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="default-page-con">
                <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</section>
<?php endwhile; ?>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>