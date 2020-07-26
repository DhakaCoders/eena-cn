<?php get_header(); ?>
<section class="fanshop-catagory-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fanshop-catagory-wrp">
          <div class="fanshop-catagory-head">
            <h2 class="fanshop-catagory-title">Onze producten</h2>
            <p>Et tellus quis mi id non facilisi ac nibh. In lectus etiam augue tristique turpis at. Eget sapien duis molestie in. Consectetur tincidunt arcu ac ornare a turpis fermentum.</p>
          </div>
          <div class="fanshop-catagory-menu clearfix">
            <?php 
              $first_term = '';
              $terms = get_terms( array(
                'taxonomy' => 'product_cat',
                'hide_empty' => false,
                'parent' => 0
              ) );
              if( $terms ):
            ?> 
            <ul class="reset-list clearfix">
              <?php
                $i = 1; 
                foreach( $terms as $term ):
                  
                  if( $term->slug !='uncategorized' ):

                  if( $i == 1 ){
                    $first_term = $term->slug;
                  }
              ?>
              <li><a href="#" onclick='productCategory("<?php echo $term->slug; ?>"); return false'><?php echo $term->name; ?></a></li>
              <?php $i++; endif; ?>
              <?php endforeach; ?>
            </ul>
            <span id="pfirstTerm" data-term="<?php echo $first_term; ?>" style="display: none;"></span>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fanshop-post-grid-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="product-shop" id="product-content">
          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="fanshop-service-wrp clearfix">
          <ul class="reset-list clearfix">
            <li>
              <div class="fanshop-service-inr mHc">
                <div class="fanshop-service-dsc">
                  <a href="#" class="overlay-link"></a>
                  <div class="fanshop-service-icon mHc1">
                    <img src="<?php echo THEME_URI; ?>/assets/images/fanshop-service-icon-1.svg">
                  </div>
                  <h3 class="fanshop-service-title mHc2">Verzenden</h3>
                  <p>Leo sociis laoreet nullam malesuada pharetra enim mus suspendisse. Lectus mauris ut tortor.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="fanshop-service-inr mHc">
                <div class="fanshop-service-dsc">
                  <a href="#" class="overlay-link"></a>
                  <div class="fanshop-service-icon mHc1">
                    <img src="<?php echo THEME_URI; ?>/assets/images/fanshop-service-icon-2.svg">
                  </div>
                  <h3 class="fanshop-service-title mHc2">Kwaliteit</h3>
                  <p>Leo sociis laoreet nullam malesuada pharetra enim mus suspendisse. Lectus mauris ut tortor.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="fanshop-service-inr mHc">
                <div class="fanshop-service-dsc">
                  <a href="#" class="overlay-link"></a>
                  <div class="fanshop-service-icon mHc1">
                    <img src="<?php echo THEME_URI; ?>/assets/images/fanshop-service-icon-3.svg">
                  </div>
                  <h3 class="fanshop-service-title mHc2">Service</h3>
                  <p>Leo sociis laoreet nullam malesuada pharetra enim mus suspendisse. Lectus mauris ut tortor.</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>