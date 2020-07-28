<?php 
	/*
	Template Name: Team
	*/
	get_header(); 
	$thisID = get_the_ID();
  $intro = get_field('introsec', $thisID); 
?>
<section class="team-content-wrap">
  <div class="team-content-entry-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="entry-header-innr">
            <?php if( $intro ): ?>
            <?php if( !empty( $intro['titel'] ) ) printf( '<h2 class="entry-header-title">%s</h2>', $intro['titel']); ?>
            <div class="entry-header-desc">
              <?php if( !empty( $intro['beschrijving'] ) ) echo wpautop($intro['beschrijving']); ?>
            </div>
            <?php endif; ?>
            <div class="entry-header-tab">
            <?php 
              $terms = get_terms( array(
                'taxonomy' => 'team_cat',
                'hide_empty' => false,
                'parent' => 0
              ) );
              if( $terms ):
            ?>
              <ul class="reset-list">
              <?php
                $i = 1;
                foreach( $terms as $term ):
                if( $term->slug !='uncategorized' ):
              ?>
                <li><h4><a class="<?php echo ($i == 1)? 'active ':''; ?>scrollto" data-to="#team-row-<?php echo $i; ?>" href="#"><?php echo $term->name; ?></a></h4></li>
                <?php $i++; endif; ?>
                <?php endforeach; ?>
              </ul>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="team-players">
    <?php 
      if( $terms ):
    ?>
    <div class="container">
      <?php
        $i = 1;
        foreach( $terms as $term ):
        if( $term->slug !='uncategorized' ):
      ?>
      <div class="row">
        <div class="col-md-12">
          <div id="team-row-<?php echo $i; ?>" class="team-players-inr team-players-row-<?php echo $i; ?> team-players-hover">
            <h3 class="team-players-title"><?php echo $term->name; ?></h3>
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
                $thumb1 = $thumb2 = '';
                while($query->have_posts()): $query->the_post();
                $overview = get_field('overviewsec', get_the_ID());
                if(!empty($overview['afbeelding_1'])){
                  $thumb1 = cbv_get_image_src($overview['afbeelding_1']);
                }
                if(!empty($overview['afbeelding_2'])){
                  $thumb2 = cbv_get_image_src($overview['afbeelding_2']);
                }
              ?>
              <li>
                <div class="team-player-cntlr">
                  <div class="team-player">
                    <div class="team-player-img-cntrl">
                      <div class="team-player-img inline-bg" style="background: url('<?php echo $thumb1; ?>');">
                      </div>
                      <div class="team-player-img-hover inline-bg" style="background: url('<?php echo $thumb2; ?>');">
                      </div>
                      <a href="<?php the_permalink();?>" class="overlay-link"></a>
                    </div>
                    <div class="team-player-hdng mHc">
                      <h5 class="team-player-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
                    </div>
                  </div>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
            <?php } wp_reset_postdata();?>
          </div>
        </div>
      </div>
      <?php $i++; endif; ?>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>