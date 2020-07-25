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
  $num = 4;
  if(isset($_POST['cat']) && !empty($_POST['cat'])){
      $cat = $_POST['cat'];
  }
  $query = new WP_Query(array( 
      'post_type'=> 'post',
      'post_status' => 'publish',
      'posts_per_page' =>$num,
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
  $art_thumb = '';
  while($query->have_posts()): $query->the_post();
    $thumb_id = get_post_thumbnail_id(get_the_ID());
    if(!empty($thumb_id)){
      $thumb = cbv_get_image_src($thumb_id, 'artgrid');
    } else {
      $thumb = THEME_URI.'/assets/images/eena-grd-item-fea-img-1.jpg';
    }
  ?>
  <li>
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
  endwhile;
  }else{
    echo '<style>.post-load-more-btn{display:none;}</style>';
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
