<?php 
	/*
	Template Name: Wedstrijden
	*/
	get_header(); 
	$thisID = get_the_ID();
  $intro = get_field('introsec', $thisID); 
  $shops = get_field('shopinfo', $thisID); 
?>
<section class="classroom-sec-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="classroom-inr">
          <div class="classroom-desc">
            <div class="classroom-desc-cntlr game-desc-cntlr">
              <?php if( !empty( $intro['titel'] ) ) printf( '<h3 class="classroom-desc-title">%s</h3>', $intro['titel']); ?>
              <div class="classroom-table-wrap">
                <div class="table-inr">
                  <table>
                  <thead class="classroom-thead Wed-am-thead">
                    <tr>
                      <th><span class="">#</span></th>
                      <th><span class=""></span></th>
                      <th><span class="">datuum</span></th>
                      <th><span class="">uur</span></th>
                      <th><span class="">score</span></th>
                    </tr>
                  </thead>
                  <?php 
                    $query = new WP_Query(array( 
                        'post_type'=> 'matches',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'date'
                      ) 
                    );
                    
                    if($query->have_posts()){
                  ?>
                  <tbody class="classroom-tbody Wed-am-tbody">
                    <?php
                      $i = 1;
                      while($query->have_posts()): $query->the_post();
                      $intro = get_field('intro', get_the_ID());
                      $teama = get_field('teama', get_the_ID());
                      $teamb = get_field('teamb', get_the_ID());
                    ?>
                    <tr>
                      <td><span class=""><?php echo $i; ?>.</span></td>
                      <td> <span class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></td>
                      <td><span class=""><?php if( !empty($intro['datuum1']) ) printf('%s', $intro['datuum1']); ?></span></td>
                      <td><span class=""><?php if( !empty($intro['uur']) ) printf('%s', $intro['uur']); ?></span></td>
                      <td>
                        <span class="">
                          <?php 
                            echo !empty($teama['score'])? $teama['score']:'0';
                            echo ' - ';
                            echo !empty($teamb['score'])? $teamb['score']:'0';
                          ?>
                        </span>
                      </td>
                    </tr>
                    <?php $i++; endwhile; ?>
                  </tbody>
                  <?php } wp_reset_postdata();?>
                </table>
                </div>
              </div>
            </div>
          </div>
          <div class="classroom-aside-cntlr">
            <div class="classroom-aside-inr">
              <div class="versus-match-cntlr">
              <div class="versus-match-title">
                <div class="fl-tabs match-tabs">
                  <ul class="reset-list clearfix">
                    <li><a class="tab-link current" href="#" data-tab="mt-tab-1">volgende wedstrijd</a></li>
                  </ul>
                </div>
              </div>
              
              <div id="mt-tab-1" class="fl-tab-content current">
                <?php get_template_part('templates/upcomming', 'game'); ?>
              </div>
            </div>

              
              <div class="classroom-aside-bottom">
                <?php if( $shops ): ?>
                <ul class="reset-list">
                  <?php foreach( $shops as $shop ): ?>
                  <li>
                    <div class="sp-fanshop-gallery-inr">
                      <div class="sp-fanshop-gallery-img" style="background: url(<?php if( !empty($shop['afbeelding']) ) echo cbv_get_image_src($shop['afbeelding']); ?>);">
                        <div class="sp-fanshop-gallery-dsc">
                        <?php 
                          $iconobj = $shop['icon'];
                          if( is_array($iconobj) ){
                            echo'<img src="'.$iconobj['url'].'" alt="'.$iconobj['alt'].'" title="'.$iconobj['title'].'">';
                          }
                          if( !empty($shop['knop']) )
                            $knopurl = $shop['knop'];
                          else
                            $knopurl = '#';

                        ?>
                          <?php 
                            if( !empty( $shop['titel'] ) ) printf( '<h3 class="sp-fanshop-gallery-title"><a href="%s">%s</a></h3>', $knopurl, $shop['titel']); 
                            if( !empty( $shop['beschrijving'] ) ) echo wpautop($shop['beschrijving']); 
                          ?>

                          <?php if( !empty($shop['knop']) ): ?>
                          <a href="<?php echo $shop['knop']; ?>">
                            <i>  
                              <svg class="sp-fanshop-gallery-arrows-svg" width="27" height="14" viewBox="0 0 27 14" fill="#F6C042">
                                <use xlink:href="#sp-fanshop-gallery-arrows-svg"></use>
                              </svg>
                            </i>
                          </a>
                          <?php endif; ?>
                        </div>
                      </div>
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
  </div>
</section>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>