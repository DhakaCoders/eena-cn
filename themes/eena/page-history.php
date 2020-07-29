<?php 
/*
	Template Name: History	
*/
get_header(); 
  $thisID = get_the_ID();
  $intro = get_field('introsec', $thisID);
?>
<section class="history-section-wrap">
  <div class="history-entry-hdr">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="history-entry-hdr-innr">
            <?php 
	            if( !empty( $intro['titel'] ) ) printf( '<h2 class="history-entry-hdr-title">%s</h2>', $intro['titel']); 
	            if( !empty( $intro['beschrijving'] ) ) {
            		echo '<div class="history-entry-hdr-desc">'; 
            			echo wpautop($intro['beschrijving']);
            		echo '</div>';
            	} 
	        ?>
            <div class="history-entry-hdr-tab">
            	<?php 
	                $first_term = '';
					$terms = get_terms( array(
					  'taxonomy' => 'history_cat',
					  'hide_empty' => false,
					  'parent' => 0
					) );
				if( $terms ):
	            ?>
              <ul class="reset-list fl-tabs">
				<?php
	              $i = 1; 
	              foreach( $terms as $term ):
	              	if( $i == 1 ){
	              		$first_term = $term->slug;
	              	}
	              	if( $term->slug !='uncategorized' ):
	            ?>
                <li><a class="tab-link<?php echo ($first_term == $term->slug)? ' current': ''; ?>" href="#" onclick='historyCategory("<?php echo $term->slug; ?>", this); return false'><?php echo $term->name; ?></a></li>
                <?php endif; ?>
                <?php $i++; endforeach; ?>
              </ul>
              <span id="hfirstTerm" data-term="<?php echo $first_term; ?>" style="display: none;"></span>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="middleElement"></div>
  <div id="history-tab" class="history-timeline-sec loading-now"> 
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="history-timeline-innr">
            <div class="history-timeline-main-wrp">
              <div class="history-timeline-main historyInit">
                <div class="firstLine"></div>
                <div class="activeLine"></div>
                <div id="history-content">
                </div>
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