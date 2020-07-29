<?php 
	/*
	Template Name: Klassment
	*/
	get_header(); 
	$thisID = get_the_ID();
  $intro = get_field('introsec', $thisID); 
  $shops = get_field('shopinfo', $thisID); 
?>
<section class="classroom-sec-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="classroom-inr">
          <div class="classroom-desc">
            <div class="classroom-desc-cntlr">
              <?php if( !empty( $intro['titel'] ) ) printf( '<h3 class="classroom-desc-title">%s</h3>', $intro['titel']); ?>
              <div class="classroom-table-wrap">
                <div class="table-inr">
                  <table>
                    <thead class="classroom-thead">
                      <tr>
                        <th><span class="">#</span></th>
                        <th><span class=""></span></th>
                        <th><span class="">GS</span></th>
                        <th><span class="">w</span></th>
                        <th><span class="">v</span></th>
                        <th><span class="">g</span></th>
                        <th><span class="">ds</span></th>
                        <th><span class="">p</span></th>
                      </tr>
                    </thead>
                    <tbody class="classroom-tbody">
                      <tr>
                        <td><span class="">1</span></td>
                        <td> <span class="">KVK Tienen</span></td>
                        <td><span class="">23</span></td>
                        <td><span class="">14</span></td>
                        <td><span class="">7</span></td>
                        <td><span class="">2</span></td>
                        <td><span class="">40/28</span></td>
                        <td><span class="">44</span></td>
                      </tr>
                      <tr>
                        <td><span class="">2</span></td>
                        <td> <span class="">Bocholt</span></td>
                        <td><span class="">23</span></td>
                        <td><span class="">12</span></td>
                        <td><span class="">5</span></td>
                        <td><span class="">6</span></td>
                        <td><span class="">38/24</span></td>
                        <td><span class="">42</span></td>
                      </tr>
                      <tr>
                        <td><span class="">3</span></td>
                        <td> <span class="">E.AAlst</span></td>
                        <td><span class="">22</span></td>
                        <td><span class="">12</span></td>
                        <td><span class="">6</span></td>
                        <td><span class="">4</span></td>
                        <td><span class="">38/23</span></td>
                        <td><span class="">40</span></td>
                      </tr>
                      <tr>
                        <td><span class="">4</span></td>
                        <td> <span class="">Cappellen</span></td>
                        <td><span class="">22</span></td>
                        <td><span class="">10</span></td>
                        <td><span class="">7</span></td>
                        <td><span class="">5</span></td>
                        <td><span class="">34/26</span></td>
                        <td><span class="">35</span></td>
                      </tr>
                      <tr>
                        <td><span class="">5</span></td>
                        <td> <span class="">Hades</span></td>
                        <td><span class="">22</span></td>
                        <td><span class="">9</span></td>
                        <td><span class="">7</span></td>
                        <td><span class="">6</span></td>
                        <td><span class="">32/29</span></td>
                        <td><span class="">33</span></td>
                      </tr>
                      <tr>
                        <td><span class="">6</span></td>
                        <td> <span class="">sp.hasselt</span></td>
                        <td><span class="">22</span></td>
                        <td><span class="">8</span></td>
                        <td><span class="">5</span></td>
                        <td><span class="">9</span></td>
                        <td><span class="">29/30</span></td>
                        <td><span class="">33</span></td>
                      </tr>
                      <tr>
                        <td><span class="">7</span></td>
                        <td> <span class="">Vosselaar</span></td>
                        <td><span class="">22</span></td>
                        <td><span class="">10</span></td>
                        <td><span class="">10</span></td>
                        <td><span class="">2</span></td>
                        <td><span class="">24/31</span></td>
                        <td><span class="">32</span></td>
                      </tr>
                      <tr>
                        <td><span class="">8</span></td>
                        <td> <span class="">Diegem</span></td>
                        <td><span class="">22</span></td>
                        <td><span class="">9</span></td>
                        <td><span class="">9</span></td>
                        <td><span class="">4</span></td>
                        <td><span class="">26/26</span></td>
                        <td><span class="">31</span></td>
                      </tr>
                      <tr>
                        <td><span class="">9</span></td>
                        <td> <span class="">Berchem</span></td>
                        <td><span class="">23</span></td>
                        <td><span class="">12</span></td>
                        <td><span class="">5</span></td>
                        <td><span class="">6</span></td>
                        <td><span class="">38/24</span></td>
                        <td><span class="">42</span></td>
                      </tr>
                      <tr>
                        <td><span class="">10</span></td>
                        <td> <span class="">Londerzeel</span></td>
                        <td><span class="">22</span></td>
                        <td><span class="">12</span></td>
                        <td><span class="">6</span></td>
                        <td><span class="">4</span></td>
                        <td><span class="">38/23</span></td>
                        <td><span class="">40</span></td>
                      </tr>
                      <tr>
                        <td><span class="">11</span></td>
                        <td> <span class="">O.Wijgmaal</span></td>
                        <td><span class="">22</span></td>
                        <td><span class="">10</span></td>
                        <td><span class="">7</span></td>
                        <td><span class="">5</span></td>
                        <td><span class="">34/26</span></td>
                        <td><span class="">35</span></td>
                      </tr>
                      <tr>
                        <td><span class="">12</span></td>
                        <td> <span class="">ASV Geel</span></td>
                        <td><span class="">22</span></td>
                        <td><span class="">9</span></td>
                        <td><span class="">7</span></td>
                        <td><span class="">6</span></td>
                        <td><span class="">32/29</span></td>
                        <td><span class="">33</span></td>
                      </tr>
                      <tr>
                        <td><span class="">13</span></td>
                        <td> <span class="">Pepingen-Halle</span></td>
                        <td><span class="">22</span></td>
                        <td><span class="">8</span></td>
                        <td><span class="">5</span></td>
                        <td><span class="">9</span></td>
                        <td><span class="">29/30</span></td>
                        <td><span class="">33</span></td>
                      </tr>
                      <tr>
                        <td><span class="">14</span></td>
                        <td> <span class="">Hoogstraten</span></td>
                        <td><span class="">22</span></td>
                        <td><span class="">10</span></td>
                        <td><span class="">10</span></td>
                        <td><span class="">2</span></td>
                        <td><span class="">34/31</span></td>
                        <td><span class="">32</span></td>
                      </tr>
                      <tr>
                        <td><span class="">16</span></td>
                        <td> <span class="">Spouwen-mop.</span></td>
                        <td><span class="">22</span></td>
                        <td><span class="">9</span></td>
                        <td><span class="">9</span></td>
                        <td><span class="">4</span></td>
                        <td><span class="">26/26</span></td>
                        <td><span class="">31</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="classroom-btn">
                  <a href="#">KLASSEMENT
                    <i>  
                      <svg class="sp-fanshop-gallery-arrows-svg" width="27" height="14" viewBox="0 0 27 14" fill="#F6C042">
                        <use xlink:href="#sp-fanshop-gallery-arrows-svg"></use>
                      </svg>
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="classroom-aside-cntlr">
            <div class="classroom-aside-inr">
              <div class="versus-match-cntlr">
                <div class="versus-match-title">
                  <div class="fl-tabs match-tabs">
                    <ul class="reset-list clearfix">
                      <li><a class="tab-link current" href="#" data-tab="mt-tab-1">volgende wedstrijd</a></li>
                    </ul>
                  </div>
                </div>
                <div id="mt-tab-1" class="fl-tab-content current">
                  <?php get_template_part('templates/upcomming', 'game'); ?>
                </div>
              </div>
              <div class="classroom-aside-bottom">
                <?php if( $shops ): ?>
                <ul class="reset-list">
                  <?php foreach( $shops as $shop ): ?>
                  <li>
                    <div class="sp-fanshop-gallery-inr">
                      <div class="sp-fanshop-gallery-img" style="background: url(<?php if( !empty($shop['afbeelding']) ) echo cbv_get_image_src($shop['afbeelding']); ?>);">
                        <div class="sp-fanshop-gallery-dsc">
                        <?php 
                          $iconobj = $shop['icon'];
                          if( is_array($iconobj) ){
                            echo'<img src="'.$iconobj['url'].'" alt="'.$iconobj['alt'].'" title="'.$iconobj['title'].'">';
                          }
                          if( !empty($shop['knop']) )
                            $knopurl = $shop['knop'];
                          else
                            $knopurl = '#';

                        ?>
                          <?php 
                            if( !empty( $shop['titel'] ) ) printf( '<h3 class="sp-fanshop-gallery-title"><a href="%s">%s</a></h3>', $knopurl, $shop['titel']); 
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
                  </li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; ?>
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