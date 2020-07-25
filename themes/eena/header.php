<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
<?php } ?>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->  

<svg style="display: none;">
  <!-- Milon -->
  <symbol id="contact-info-email-svg" width="18" height="18" viewBox="0 0 18 18"  xmlns="http://www.w3.org/2000/svg">
  <path d="M15.8906 2.39062H2.10938C0.946266 2.39062 0 3.33689 0 4.5V13.5C0 14.6631 0.946266 15.6094 2.10938 15.6094H15.8906C17.0537 15.6094 18 14.6631 18 13.5V4.5C18 3.33689 17.0537 2.39062 15.8906 2.39062ZM16.5938 13.5C16.5938 13.8877 16.2783 14.2031 15.8906 14.2031H2.10938C1.72167 14.2031 1.40625 13.8877 1.40625 13.5V4.5C1.40625 4.1123 1.72167 3.79688 2.10938 3.79688H15.8906C16.2783 3.79688 16.5938 4.1123 16.5938 4.5V13.5Z"/>
  <path d="M16.4755 3.2673L9.00118 8.8268L1.52682 3.2673L0.6875 4.39564L9.00118 10.5794L17.3149 4.39564L16.4755 3.2673Z"/>
  </symbol>

  <symbol id="sp-fanshop-gallery-arrows-svg" width="27" height="14" viewBox="0 0 27 14"  xmlns="http://www.w3.org/2000/svg">
  <path d="M1.05467 5.48437H23.3907L19.6907 1.80225C19.2778 1.39134 19.2762 0.723564 19.6871 0.310707C20.0981 -0.102203 20.7659 -0.103732 21.1787 0.307121L26.6897 5.79149C26.6901 5.79181 26.6903 5.79218 26.6906 5.79249C27.1024 6.2034 27.1038 6.87334 26.6907 7.28561C26.6904 7.28593 26.6901 7.2863 26.6898 7.28662L21.1788 12.771C20.766 13.1818 20.0982 13.1804 19.6873 12.7674C19.2763 12.3545 19.2779 11.6868 19.6908 11.2759L23.3907 7.59374H1.05467C0.472164 7.59374 -1.90735e-05 7.12156 -1.90735e-05 6.53905C-1.90735e-05 5.95655 0.472164 5.48437 1.05467 5.48437Z"/>
  </symbol>
  <symbol id="fl-prev-icon-xs-svg" width="27" height="14" viewBox="0 0 27 14" xmlns="http://www.w3.org/2000/svg">
  <path d="M25.9453 5.48437H3.60927L7.30932 1.80225C7.72218 1.39134 7.72376 0.723564 7.31285 0.310707C6.90195 -0.102203 6.23412 -0.103732 5.82126 0.307121L0.310309 5.79149C0.30994 5.79181 0.309676 5.79218 0.30936 5.79249C-0.102443 6.2034 -0.103761 6.87334 0.309254 7.28561C0.309624 7.28593 0.309887 7.2863 0.310204 7.28662L5.82116 12.771C6.23396 13.1818 6.90179 13.1804 7.31275 12.7674C7.72366 12.3545 7.72207 11.6868 7.30922 11.2759L3.60927 7.59374H25.9453C26.5278 7.59374 27 7.12156 27 6.53905C27 5.95655 26.5278 5.48437 25.9453 5.48437Z"/>
  </symbol>
  <symbol id="fl-next-icon-xs-svg" width="27" height="14" viewBox="0 0 27 14"  xmlns="http://www.w3.org/2000/svg">
  <path d="M1.05467 5.48437H23.3907L19.6907 1.80225C19.2778 1.39134 19.2762 0.723564 19.6871 0.310707C20.0981 -0.102203 20.7659 -0.103732 21.1787 0.307121L26.6897 5.79149C26.6901 5.79181 26.6903 5.79218 26.6906 5.79249C27.1024 6.2034 27.1038 6.87334 26.6907 7.28561C26.6904 7.28593 26.6901 7.2863 26.6898 7.28662L21.1788 12.771C20.766 13.1818 20.0982 13.1804 19.6873 12.7674C19.2763 12.3545 19.2779 11.6868 19.6908 11.2759L23.3907 7.59374H1.05467C0.472164 7.59374 -1.90735e-05 7.12156 -1.90735e-05 6.53905C-1.90735e-05 5.95655 0.472164 5.48437 1.05467 5.48437Z"/>
  </symbol>

  <!-- Shoriful -->




  <!-- Noyon -->

  


  <!-- Rannojit -->
  <symbol id="cart-icon-svg" width="34" height="34" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg">
    <path d="M29.4327 29.3675L27.6201 9.46688C27.5712 8.91862 27.1122 8.5 26.5618 8.5H23.3743V6.375C23.3743 4.6665 22.7113 3.06425 21.5107 1.86362C20.3292 0.68 18.6845 0 16.9993 0C13.4846 0 10.6243 2.86025 10.6243 6.375V8.5H7.43683C6.88646 8.5 6.42746 8.91862 6.37858 9.46688L4.57021 29.3654C4.46183 30.5533 4.86133 31.7369 5.66458 32.6166C6.46783 33.4964 7.61108 34 8.80321 34H25.1976C26.3876 34 27.5308 33.4964 28.3341 32.6188C29.1395 31.739 29.5368 30.5532 29.4327 29.3675ZM21.2493 8.5H12.7493V6.375C12.7493 4.03113 14.6555 2.125 16.9993 2.125C18.1256 2.125 19.2221 2.5755 20.0083 3.36387C20.8095 4.165 21.2493 5.23387 21.2493 6.375V8.5Z"/>
  </symbol>
  <symbol id="fl-prev-icon-svg" width="34" height="16" viewBox="0 0 34 16" xmlns="http://www.w3.org/2000/svg">
    <path d="M31.742 6.70968H4.41564L8.94236 2.2049C9.44746 1.70219 9.44939 0.885222 8.94668 0.380125C8.44397 -0.125037 7.62694 -0.126907 7.12184 0.375738L0.379638 7.08542C0.379186 7.08581 0.378864 7.08626 0.378477 7.08664C-0.125331 7.58935 -0.126943 8.40897 0.378347 8.91336C0.378799 8.91374 0.379122 8.91419 0.379509 8.91458L7.12171 15.6243C7.62674 16.1268 8.44378 16.1251 8.94655 15.6199C9.44926 15.1148 9.44733 14.2978 8.94223 13.7951L4.41564 9.29032H31.742C32.4546 9.29032 33.0323 8.71265 33.0323 8C33.0323 7.28735 32.4546 6.70968 31.742 6.70968Z"/>
  </symbol>
  <symbol id="fl-next-icon-svg" width="34" height="16" viewBox="0 0 34 16" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.258 6.70968H29.5844L25.0576 2.2049C24.5525 1.70219 24.5506 0.885222 25.0533 0.380125C25.556 -0.125037 26.3731 -0.126907 26.8782 0.375738L33.6204 7.08542C33.6208 7.08581 33.6211 7.08626 33.6215 7.08664C34.1253 7.58935 34.1269 8.40897 33.6217 8.91336C33.6212 8.91374 33.6209 8.91419 33.6205 8.91458L26.8783 15.6243C26.3733 16.1268 25.5562 16.1251 25.0534 15.6199C24.5507 15.1148 24.5527 14.2978 25.0578 13.7951L29.5844 9.29032H2.258C1.54536 9.29032 0.967678 8.71265 0.967678 8C0.967678 7.28735 1.54536 6.70968 2.258 6.70968Z"/>
  </symbol>
  <symbol id="prv-nxt-lft-arrow-icon-svg" width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0)">
    <path d="M22.3803 29.5205L23.3699 28.5378C23.6789 28.2285 23.8491 27.8171 23.8491 27.3773C23.8491 26.9378 23.6789 26.5258 23.3699 26.2166L12.1595 15.0067L23.3823 3.78393C23.6913 3.47515 23.8613 3.0632 23.8613 2.62368C23.8613 2.18416 23.6913 1.77197 23.3823 1.46294L22.3989 0.480004C21.7594 -0.160001 20.7176 -0.160001 20.0781 0.480004L6.66802 13.8421C6.35923 14.1508 6.14167 14.5623 6.14167 15.0057L6.14167 15.0109C6.14167 15.4506 6.35948 15.8621 6.66802 16.1709L20.0418 29.5205C20.3506 29.8298 20.7745 29.9995 21.214 30C21.6537 30 22.0718 29.8298 22.3803 29.5205Z"/>
    </g>
    <defs>
    <clipPath id="clip0">
    <rect width="30" height="30" fill="white" transform="translate(30) rotate(90)"/>
    </clipPath>
    </defs>
  </symbol>
  <symbol id="prv-nxt-rgt-arrow-icon-svg" width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0)">
    <path d="M7.61966 29.5205L6.63014 28.5378C6.32111 28.2285 6.15087 27.8171 6.15087 27.3773C6.15087 26.9378 6.32111 26.5258 6.63014 26.2166L17.8405 15.0067L6.6177 3.78393C6.30867 3.47515 6.13867 3.0632 6.13867 2.62368C6.13867 2.18416 6.30867 1.77197 6.6177 1.46294L7.60112 0.480004C8.24064 -0.160001 9.28236 -0.160001 9.92187 0.480004L23.332 13.8421C23.6408 14.1508 23.8583 14.5623 23.8583 15.0057L23.8583 15.0109C23.8583 15.4506 23.6405 15.8621 23.332 16.1709L9.95822 29.5205C9.64943 29.8298 9.22553 29.9995 8.78601 30C8.34625 30 7.9282 29.8298 7.61966 29.5205Z"/>
    </g>
    <defs>
    <clipPath id="clip0">
    <rect width="30" height="30" fill="white" transform="matrix(4.37114e-08 1 1 -4.37114e-08 0 0)"/>
    </clipPath>
    </defs>
  </symbol>



  
