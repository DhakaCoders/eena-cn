<?php 
get_header(); 
$shopID = get_option( 'woocommerce_shop_page_id' );
$intro = get_field('introsec', $shopID);
?>
<section class="fanshop-catagory-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fanshop-catagory-wrp">
          <div class="fanshop-catagory-head">
            <?php 
              if( !empty( $intro['titel'] ) ) printf( '<h2 class="fanshop-catagory-title">%s</h2>', $intro['titel']); 
              if( !empty( $intro['beschrijving'] ) ) echo wpautop($intro['beschrijving']); 
            ?>
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
    <?php 
      $showhide_usps = get_field('showhide_usps', $shopID);
      if( $showhide_usps ):
        $usps = get_field('usps', $shopID);
        if($usps):
    ?>
    <div class="row">
      <div class="col-md-12">
        <div class="fanshop-service-wrp clearfix">
          <ul class="reset-list clearfix">
            <?php 
            foreach( $usps as $usp ): 
            ?>
            <li>
              <div class="fanshop-service-inr mHc">
                <div class="fanshop-service-dsc">
                  <?php if( !empty($usp['knop']) ): ?>
                  <a href="<?php echo $usp['knop']; ?>" class="overlay-link"></a>
                  <?php endif; ?>
                  <div class="fanshop-service-icon mHc1">
                  <?php 
                    $iconobj = $usp['icon'];
                    if( is_array($iconobj) ){
                      echo'<img src="'.$iconobj['url'].'" alt="'.$iconobj['alt'].'" title="'.$iconobj['title'].'">';
                    }
                  ?>
                  </div>
                  <?php 
                    if( !empty( $usp['titel'] ) ) printf( '<h3 class="fanshop-service-title mHc2">%s</h3>', $usp['titel']); 
                    if( !empty( $usp['beschrijving'] ) ) echo wpautop($usp['beschrijving']);
                  ?>
                </div>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
  </div>
</section>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>