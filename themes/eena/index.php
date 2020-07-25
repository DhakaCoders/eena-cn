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
				$terms = get_terms( array(
				  'taxonomy' => 'category',
				  'hide_empty' => false,
				  'parent' => 0
				) );
			if( $terms ):
            ?>
            <ul class="reset-list">
              <?php 
              foreach( $terms as $term ):
              	if( $term->slug !='uncategorized' ):
              ?>
              <li><a href="#" onclick='postCategory("<?php echo $term->slug; ?>"); return false'><?php echo $term->name; ?></a></li>
          		<?php endif; ?>
              <?php endforeach; ?>
            </ul>
        	<?php endif; ?>
          </div>
          <div class="eena-nieuws-grid-items">
            <ul class="reset-list clearfix" id="post-content">
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="eena-pagination-wrp">
        <div class="fl-pagi-ctlr">
          <ul class="page-numbers reset-list">
            <li><span class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="#">2</a></li>
            <li><a class="page-numbers" href="#">3</a></li>
            <li><a class="page-numbers" href="#">4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>