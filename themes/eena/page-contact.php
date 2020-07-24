<?php 
  /*
    Template Name: Contact
  */
  get_header(); 

  $thisID = get_the_ID();
  $spacialArry = array(".", "/", "+", " ", "(", ")");$replaceArray = '';
  $address = get_field('address', 'options');
  $gmapsurl = get_field('google_maps', 'options');
  $emailadres = get_field('emailaddress', 'options');
  $show_telefoon = get_field('telephone', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';

  $intro = get_field('introsec', $thisID); 
  $cont = get_field('contacteer_ons', $thisID); 
?>
<section class="contact-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form-cntlr clearfix">
          <div class="contact-form-lft">
            <div class="contact-form-dsc">
              <h2 class="contact-form-dsc-title">E-mail ons</h2>
              <p>Et tellus quis mi id non facilisi ac nibh. In lectus etiam augue tristique turpis at. Eget sapien duis molestie in. Consectetur tincidunt arcu ac ornare a turpis fermentum.</p>
            </div>
            <div class="contact-form-wrp clearfix">
              <div class="wpforms-container">
                <form class="wpforms-form">
                  
                  <div class="wpforms-field-container">
                    
                    <div class="wpforms-field">
                      <label class="wpforms-field-label">Voornaam</label>
                      <input type="text" name="name" placeholder="Voornaam" required>
                    </div>
                    <div class="wpforms-field">
                      <label class="wpforms-field-label">achternaam</label>
                      <input type="text" name="name" placeholder="Achternaam" required>
                    </div>

                    <div class="wpforms-field">
                      <label class="wpforms-field-label">Telefoon</label>
                      <input type="text" name="text" placeholder="Telefoon" required>
                    </div>

                    <div class="wpforms-field wpforms-has-error">
                      <label class="wpforms-field-label">e-mailadres</label>
                      <input type="email" name="email" placeholder="E-mailadres" required>
                    </div>

                    <div class="wpforms-field wpforms-field-select">
                      <label class="wpforms-field-label" for="select1">ONDERWERP</label>
                      <select id="select1" name="select1">
                        <option value="First Choice">Ticketing</option>
                        <option value="Second Choice">Ticketing</option>
                        <option value="Third Choice">Ticketing</option>
                      </select>
                    </div>

                    <div class="wpforms-field wpforms-field-textarea">
                      <label class="wpforms-field-label">Bericht</label>
                      <textarea name="message" placeholder="Bericht"></textarea>
                    </div>
                  </div><!-- end of .wpforms-field-container-->

                  <div class="wpforms-submit-container">
                    <button type="submit" name="submit" class="wpforms-submit">verzenden</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
          <div class="contact-form-rgt clearfix">
            <div id="googlemap" data-latitude="38.03898" data-longitude="23.804699"></div>
            <div class="contact-map-info">
              <div class="contact-map-info-dsc">
                <ul class="reset-list">
                  <li>
                    <h6 class="contact-map-title">Stadion</h6>
                    <a href="#">Bredestraat, 9300 Aalst</a>
                  </li>
                  <li>
                    <h6 class="contact-map-title">JEUGDCENTRUM</h6>
                    <a href="#">Zandberg 4, 9300 Aalst</a>
                  </li>
                  <li>
                    <h6 class="contact-map-title">COntact Info</h6>
                    <span>Tel: <a href="tel:+32 (0)474 432 100"> +32 (0)474 432 100</a></span>
                    <span>Mail: <a href="mailto:secretariaat@eendracht-aalst.be">secretariaat@eendracht-aalst.be</a></span>
                  </li>
                </ul>               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>


<section class="contact-info-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-info-wrp clearfix">
          <div class="contact-info-lft">
            <div class="contact-info-lft-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/contact-info-lft-img.png);"></div>
          </div>
          <div class="contact-info-rgt">
            <div class="contact-info-dsc">
              <h3 class="contact-info-dsc-title">Contact</h3>
              <p>S.C. Eendracht Aalst is een grote organisatie met tal van medewerkers, vrijwilligers, trainers en spelers. Hieronder kan u de belangrijkste contactpersonen vinden. Voor uw algemene vragen kan u het contactformulier rechts invulen.</p>
            </div>
            <div class="contact-info-adrs-wrp clearfix">
              <ul class="reset-list clearfix">
                <li>
                  <div class="contact-info-adrs">
                    <h5 class="contact-info-adrs-title">SECRETARIAAT / ADMINISTRATIE</h5>
                    <a href="mailto:secretariaat@eendracht-aalst.be">
                    <i>  
                      <svg class="contact-info-email-svg" width="18" height="18" viewBox="0 0 18 18" fill="#6A6A6A">
                        <use xlink:href="#contact-info-email-svg"></use>
                      </svg>
                    </i>
                    secretariaat@eendracht-aalst.be
                   </a>
                  </div>
                </li>
                <li>
                  <div class="contact-info-adrs">
                    <h5 class="contact-info-adrs-title">GERECHTIGDE CORRESPONDENT</h5>
                    <span>Gregor DE VRIENDT</span>
                    <a href="mailto:gregordevriendt@eendracht-aalst.be">
                    <i>  
                      <svg class="contact-info-email-svg" width="18" height="18" viewBox="0 0 18 18" fill="#6A6A6A">
                        <use xlink:href="#contact-info-email-svg"></use>
                      </svg>
                    </i>
                    gregordevriendt@eendracht-aalst.be</a>
                  </div>
                </li>
                <li>
                  <div class="contact-info-adrs">
                    <h5 class="contact-info-adrs-title">COMMUNICATIE / PERS</h5>
                    <span>Kenneth DEMARET</span>
                    <a href="mailto:kennethdemaret@eendracht-aalst.be">
                    <i>  
                      <svg class="contact-info-email-svg" width="18" height="18" viewBox="0 0 18 18" fill="#6A6A6A">
                        <use xlink:href="#contact-info-email-svg"></use>
                      </svg>
                    </i>
                    kennethdemaret@eendracht-aalst.be</a>
                  </div>
                </li>
                <li>
                  <div class="contact-info-adrs">
                    <h5 class="contact-info-adrs-title">TICKETING</h5>
                    <span>Tamara MICHIELS</span>
                    <a href="mailto:ticketing@eendracht-aalst.be">
                    <i>  
                      <svg class="contact-info-email-svg" width="18" height="18" viewBox="0 0 18 18" fill="#6A6A6A">
                        <use xlink:href="#contact-info-email-svg"></use>
                      </svg>
                    </i>
                    ticketing@eendracht-aalst.be</a>
                  </div>
                </li>
                <li>
                  <div class="contact-info-adrs">
                    <h5 class="contact-info-adrs-title">VEILIGHEID</h5>
                    <span>Filip DE SUTTER</span>
                    <a href="mailto:filipdesutter@eendracht-aalst.be">
                    <i>  
                      <svg class="contact-info-email-svg" width="18" height="18" viewBox="0 0 18 18" fill="#6A6A6A">
                        <use xlink:href="#contact-info-email-svg"></use>
                      </svg>
                    </i>
                    filipdesutter@eendracht-aalst.be</a>
                  </div>
                </li>
                <li>
                  <div class="contact-info-adrs">
                    <h5 class="contact-info-adrs-title">FACTURATIE</h5>
                    <span>Tamara MICHIELS</span>
                    <a href="mailto:facturatie@eendracht-aalst.be">
                    <i>  
                      <svg class="contact-info-email-svg" width="18" height="18" viewBox="0 0 18 18" fill="#6A6A6A">
                        <use xlink:href="#contact-info-email-svg"></use>
                      </svg>
                    </i>
                    facturatie@eendracht-aalst.be</a>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/footer', 'top'); ?>
<?php get_footer(); ?>