</svg>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
  $logoObj = get_field('hdlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
?>
<div class="bdoverlay"></div>
<div class="hdr-cntlr page-hdr-cntlr">
<div class="bnr-lft-angle-bg"></div>
<div class="bnr-lft-angle"></div>
<div class="logo">
  <a href="<?php echo esc_url(home_url('/')); ?>">
    <?php echo $logo_tag; ?>
  </a>
  <div class="logo-txt hide-sm">
    <strong> EENDRACHT-AALST</strong>
    <span>OFFICIELE WEBSITE SC EENDRACHT AALST </span>
  </div>
</div>
<div class="sm-humberger-cntlr show-sm">
  <div class="hdr-cart-btn">
    <a href="#">
      <i>
        <svg class="cart-icon-svg" width="34" height="34" viewBox="0 0 34 34" fill="#F6C042">
          <use xlink:href="#cart-icon-svg"></use>
        </svg> 
      </i>
    </a>
  </div>
  <div class="hdr-humberger">
    <div class="line-icon show-lg">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<header class="header ">
  <div class="hdr-inr">
    <div class="hdr-topbar hide-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="hdr-topbar-inr">
              <?php 
                $menuOptions = array( 
                    'theme_location' => 'cbv_top_menu', 
                    'menu_class' => 'reset-list hdr-topbar-nav',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $menuOptions ); 
              ?> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="hdr-main-nav-cntlr hide-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="hdr-main-nav-cntlr-inr clearfix">
              <div class="main-nav-white-bg">
                <div class="hdr-humberger">
                  <div class="line-icon show-lg">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                  <strong class="menu-txt show-lg"><?php _e('Menu', THEME_NAME); ?></strong>
                </div>
                <nav class="main-nav en-hide-lg">
                  <?php 
                    $menuOptions = array( 
                        'theme_location' => 'cbv_main_menu', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $menuOptions ); 
                  ?>
                </nav>
                <div class="hdr-cart-btn">
                  <a href="#">
                    <i>
                      <svg class="cart-icon-svg" width="34" height="34" viewBox="0 0 34 34" fill="#F6C042">
                        <use xlink:href="#cart-icon-svg"></use>
                      </svg> 
                    </i>
                    <strong>€0,00</strong>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<?php
$thisID = get_the_ID();
$pageTitle = get_the_title($thisID);
$standaardbanner = get_field('pagebanner', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr.jpg';
?>
  <section class="page-banner">
    <div class="page-banner-bg inline-bg" style="background: url('<?php echo $standaardbanner; ?>');"></div>
  </section>
  <div class="fl-page-bnr-des-cntlr">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="fl-page-bnr-des">
            <div class="breadcrumbs hide-639">
              <?php cbv_breadcrumbs(); ?>              
            </div>
            <div class="show-639 xs-back-btn">
              <a href="javascript:history.go(-1)"><?php _e('Terug', THEME_NAME); ?></a>
            </div>
            <strong class="page-title"><?php echo $pageTitle; ?></strong>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-nav-cntlr main-nav-cntlr-sm">
    <nav class="main-nav">
      <div class="sm-popup-logo show-sm"><a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/logo.png"></a></div>
      <div class="popup-cart-btn"><a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/popup-cart-btn.png"></a></div>
      <div class="closebtn show-lg">
        <span></span>
        <span></span>
      </div>
      <?php 
        $menuOptions = array( 
            'theme_location' => 'cbv_main_menu', 
            'menu_class' => 'clearfix reset-list',
            'container' => '',
            'container_class' => ''
          );
        wp_nav_menu( $menuOptions ); 
      ?>
      <div class="xs-popupmenu-2 show-md">
        <?php 
          $menuOptions = array( 
              'theme_location' => 'cbv_top_menu', 
              'menu_class' => 'reset-list hdr-topbar-nav',
              'container' => '',
              'container_class' => ''
            );
          wp_nav_menu( $menuOptions ); 
        ?> 
      </div>
    </nav>
  </div>

</div>