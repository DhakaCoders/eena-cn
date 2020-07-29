<?php 
get_header(); 
while ( have_posts() ) :
the_post();
$permalink = get_the_permalink();
$pagetitle = get_the_title();
?>
<section class="player-category-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <?php 
        $terms = get_terms( array(
          'taxonomy' => 'team_cat',
          'hide_empty' => false,
          'parent' => 0
        ) );
        if( $terms ):
      ?>
        <div class="player-category-sec-inr player-az clearfix">
          <?php
            $i = 1;
            foreach( $terms as $term ):
            if( $term->slug !='uncategorized' ):
          ?>
          <div class="player-<?php echo $i; ?>">
            <h4 class="pt-title"><?php echo $term->name; ?></h4>
          <?php 
              $query = new WP_Query(array( 
                  'post_type'=> 'teams',
                  'post_status' => 'publish',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'team_cat',
                          'field'    => 'term_id',
                          'terms'    => $term->term_id
                      ),
                  ),
                ) 
              );
              
              if($query->have_posts()){
            ?>
            <ul class="reset-list">
              <?php 
              while($query->have_posts()): $query->the_post(); 
                $about = get_field('aboutsec', get_the_ID());
              ?>
              <li<?php echo ($pagetitle == get_the_title())? ' class="active"':'';?>>
              <a href="<?php the_permalink();?>">
                <?php 
                if( !empty($about['achternaam']) ) 
                  printf('%s', $about['achternaam']); 
                elseif(!empty($about['voornaam']))
                  printf('%s', $about['voornaam']);
                else
                  printf('%s', get_the_title());
                ?>
                
              </a>
            </li>
              <?php endwhile; ?>
            </ul>
            <?php } wp_reset_postdata();?>
          </div>
          <?php $i++; endif; ?>
          <?php endforeach; ?>
        </div>
        <div class="xs-link">
          <?php
            $i = 1;
            foreach( $terms as $term ):
            if( $term->slug !='uncategorized' ):
          ?>
          <div class="player-0<?php echo $i; ?>">
          <strong class="xs-tabs-btn"><?php echo $term->name; ?></strong>
          <ul class="reset-list clearfix">
            <?php 
              $query = new WP_Query(array( 
                  'post_type'=> 'teams',
                  'post_status' => 'publish',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'team_cat',
                          'field'    => 'term_id',
                          'terms'    => $term->term_id
                      ),
                  ),
                ) 
              );
              
              if($query->have_posts()){
            ?>
            <?php 
            while($query->have_posts()): $query->the_post(); 
              $about = get_field('aboutsec', get_the_ID());
            ?>
            <li><a href="<?php the_permalink();?>">
              <?php 
                if( !empty($about['achternaam']) ) 
                  printf('%s', $about['achternaam']); 
                elseif(!empty($about['voornaam']))
                  printf('%s', $about['voornaam']);
                else
                  printf('%s', get_the_title());
                ?>
            </a></li> 
            <?php endwhile; ?>
            <?php } wp_reset_postdata();?>
          </ul>
            </div>
          <?php $i++; endif; ?>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php 
$sabout = get_field('aboutsec', get_the_ID());
$overv = get_field('overviewsec', get_the_ID());
?>
<section class="player-details-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="player-details-sec-inr">
          
          <h2 class="player-details-title">
            <?php the_title(); ?> 
            <?php 
              if( $sabout ): if( !empty($sabout['rugnummer']) ) printf('<strong>#%s</strong>', $sabout['rugnummer']);  
              endif; 
            ?>
          </h2>
          
          <div class="player-details clearfix">
            <div class="player-fac">
              <?php 
                if( $overv ): 
                  $gallery = $overv['galerij'];
                  $fullmainpath = '';
                  if(!empty($overv['afbeelding_1'])){
                    $fullmainpath = cbv_get_image_src($overv['afbeelding_1']);
                  }
              ?>
              <div data-fancybox="gallery" href="<?php echo $fullmainpath; ?>" class="player-fac-img inline-bg" style="background: url('<?php echo $fullmainpath; ?>');">
              </div>
              <?php if( $gallery ): ?>
              <div class="player-btm-img clearfix">
                <?php 
                  $fullpath = '';
                  $i = 1;
                  foreach( $gallery as $galry ): 
                  if(!empty($galry['id'])){
                    $fullpath = cbv_get_image_src($galry['id']);
                  }
                ?>
                <div data-fancybox="gallery" href="<?php echo $fullpath; ?>" class="plyr-btm-img-0<?php echo $i; ?>">
                  <?php 
                    if(!empty($galry['id'])){
                      echo cbv_get_image_tag($galry['id']);
                    }
                  ?>
                </div>
                <?php $i++; endforeach; ?>
              </div>
              <?php endif; ?>
              <?php endif; ?>
            </div>
            <?php if( $sabout ): ?>
            <div class="player-des">
              <div class="list-grd">
                <ul class="reset-list">
                  <li class="clearfix">
                    <strong>VOORNAAM</strong>
                    <?php if( !empty($sabout['voornaam']) ) printf('<span>%s</span>', $sabout['voornaam']); ?>
                  </li>
                  <li class="clearfix">
                    <strong>ACHTERNAAM</strong>
                    <?php if( !empty($sabout['achternaam']) ) printf('<span>%s</span>', $sabout['achternaam']); ?>
                  </li>
                  <li class="clearfix">
                    <strong>RUGNUMMER</strong>
                    <?php if( !empty($sabout['rugnummer']) ) printf('<span>%s</span>', $sabout['rugnummer']); ?>
                  </li>
                  <li class="clearfix">
                    <strong>POSITIE</strong>
                    <?php if( !empty($sabout['positie']) ) printf('<span>%s</span>', $sabout['positie']); ?>
                  </li>
                  <li class="clearfix">
                    <strong>NATIONALITEIT</strong>
                    <?php if( !empty($sabout['nationaliteit']) ) {
                      $ccode = strtolower($sabout['nationaliteit']['value']);
                      $curl = '';
                      if( !empty($ccode) ) $curl = "https://ipdata.co/flags/{$ccode}.png";
                      printf('<span class="ntnl flags" style="background:url('.$curl.');">%s</span>', $sabout['nationaliteit']['label']); 
                    }
                    ?>
                  </li>
                  <li class="clearfix">
                    <strong>BIJ EA SINDS</strong>
                    <?php if( !empty($sabout['bijeasinds']) ) printf('<span>%s</span>', $sabout['bijeasinds']); ?>
                  </li>
                  <li class="clearfix">
                    <strong>CONTRACT TOT</strong>
                    <?php if( !empty($sabout['contracttot']) ) printf('<span>%s</span>', $sabout['contracttot']); ?>
                  </li>
                  <li class="clearfix">
                    <strong>GEBOORTEDATUM</strong>
                    <?php if( !empty($sabout['geboortedatum']) ) printf('<span>%s</span>', $sabout['geboortedatum']); ?>
                  </li>
                  <li class="clearfix">
                    <strong>VORIGE  CLUBS</strong>
                    <?php if( !empty($sabout['vorigeclubs']) ) printf('<span>%s</span>', $sabout['vorigeclubs']); ?>
                  </li>
                </ul>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="social-media">
          <strong>DELEN:</strong>
          <ul class="reset-list">
            <li><a class="facebook"  href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>"><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="twitter" href="https://twitter.com/home?status=<?php echo $permalink; ?>"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>