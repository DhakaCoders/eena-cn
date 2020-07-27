<?php get_header(); ?>
<section class="eena-breadcrumbs-sec">
  <div class="eena-brdcrmb-left">
    <strong>Actua</strong>
  </div>
    <div class="eena-breadcrumbs-sec-inr">
      <div class="eena-brdcrmb-sliders bdcmbSlider">
        <div class="eena-brdcrmb-slider-item">
          <a href="#">VRIJDAG 27 MAART <span>- Ladies gaan samenwerken met fc dames ternat...</span></a>
        </div>
        <div class="eena-brdcrmb-slider-item">
          <a href="#">VRIJDAG 27 MAART <span>- Positief advies voor licentie eerste amateurliga!...</span></a>
        </div>
        <div class="eena-brdcrmb-slider-item">
          <a href="#">VRIJDAG 27 MAART</a>
        </div>
        <div class="eena-brdcrmb-slider-item">
          <a href="#">VRIJDAG 27 MAART <span>- Ladies gaan samenwerken met fc dames ternat...</span></a>
        </div>
      </div>
    </div>
</section>

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
              ?>
              <li><a href="#" onclick='postCategory("<?php echo $term->slug; ?>"); return false'><?php echo $term->name; ?></a></li>
          		<?php endif; ?>
              <?php $i++; endforeach; ?>
            </ul>
            <span id="firstTerm" data-term="<?php echo $first_term; ?>" style="display: none;"></span>
        	<?php endif; ?>
          	</div>
          	<div id="post-content">
          	</div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>