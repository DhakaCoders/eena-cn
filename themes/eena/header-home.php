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
    <symbol id="md-cr-event-goal-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 0C5.3835 0 0 5.3835 0 12C0 18.6165 5.3835 24 12 24C18.6165 24 24 18.6165 24 12C24 5.3835 18.6165 0 12 0ZM12.762 3.8985L15.8475 2.2395C17.556 2.916 19.047 4.0245 20.181 5.4345L19.446 8.8275L17.0925 9.981L12.762 6.8265V3.8985ZM8.178 2.2305L11.2635 3.8955V6.8265L6.936 9.981L4.5705 8.826L3.8355 5.412C4.9725 4.005 6.4665 2.9025 8.178 2.2305ZM3.345 17.931C2.3655 16.506 1.728 14.8305 1.5525 13.02L4.092 10.2615L6.408 11.394L8.1525 16.3485L6.678 18.1155L3.345 17.931ZM14.6745 22.1415C13.818 22.368 12.9255 22.5 12 22.5C10.881 22.5 9.804 22.32 8.7915 21.9945L7.848 19.0575L9.3525 17.25H14.6535L16.131 18.999L14.6745 22.1415ZM17.301 18.0645L15.8505 16.347L17.619 11.394L19.9245 10.2645L22.449 13.0215C22.2975 14.583 21.795 16.0395 21.0315 17.328L17.301 18.0645Z" fill="#111111"/>
    </symbol>

    <symbol id="md-cr-event-profile-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0)">
      <path d="M19.0781 11.2969C17.1397 11.2969 15.5625 12.8741 15.5625 14.8125C15.5625 16.7509 17.1397 18.3281 19.0781 18.3281C21.0165 18.3281 22.5938 16.7509 22.5938 14.8125C22.5938 12.8741 21.0165 11.2969 19.0781 11.2969Z" fill="black"/>
      <path d="M4.92188 0C2.98345 0 1.40625 1.62408 1.40625 3.5625C1.40625 5.50092 2.98345 7.07812 4.92188 7.07812C6.8603 7.07812 8.4375 5.50092 8.4375 3.5625C8.4375 1.62408 6.8603 0 4.92188 0Z" fill="black"/>
      <path d="M22.5244 6.07013C22.407 5.82708 22.1611 5.67188 21.8906 5.67188H21.1484C20.7975 2.51194 18.1113 0 14.8594 0H12C11.6114 0 11.2969 0.314484 11.2969 0.703125C11.2969 1.09177 11.6114 1.40625 12 1.40625C14.4754 1.40625 16.5767 3.28992 16.9186 5.67188H16.2656C15.9951 5.67188 15.7492 5.82708 15.6318 6.07013C15.5151 6.31388 15.5474 6.60295 15.7163 6.81445L18.5288 10.3301C18.6627 10.497 18.8646 10.5938 19.0781 10.5938C19.2917 10.5938 19.4935 10.497 19.6274 10.3301L22.4399 6.81445C22.6089 6.60295 22.6411 6.31388 22.5244 6.07013Z" fill="#111111"/>
      <path d="M12 22.5938C9.52464 22.5938 7.42332 20.7101 7.08137 18.3282H7.73439C8.0049 18.3282 8.25076 18.173 8.36818 17.9299C8.4849 17.6862 8.45265 17.3971 8.28371 17.1856L5.47122 13.67C5.20342 13.3363 4.64036 13.3363 4.37256 13.67L1.56006 17.1856C1.39113 17.3971 1.35888 17.6862 1.47559 17.9299C1.59302 18.173 1.83888 18.3282 2.10939 18.3282H2.85166C3.20252 21.4881 5.88868 24 9.14064 24H12C12.3886 24 12.7031 23.6856 12.7031 23.2969C12.7031 22.9083 12.3886 22.5938 12 22.5938Z" fill="black"/>
      <path d="M22.5118 18.3281C21.624 19.1953 20.414 19.7344 19.0781 19.7344C17.7422 19.7344 16.5322 19.1953 15.6445 18.3281C14.7289 19.2225 14.1562 20.5129 14.1562 21.8906V23.2969C14.1562 23.6855 14.4707 24 14.8594 24H23.2969C23.6855 24 24 23.6855 24 23.2969V21.8906C24 20.5129 23.4273 19.2225 22.5118 18.3281Z" fill="black"/>
      <path d="M8.35552 7.07812C7.46775 7.94527 6.25772 8.48438 4.92188 8.48438C3.58603 8.48438 2.37595 7.94527 1.48823 7.07812C0.572672 7.9725 0 9.216 0 10.5938V12C0 12.3886 0.314484 12.7031 0.703125 12.7031H9.14062C9.52927 12.7031 9.84375 12.3886 9.84375 12V10.5938C9.84375 9.216 9.27108 7.9725 8.35552 7.07812Z" fill="black"/>
      </g>
      <defs>
      <clipPath id="clip0">
      <rect width="24" height="24" fill="white"/>
      </clipPath>
      </defs>
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

    <symbol id="sp-fanshop-gallery-arrows-svg" width="27" height="14" viewBox="0 0 27 14"  xmlns="http://www.w3.org/2000/svg">
    <path d="M1.05467 5.48437H23.3907L19.6907 1.80225C19.2778 1.39134 19.2762 0.723564 19.6871 0.310707C20.0981 -0.102203 20.7659 -0.103732 21.1787 0.307121L26.6897 5.79149C26.6901 5.79181 26.6903 5.79218 26.6906 5.79249C27.1024 6.2034 27.1038 6.87334 26.6907 7.28561C26.6904 7.28593 26.6901 7.2863 26.6898 7.28662L21.1788 12.771C20.766 13.1818 20.0982 13.1804 19.6873 12.7674C19.2763 12.3545 19.2779 11.6868 19.6908 11.2759L23.3907 7.59374H1.05467C0.472164 7.59374 -1.90735e-05 7.12156 -1.90735e-05 6.53905C-1.90735e-05 5.95655 0.472164 5.48437 1.05467 5.48437Z"/>
    </symbol>
    <symbol id="fanshop-post-arrows-icon-svg" width="27" height="14" viewBox="0 0 27 14"  xmlns="http://www.w3.org/2000/svg">
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
<div class="hdr-cntlr home-hdr-cntlr">
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

