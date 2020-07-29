<?php get_header(); ?>
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
    <strong>ACTUA</strong>
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
<section class="eena-nieuws-grid-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="eena-nieuws-grid-sec-inr">
          <div class="eena-nieuws-link">
            <strong>Filter:</strong>
            <?php 
                $first_term = '';
				$terms = get_terms( array(
				  'taxonomy' => 'category',
				  'hide_empty' => false,
				  'parent' => 0
				) );
			if( $terms ):
            ?>
            <ul class="reset-list postSlider">
              <?php
              $i = 1; 
              foreach( $terms as $term ):
              	if( $i == 1 ){
              		$first_term = $term->slug;
              	}
              	if( $term->slug !='uncategorized' ):
              if( $i == 1 ){
              ?>
              <li class="current"><a href="#" onclick='postCategory("<?php echo $term->slug; ?>", this); return false'><?php echo $term->name; ?></a></li>
          		<?php }else{ ?>
              <li><a href="#" onclick='postCategory("<?php echo $term->slug; ?>", this); return false'><?php echo $term->name; ?></a></li>
              <?php } endif; ?>
              <?php $i++; endforeach; ?>
            </ul>
            <span id="firstTerm" data-term="<?php echo $first_term; ?>" style="display: none;"></span>
        	<?php endif; ?>
          	</div>
          	<div id="post-content" class="loading-now">
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>