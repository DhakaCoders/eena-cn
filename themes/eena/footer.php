<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $copyright_text = get_field('copyright_text', 'options');
?>
<footer class="footer-wrp">
  <div class="ftr-top">
    <span class="ftr-angle-w show-md"></span>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="ftr-col-main clearfix">
            <span class="ftr-angle-w hide-md"></span>
            <div class="ftr-col ftr-col-1">
              <div class="ftr-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
            </div>
            <div class="ftr-col ftr-col-2"> 
              <h6 class="ftr-title active"><span><?php _e('Navigation', THEME_NAME); ?></span></h6>

              <?php 
                $fmenuOptions = array( 
                    'theme_location' => 'cbv_fta_menu', 
                    'menu_class' => 'ulc',
                    'container' => '',
                    'container_class' => '',
                    'depth' => 1
                  );
                wp_nav_menu( $fmenuOptions ); 
              ?>
            </div>
            <div class="ftr-col ftr-col-3">
              <h6 class="ftr-title"><span><?php _e('Navigation', THEME_NAME); ?></span></h6>  
              <?php 
                $fmenuOptionsb = array( 
                    'theme_location' => 'cbv_ftb_menu', 
                    'menu_class' => 'ulc',
                    'container' => '',
                    'container_class' => '',
                    'depth' => 1
                  );
                wp_nav_menu( $fmenuOptionsb ); 
              ?>           
            </div>
            <div class="ftr-col ftr-col-4">
              <h6 class="ftr-title"><span><?php _e('Navigation', THEME_NAME); ?></span></h6> 
              <?php 
                $fmenuOptionsc = array( 
                    'theme_location' => 'cbv_ftc_menu', 
                    'menu_class' => 'ulc',
                    'container' => '',
                    'container_class' => '',
                    'depth' => 1
                  );
                wp_nav_menu( $fmenuOptionsc ); 
              ?>           
            </div>
            <div class="ftr-col ftr-col-5">
              <h6 class="ftr-title"><span><?php _e('Policy', THEME_NAME); ?></span></h6>
              <?php 
                $fmenuOptionsd = array( 
                    'theme_location' => 'cbv_ftd_menu', 
                    'menu_class' => 'ulc',
                    'container' => '',
                    'container_class' => '',
                    'depth' => 1
                  );
                wp_nav_menu( $fmenuOptionsd ); 
              ?>           
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ftr-btm">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="ftr-btm-innr clearfix">
            <div class="ftr-btm-col-1">
              <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?>
            </div>
            <div class="ftr-btm-col-2 text-right">
              <a target="_blank" href="https://www.conversal.be/">webdesign by conversal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>