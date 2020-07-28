<?php 
	/*
	Template Name: Player
	*/
	get_header(); 
	$thisID = get_the_ID();
?>
<section class="player-category-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="player-category-sec-inr clearfix">
          <div class="player-targer">
            <h4 class="pt-title">DOELMANNEN</h4>
            <ul class="reset-list">
              <li><a href="#">VAN GERVEN</a></li>
              <li><a href="#">DEVRIENDT</a></li>
              <li><a href="#">VANDENBOSSCHE</a></li>
            </ul>
          </div>
          <div class="player-defender">
            <h4 class="pd-title">VERDEDIGERS</h4>
            <div class="pd-list-ctlr clearfix">
              <ul class="reset-list">
                <li><a href="#">GEENENS</a></li> 
                <li><a href="#">MERTENS</a></li>
                <li class="active"><a href="#">VERSTRAETEN</a></li>
                <li><a href="#">WANTENS</a></li> 
                <li><a href="#">RAZZI</a></li> 
                <li><a href="#">DE VRIENDT</a></li>
                <li><a href="#">RYCKAERT</a></li>
                <li><a href="#">MARTENS</a></li>
                <li><a href="#">BURSSENS</a></li> 
              </ul>
            </div>
          </div>
          <div class="player-mid">
            <h4 class="pmid-title">MIDDENVELDERS</h4>
            <div class="pmid-list-ctlr">
              <ul class="reset-list clearfix">
                <li><a href="#">VAN DEN BERGHE</a></li>
                <li><a href="#">CAPELLEMAN</a></li>
                <li><a href="#">DE NEVE</a></li>
                <li><a href="#">LADRIÈRE</a></li>
                <li><a href="#">FABRIS</a></li>
                <li><a href="#">COBOS COPADO</a></li>
                <li><a href="#">DE CONINCK</a></li>
                <li><a href="#">BELESI</a></li>
                <li><a href="#">VAN DEN EYNDE</a></li> 
              </ul>
            </div>
          </div>
          <div class="player-attact">
            <h4 class="pa-title">AANVALLERS</h4>
            <div class="pa-list-ctlr">
              <ul class="reset-list clearfix">
                <li><a href="#">CAMARA</a></li>
                <li><a href="#">LORRÉ</a></li>
                <li><a href="#">BARAS</a></li>
                <li><a href="#">ANTOINE-CURIER</a></li>
                <li><a href="#">BLANKAERT</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="xs-link">
          <strong class="xs-tabs-btn">VERDEDIGERS</strong>
          <ul class="reset-list clearfix">
            <li><a href="#">GEENENS</a></li> 
            <li><a href="#">MERTENS</a></li>
            <li class="active"><a href="#">VERSTRAETEN</a></li>
            <li><a href="#">WANTENS</a></li> 
            <li><a href="#">RAZZI</a></li> 
            <li><a href="#">DE VRIENDT</a></li>
            <li><a href="#">RYCKAERT</a></li>
            <li><a href="#">MARTENS</a></li>
            <li><a href="#">BURSSENS</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="player-details-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="player-details-sec-inr">
          <h2 class="player-details-title">JORDY VERSTRAETEN <strong>#16</strong></h2>
          <div class="player-details clearfix">
            <div class="player-fac">
              <div data-fancybox="gallery" href="<?php echo THEME_URI; ?>/assets/images/player-fac-img-01.jpg" class="player-fac-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/player-fac-img-01.jpg');">
                <!-- <img src="<?php echo THEME_URI; ?>/assets/images/player-fac-img-01.jpg"> -->
              </div>
              <div class="player-btm-img clearfix">
                <div data-fancybox="gallery" href="<?php echo THEME_URI; ?>/assets/images/plyr-btm-img-01.jpg" class="plyr-btm-img-01">
                  <img src="<?php echo THEME_URI; ?>/assets/images/plyr-btm-img-01.jpg">
                </div>
                <div data-fancybox="gallery" href="<?php echo THEME_URI; ?>/assets/images/plyr-btm-img-02.jpg" class="plyr-btm-img-02">
                  <img src="<?php echo THEME_URI; ?>/assets/images/plyr-btm-img-02.jpg">
                </div>
                <div data-fancybox="gallery" href="<?php echo THEME_URI; ?>/assets/images/plyr-btm-img-03.jpg" class="plyr-btm-img-03">
                  <img src="<?php echo THEME_URI; ?>/assets/images/plyr-btm-img-03.jpg">
                </div>
              </div>
            </div>
            <div class="player-des">
              <div class="list-grd">
                <ul class="reset-list">
                  <li class="clearfix">
                    <strong>VOORNAAM</strong>
                    <span>JORDY</span>
                  </li>
                  <li class="clearfix">
                    <strong>ACHTERNAAM</strong>
                    <span>VERSTRAETEN</span>
                  </li>
                  <li class="clearfix">
                    <strong>RUGNUMMER</strong>
                    <span>16</span>
                  </li>
                  <li class="clearfix">
                    <strong>POSITIE</strong>
                    <span>VERDEDIGER</span>
                  </li>
                  <li class="clearfix">
                    <strong>NATIONALITEIT</strong>
                    <span class="ntnl">BELG</span>
                  </li>
                  <li class="clearfix">
                    <strong>BIJ EA SINDS</strong>
                    <span>2017</span>
                  </li>
                  <li class="clearfix">
                    <strong>CONTRACT TOT</strong>
                    <span>2020</span>
                  </li>
                  <li class="clearfix">
                    <strong>GEBOORTEDATUM</strong>
                    <span> 09/01/1996</span>
                  </li>
                  <li class="clearfix">
                    <strong>VORIGE  CLUBS</strong>
                    <span> BEERVELDE, RC GENT-ZEEHAVEN, SPORTING LOKEREN, <br> CLUB BRUGGE, RSC ANDERLECHT, ZULTE WAREGEM, <br> ANTWERP</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="social-media">
          <strong>DELEN:</strong>
          <ul class="reset-list">
            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section><?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>