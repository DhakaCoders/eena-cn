<?php 
	/*
	Template Name: Sponsors Overview
	*/
	get_header(); 
	$thisID = get_the_ID();
	$intro = get_field('introsec', $thisID); 
	$shops = get_field('shopinfo', $thisID); 
?>

<section class="sp-service-sec-wrp">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sp-service-wrp">
            <?php if( !empty( $intro['titel'] ) ) printf( '<h2 class="sp-service-title">%s</h2>', $intro['titel']); ?>
            <?php
              $query = new WP_Query(array( 
                'post_type'=> 'partners',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order'=> 'DESC'
                ) 
              );
              if($query->have_posts()){
            ?>
            <ul class="reset-list clearfix">
              <?php 
              while($query->have_posts()): $query->the_post(); 
                $titel = get_field('titel', get_the_ID());
                $iconobj = get_field('logo', get_the_ID());
                $knop = get_field('knop', get_the_ID());
                $beschrijving = get_field('beschrijving', get_the_ID());
                if( !empty($knop) ) 
                  $knopurl = $knop;
                else
                  $knopurl = '#';
              ?>
              <li>
                <div class="sp-service-box-inr">
                  <div class="sp-service-box-img">
                  <?php 
                    if( is_array($iconobj) ){
                      echo'<img src="'.$iconobj['url'].'" alt="'.$iconobj['alt'].'" title="'.$iconobj['title'].'">';
                    }
                  ?>
                  </div>
                  <div class="sp-service-box-hover">
                    <div class="sp-service-box-dsc">
                      <?php 
                        if( !empty( $titel ) ) printf( '<h3 class="sp-service-box-dsc-title">%s</h3>', $titel); 
                        if( !empty( $beschrijving ) ) echo wpautop($beschrijving); 
                      ?>
                      <a href="<?php echo $knopurl; ?>">meer info</a>
                    </div>
                  </div>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
             <?php } wp_reset_postdata();  ?>
          </div>
        </div>
      </div>
  </div>    
</section>

<?php if( $shops ): ?>
<section class="sp-fanshop-gallery-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sp-fanshop-gallery-wrp">
          <ul class="reset-list clearfix">
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
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>