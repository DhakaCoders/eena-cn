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
              'terms'    => 'volgende-wedstrijd',
          ),
      ),
    ) 
  );
  
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