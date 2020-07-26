<?php
/*
 * initial posts dispaly
 */

function ajax_post_script_call(){
    wp_register_script('ajax-posts-script', get_stylesheet_directory_uri(). '/assets/js/ajax-scripts.js', array('jquery') );
    wp_enqueue_script('ajax-posts-script');

    wp_localize_script( 'ajax-posts-script', 'ajax_posts_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ));
    // Enable the user with no privileges to run ajax_login() in AJAX
}

add_action('wp_enqueue_scripts', 'ajax_post_script_call');


/*
 * load more script call back
 */
function ajax_post_script_load_more() {
  //init ajax
  $ajax = false;
  //check ajax call or not
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
      strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      $ajax = true;
  }
  //number of posts per page default
  $num = 2;
  if(isset($_POST['cat']) && !empty($_POST['cat'])){
      $cat = $_POST['cat'];
  }
  $query = new WP_Query(array( 
      'post_type'=> 'post',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'orderby' => 'date',
      'tax_query' => array(
          array(
              'taxonomy' => 'category',
              'field'    => 'slug',
              'terms'    => $cat
          ),
      ),
    ) 
  );
  
  if($query->have_posts()){
  echo '<div class="eena-nieuws-grid-items">';
  echo '<ul class="reset-list clearfix" id="post-items">';
  $thumb = $hide_class = '';
  $totalPost = $query->found_posts;
  $totalPages = ceil($totalPost/$num);
  $j = 1;
  while($query->have_posts()): $query->the_post();
    $thumb_id = get_post_thumbnail_id(get_the_ID());
    if(!empty($thumb_id)){
      $thumb = cbv_get_image_src($thumb_id, 'artgrid');
    } else {
      $thumb = THEME_URI.'/assets/images/eena-grd-item-fea-img-1.jpg';
    }
    if( $j > $num ){
      $hide_class = ' hidelist';
    }
  ?>
  <li class="<?php echo $hide_class; ?>">
  <div class="eena-grd-item">
    <div class="eena-grd-item-fea-img-ctlr">
      <a href="#" class="overlay-link"></a>
      <div class="eena-grd-item-fea-img" style="background: url('<?php echo $thumb; ?>');"></div>
    </div>
    <div class="eena-grd-item-des mHc">
      <strong>VRIJDAG 27 MAART - 14U05</strong>
      <h3 class="eena-gid-title mHc1"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
      <p class="mHc2"><?php echo get_the_excerpt(); ?></p>
      <a href="<?php the_permalink();?>">LEES MEEr</a>
    </div>
  </div>
  </li>
  <?php
  $j++;
  endwhile;
  echo '</ul>';
  echo '</div>';
  if( $totalPages > 1):
  echo '<div class="eena-pagination-wrp"><div class="fl-pagi-ctlr">';
   echo '<ul class="page-numbers reset-list">';
        for( $i = 1; $i <= $totalPages; $i++ ){
          echo '<li><span class="page-numbers current">'.$i.'</span></li>';
        }
  echo '</ul></div></div>';
  endif;
  }else{
    echo '<div class="no-results">Geen resultaten</div>';
  }  
  wp_reset_postdata();
  
  //check ajax call
  if($ajax) wp_die();
}

/*
 * load more script ajax hooks
 */
add_action('wp_ajax_nopriv_ajax_post_script_load_more', 'ajax_post_script_load_more');
add_action('wp_ajax_ajax_post_script_load_more', 'ajax_post_script_load_more');
