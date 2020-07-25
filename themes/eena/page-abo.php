<?php 
	/*
	Template Name: ABO
	*/
	get_header(); 
	$thisID = get_the_ID();
	$intro = get_field('introsec', $thisID); 
	$shop = get_field('shopinfo', $thisID); 
?>
<section class="contact-form-sec-wrp abo-frm-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form-cntlr clearfix">
          <div class="contact-form-rgt fst-box-rgt clearfix">
          	<?php if( $shop ): ?>
            <div class="sp-fanshop-gallery-inr">
              <div class="sp-fanshop-gallery-img" style="background: url(<?php if( !empty($shop['afbeelding']) ) echo cbv_get_image_src($shop['afbeelding']); ?>);">
              	<?php if( !empty($shop['knop']) ): ?>
                <a href="<?php echo $shop['knop']; ?>" class="overlay-link"></a>
            	<?php endif; ?>
                <div class="sp-fanshop-gallery-dsc">
                  <?php 
                  	$iconobj = $shop['icon'];
          					if( is_array($iconobj) ){
          						echo'<img src="'.$iconobj['url'].'" alt="'.$iconobj['alt'].'" title="'.$iconobj['title'].'">';
          					}
                  ?>
                  <?php 
  	                if( !empty( $shop['titel'] ) ) printf( '<h3 class="sp-fanshop-gallery-title">%s</h3>', $shop['titel']); 
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
         	<?php endif; ?>
          </div>
          <div class="contact-form-lft">
            <div class="contact-form-dsc">
              <?php 
                echo '<h2 class="contact-form-dsc-title">'; 
                if( !empty( $intro['titel'] ) ) printf( '%s', $intro['titel']);
                if( !empty( $intro['subtitel'] ) ) printf( '<br>%s', $intro['subtitel']);
                echo '</h2>'; 
                if( !empty( $intro['beschrijving'] ) ) echo wpautop($intro['beschrijving']); 
              ?>
            </div>
            <div class="contact-form-wrp clearfix">
              <div class="wpforms-container">
                <?php if(!empty($intro['form_shortcode'])) echo do_shortcode( $intro['form_shortcode'] ); ?>
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