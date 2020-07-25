<?php
  $showhidep = get_field('showhide_partners', 'options');
  $onzep = get_field('onzepartners', 'options');
  if($showhidep):
    if($onzep):
      $partners = $onzep['partners'];
?>
<section class="ftr-tp-brand-logo-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="brand-logo-head">
          <?php if( !empty( $onzep['titel'] ) ) printf( '<h2 class="brand-logo-head-title">%s</h2>', $onzep['titel']); ?>
        </div>
        <?php if( $partners ): ?>
        <div class="brand-logo-tp-wrp">
          <?php 
            foreach( $partners as $partner ): 
              $logoObj = $partner['selectpartners'];
          ?>
          <ul class="clearfix reset-list">
            <?php 
              if( $logoObj ): 
              foreach( $logoObj as $logo_row ):
                $iconobj = get_field('logo', $logo_row->ID);
            ?>
            <li>
              <?php 
                if( is_array($iconobj) ){
                  echo'<img src="'.$iconobj['url'].'" alt="'.$iconobj['alt'].'" title="'.$iconobj['title'].'">';
                }
              ?>
            </li>
            <?php 
              endforeach;
              endif;
            ?>
          </ul>
          <?php endforeach; ?>
        </div>
        <div class="ena-xs-view-more-btn show-md">
          <a href="<?php echo esc_url( home_url('sponsors') ); ?>"><?php _e('View More', THEME_NAME); ?></a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>