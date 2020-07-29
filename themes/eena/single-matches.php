<?php 
get_header(); 
while ( have_posts() ) :
the_post();
$thisID = get_the_ID();
$permalink = get_the_permalink();
$pagetitle = get_the_title();
$intro = get_field('intro', $thisID);
$teama = get_field('teama', $thisID);
$teamb = get_field('teamb', $thisID);
?>
<section class="eena-match-result-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="eena-match-result-sec-inr clearfix">
          <div class="eenamr-left-team">
            <?php if( $teama ): ?>
              <?php 
                $teamaobj = $teama['logo'];
                if( is_array($teamaobj) ){
                  echo '<img src="'.$teamaobj['url'].'" alt="'.$teamaobj['alt'].'" title="'.$teamaobj['title'].'">';
                }
                if(  !empty($teama['naam'])) printf('<h2 class="eenamr-left-team-title">%s</h2>', $teama['naam']);
              ?>
              
            <?php endif; ?>
          </div>
          <div class="eenamr-result">
            <h2 class="eenamr-result-title">
              <?php 
                echo !empty($teama['score'])? $teama['score']:'0';
                echo ' - ';
                echo !empty($teamb['score'])? $teamb['score']:'0';
              ?>
            </h2>
            <span>
              <?php if( !empty($intro['datuum2']) ) printf('%s', $intro['datuum2']); ?>
              <?php if( !empty($intro['matchtype']) ) printf('<br/> %s', $intro['matchtype']); ?>
            </span>
          </div>
          <div class="eenamr-right-team">
             <?php if( $teamb ): ?>
              <?php 
                $teambobj = $teamb['logo'];
                if( is_array($teambobj) ){
                  echo '<img src="'.$teambobj['url'].'" alt="'.$teambobj['alt'].'" title="'.$teambobj['title'].'">';
                }
                if(  !empty($teamb['naam'])) printf('<h2 class="eenamr-right-team-title">%s</h2>', $teamb['naam']);
              ?>
              
            <?php endif; ?>
          </div>
        </div>
        <div class="xs-match-result">
          <h2 class="top-team-title">olympia wijgmaal</h2>
          <strong>2-2</strong>
          <h2 class="btm-team-title">EENDRACHT AALST</h2>
          <span>onderdag 12 september 2019 - 20u00 <br> Tweede amateurliga</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="eena-mr-competition-report-sec">
  <span class="eena-mr-cr-white-bg"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="eena-mr-competition-report-sec-inr">
          <div class="eena-mr-cr-link">
            <ul class="reset-list">
              <li class="current"><a href="#">VERSLAG</a></li>
              <li><a href="#">VOORAF</a></li>
              <li><a href="#">Fases</a></li>
              <li><a href="#">Video</a></li>
              <li><a href="#">FOTOSPECIAL</a></li>
            </ul>
          </div>
          <div class="xs-link show-sm">
            <strong class="xs-tabs-btn">VERSLAG</strong>
            <ul class="reset-list">
              <li><a href="#">VERSLAG</a></li>
              <li><a href="#">VOORAF</a></li>
              <li><a href="#">Fases</a></li>
              <li><a href="#">Video</a></li>
              <li><a href="#">FOTOSPECIAL</a></li>
            </ul>
          </div>
          <div class="eena-md-competition-report clearfix">
            <div class="eena-md-cr-des">
              <h2 class="eena-md-cr-des-title">WEDSTRIJDVERSLAG</h2>
              <p>Midden in de week trok Eendracht naar het veld van OHL om er de inhaalwedstrijd tegen Olympia Wijgmaal af te haspelen.  Na de goede prestatie van vorig weekend wijzigde trainer Van Renterghem uiteraard niets aan zijn elftal.</p>
              <p>Het duel begon dramatisch voor wit-zwart.  Na amper drie minuten verscheen Dehond centraal alleen voor doel en hij plaatste de 1-0 buiten het bereik van Van Gerven.  Het schudde Eendracht niet wakker want een handvol minuten na de openingsgoal was het Mathei die voorbij onze defensie geloodsd werd.  Hij miste niet en de 2-0 was een feit.  Tussendoor was er wel een reactie van Wantens maar doelman Vanwelkenhuysen stond op de juiste plaats.</p>
              <p>Stilaan kwamen de ajuinen dan toch beter in de match en dat resulteerde halverwege deze eerste helft in een vrije trap net buiten de zestien.  Het schot van De Neve week af en verdween tegen de netten (2-1).  De aansluitingstreffer zorgde toch wat voor paniek in de Wijgmaalse rangen maar er kon niet van geprofiteerd worden.  Enkele minuten voor de rust mochten Van Gerven en Razzi dan weer van geluk spreken dat de bal na een misverstand naast rolde.</p>
              <p>
                <img src="<?php echo THEME_URI; ?>/assets/images/md-cr-img.jpg">
              </p>
              <p>In de tweede helft was het balbezit voor wit-zwart.  De thuisploeg trok zich terug en loerde op de counter.  Bijna leverde dat succes op maar Dewaet vergat de doodsteek te geven toen hij oog in oog met Van Gerven verscheen.  Ladrière en Van Den Eynde werden in het veld gebracht om voor meer creativiteit te zorgen maar de lokale afweergordel ontregelen bleek makkelijker gezegd dan gedaan.  Het moest dan maar van een stilstaande fase komen en bijna was het ook zover.  De vrije trap van Ladrière ging net naast.</p>
              <p>Met nog tien minuten op de klok zagen we een carambole voor de kooi van Vanwelkenhuysen.  Uiteindelijk werd de poging van Dekuyper net voor de lijn weggeveegd.  Even later kwam de gelijkmaker er toch nog toen Van Den Eynde raak trof met een grondscherend schot (2-2).  Eendracht versierde nadien nog enkele hoekschoppen en bij één daarvan werd de bal door een thuisspeler op de lijn gered.  In de toegevoegde tijd veranderde er niks meer en beide ploegen moesten zich met een punt tevreden stellen.</p>
              <p>Voor Eendracht komt het er nu op aan om zo goed mogelijk te herstellen want binnen drie dagen staat de volgende opdracht al op de kalender.  Op bezoek bij Cappellen trachten we weer met de zege aan te knopen.  Supporters op post!</p>
            </div>
            <div class="eena-md-cr-right-event">
              <div class="md-cr-event">
                <h5 class="md-cr-event-title">WEDSTRIJDGEBEURTENISSEN</h5>
                <ul class="reset-list">
                  <li>
                    <i>
                      <svg class="md-cr-event-goal-svg" width="24" height="24" viewBox="0 0 24 24" fill="#111111">
                        <use xlink:href="#md-cr-event-goal-svg"></use>
                      </svg> 
                    </i>
                    <span>3' Dehond (1-0), 8' Mathei (2-0), 27' De Neve (2-1), 86' Van Den Eynde (2-2)</span>
                  </li>
                  <li>
                    <i>
                      <span class="color"></span>
                    </i>
                    <span>16' Delorge, 23' Dewaet</span></li>
                  <li>
                    <i>
                      <svg class="md-cr-event-profile-svg" width="24" height="24" viewBox="0 0 24 24" fill="#111111">
                        <use xlink:href="#md-cr-event-profile-svg"></use>
                      </svg> 
                    </i>
                    <span>26’ Player Name (IN) - Player Name (OUT)</span>
                  </li>
                </ul>
              </div>
              <?php 
                $sidebar = get_field('sidebarsec', $thisID);
                if( $sidebar ): 
                  $teamlist1 = $sidebar['teamlist1'];
                  $palyers1 = $teamlist1['teamlists1'];

              ?>
              <div class="md-cr-wine">
                <?php if( !empty( $teamlist1['titel'] ) ) printf( '<h5 class="md-cr-wine-title">%s</h5>', $teamlist1['titel']); ?>
                <?php if( $palyers1 ): ?>
                <ul class="reset-list">
                  <?php foreach( $palyers1 as $palyer1 ): ?>
                  <li>
                    <?php 
                    if( !empty( $palyer1['rugnummer'] ) ) printf( '%s. ', $palyer1['rugnummer']); 
                    if( !empty( $palyer1['titel'] ) ) printf( '%s', $palyer1['titel']); 
                    ?>
                  </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              </div>
              <?php 

              $teamlist2 = $sidebar['teamlist2'];
              $palyers2 = $teamlist2['teamlists2'];

              ?>
              <div class="md-cr-aalst">
                <?php if( !empty( $teamlist2['titel'] ) ) printf( '<h5 class="md-cr-aalst-title">%s</h5>', $teamlist2['titel']); ?>
                <?php if( $palyers2 ): ?>
                <ul class="reset-list">
                  <?php foreach( $palyers2 as $palyer2 ): ?>
                  <li>
                    <?php 
                    if( !empty( $palyer2['rugnummer'] ) ) printf( '%s. ', $palyer2['rugnummer']); 
                    if( !empty( $palyer2['titel'] ) ) printf( '%s', $palyer2['titel']); 
                    ?>
                  </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              </div>
              <?php endif; ?>
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
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/home?status=<?php echo $permalink; ?>"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>