<section class="home-banner-cntlr">
  <div class="main-slider mainSlider">
    <div class="mainSlideItem">
      <div class="mainSlideImg inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/mainSlideImg-01.jpg');"></div>
    </div>
    <div class="mainSlideItem">
      <div class="mainSlideImg inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/mainSlideImg-01.jpg');"></div>
    </div>

  </div>
  <div class="main-slider-item-cntlr clearfix">
    <div class="main-slider-item-cntlr-inr">
      <span class="fl-prev">
        <i>
          <svg class="fl-prev-icon-svg" width="34" height="16" viewBox="0 0 34 16" fill="#C8C8C8">
            <use xlink:href="#fl-prev-icon-svg"></use>
          </svg> 
        </i>
      </span>
      <ul class="reset-list main-slider-custom-pagi">
        <li><span></span></li>
        <li class="cm-pgi-active"><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
      </ul>
      <span class="fl-next">
        <i>
          <svg class="fl-next-icon-svg" width="34" height="16" viewBox="0 0 34 16" fill="#C8C8C8">
            <use xlink:href="#fl-next-icon-svg"></use>
          </svg> 
        </i>
      </span>
    </div>
  </div>
</section>

  <div class="mainSlideItemDesSlider-cntlr">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mainSlideItemDesSlider">
            <div class="mainSlideItemDes clearfix">
                <div class="mainSlideItemDesInner">
                  <span class="post-date">VRIJDAG 27 MAART - 14U05</span>
                  <strong class="msdtitle">POSITIEF ADVIES VOOR LICENTIE EERSTE AMATEURLIGA</strong>
                  <p>In deze barre tijden voor iedereen willen we jullie ook graag wat positief nieuws meegeven. Onze club kreeg zonet het bericht binnen</p>
                  <a href="#">LEES MEEr</a>
                </div>
            </div>
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