(function($) {

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});

  
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};


//$('[data-toggle="tooltip"]').tooltip();

//banner animation
/*$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});*/


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}




if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:true,
      scrollwheel: false,
      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        //icon:'map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

}

/*var container = $(".container").width();
var sidewidth = windowWidth - container;
var leftsidewidth = sidewidth / 2;
$(".eena-brdcrmb-left").css({
  width : leftsidewidth,
  left : 0
});*/

if( $('.bdcmbSlider').length ){
    $('.bdcmbSlider').slick({
      dots: false,
      arrows: false,
      infinite: true,
      autoplay: false,
      autoplaySpeed: 1000,
      speed: 300,
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
}

$('.xs-tabs-btn').on('click', function(){
  $(this).toggleClass('md-tabs-btn-expend');
  $('.xs-link ul').slideToggle(500);
  
});
$('.xs-link li').on('click', function(){
  var selectText = $(this).text();
  $('.xs-tabs-btn').html(selectText);
});

/*$('.xs-tabs-btn').on('click', function(){
  $(this).toggleClass('plyr-tabs-btn-expend');
  $('.xs-player-list ul').slideToggle(500);
  
});
$('.xs-player-list li').on('click', function(){
  var selectText = $(this).text();
  $('.xs-tabs-btn').html(selectText);
});*/



/* End of Shoriful*/




/* End of Milon*/

if( $('.FanShopPostSlider').length ){
    $('.FanShopPostSlider').slick({
      dots: false,
      infinite: false,
      autoplay: true,
      arrows:false,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: $('.fanshop-post-grid-wrp .fl-prev'),
      nextArrow: $('.fanshop-post-grid-wrp .fl-next'),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:true,
            dots: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}


// footer slide menu

$('.ftr-col h6').on('click', function(){
  $(this).toggleClass('active');
  $(this).parent().siblings().find('h6').removeClass('active');
  $(this).parent().find('ul').slideToggle(300);
  $(this).parent().siblings().find('ul').slideUp(300);
});

//products counter
if( $('.qty').length ){
  $('.qty').each(function() {
    var spinner = $(this),
      input = spinner.find('input[type="number"]'),
      btnUp = spinner.find('.plus'),
      btnDown = spinner.find('.minus'),
      min = 1,
      max = input.attr('max');

    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

  });

}

/*
-----------------------
Start Contact Google Map ->> 
-----------------------
*/
if( $('#googlemap').length ){
    var latitude = $('#googlemap').data('latitude');
    var longitude = $('#googlemap').data('longitude');

    var myCenter= new google.maps.LatLng(latitude,  longitude);
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
    function initialize(){
        var mapProp = {
          center:myCenter,

          mapTypeControl:false,
          scrollwheel: false,

          zoomControl: false,
          disableDefaultUI: true,
          zoom:17,
          streetViewControl: false,
          rotateControl: false,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          styles : CustomMapStyles
      };
      var map= new google.maps.Map(document.getElementById('googlemap'),mapProp);

      var marker= new google.maps.Marker({
        position:myCenter,
        icon:''
        });
      marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}



$('.fl-tabs li a').click(function(e){
  e.preventDefault();
  var tab_id = $(this).attr('data-tab');

  $('.fl-tabs li a').removeClass('current');
  $('.fl-tab-content').removeClass('current');

  $(this).addClass('current');
  $("#"+tab_id).addClass('current');
});
/* End of Noyon */



if( $('.hmNewsSecSlider').length ){
    $('.hmNewsSecSlider').slick({
      dots: false,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: $('.hmNewsSecSliderPrevNext .fl-prev'),
      nextArrow: $('.hmNewsSecSliderPrevNext .fl-next'),
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            dots: true
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            dots: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}


/*End of Rannojit*/
if( $('.mainSlider').length ){
    $('.mainSlider').on('init', function(event, slick, currentSlide, nextSlide){
      cs = slick.currentSlide;
    });
    $('.mainSlider').slick({
      dots: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 900,
      fade: true,
      slidesToShow: 1,
      slidesToScroll: 1, 
      dotsClass: 'main-slider-custom-pagi',
      prevArrow: $('.home-banner-cntlr .fl-prev'),
      nextArrow: $('.home-banner-cntlr .fl-next'),
      customPaging: function(slick,index) {
          return '<span></span>';
      }
    });
    $('.mainSlider').on("beforeChange", function(event, slick, currentSlide, nextSlide){
      cs = slick.currentSlide;
      $('.mainSlideItemDesSlider .mainSlideItemDes').removeClass('itemDesActive');
      $('.mainSlideItemDesSlider .mainSlideItemDes[data-slide="'+nextSlide+'"]').addClass('itemDesActive');
    });
    $('.main-slider-custom-pagi').appendTo('.cm-custom-dots');
}

if( $('.hmWebshopSlider').length ){
    $('.hmWebshopSlider').slick({
      dots: false,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: $('.hmWebshopSliderPrevNext .fl-prev'),
      nextArrow: $('.hmWebshopSliderPrevNext .fl-next'),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}


if( $('.dftNewsOverviewSlider').length ){
    $('.dftNewsOverviewSlider').slick({
      dots: false,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}
var hmBackInTimeSecDesWidth = $('.hm-back-in-time-sec-des').outerWidth();
var hmBackInTimeSecDesWidthCal = hmBackInTimeSecDesWidth + 40;
$('.black-anlge-lft').css("border-right-width", hmBackInTimeSecDesWidthCal);
$( window ).resize(function() {
  var hmBackInTimeSecDesWidth = $('.hm-back-in-time-sec-des').outerWidth();
  var hmBackInTimeSecDesWidthCal = hmBackInTimeSecDesWidth + 40;
  $('.black-anlge-lft').css("border-right-width", hmBackInTimeSecDesWidthCal);
});

var container = $(".container").width();
var sideWidh = (windowWidth - container) / 2;

$('.hdr-lft-opacity-bg').css("width", sideWidh);

$( window ).resize(function() {
  $('.hdr-lft-opacity-bg').css("width", sideWidh);
});
//$('.mainSlideItemDes').css("left", sideWidh);

$('.scrollto').on('click', function(e){
  e.preventDefault();
  var togo = $(this).data('to');
  goToByScroll(togo, 0);
});

function goToByScroll(id, offset){
  if(id){
      // Remove "link" from the ID
    id = id.replace("link", "");
      // Scroll
    $('html,body').animate(
        {scrollTop: $(id).offset().top - offset},
      500);
  }
}

if (windowWidth <= 1199) {
  $('.hdr-humberger').on('click', function(e){
    $('.main-nav-cntlr').addClass('opacity-1');
    $('.bdoverlay').addClass('active');
    $('body').addClass('active-scroll-off');
    $(this).addClass('active-collapse');
  });
  $('.closebtn').on('click', function(e){
    $('.bdoverlay').removeClass('active');
    $('.main-nav-cntlr').removeClass('opacity-1');
    $('body').removeClass('active-scroll-off');
    $('.line-icon').removeClass('active-collapse');
  });
  
  $('li.menu-item-has-children > a').on('click', function(e){
    e.preventDefault();
    //$('li.menu-item-has-children .sub-menu').slideUp(300);
    $(this).toggleClass('sub-menu-active');
    //$(this).next().slideDown(300);
    $(this).next().slideToggle(300);

  });
}

function  headerObjects(){
  var w1 = $(window).width();
  var w2 = $('.hdr-main-nav-cntlr .container').outerWidth();
  var w3 = $('.main-nav-white-bg').outerWidth();

  var wv1 = w1 - w2;
  var wv2 = wv1 / 2; // width on one side
  var wv3 = w2 - w3;

  var wac = wv2 + wv3;
  var wac2 = wac - 900;

  $('.bnr-lft-angle').width(wac + 100);
  $('.bnr-lft-angle-bg').width(wac2);
  $('.logo').css('left', wv2);
  $('.bnr-lft-angle, .bnr-lft-angle-bg, .logo').css('opacity', 1);
}
headerObjects();

$(window).on('resize', function(){
  headerObjects();
});

/*if( $('.postSlider').length ){
    $('.postSlider').slick({
      dots: false,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      slidesPerRow: 3,
      rows: 2,
    });
}
*/
/*$('.entry-header-tab > ul > li a').on('click', function(){
    $(this).addClass('active');
    $(this).parent().siblings().find('a').removeClass('active');
  
});*/

$("#postloadMore").on('click', function(e) {
    e.preventDefault();
    var postSTR = '';
    //init
    if(pStr != '') postSTR = pStr;

    var ajaxurl = that.data('url');
    //ajax call
    $.ajax({
        url: ajaxurl,
        type: 'post',
        data: {
            sort: postSTR,
            el_li: 'not',
            action: 'ajax_post_script_load_more'
        },
        beforeSend: function ( xhr ) {
            $('#ajxaloader').show();
             
        },
        
        success: function(response ) {
            //check
            //console.log(response);
            if (response  == 0) {
                //$('.post-load-more-btn').prepend('<div class="clearfix"></div><div class="text-center"><p>Geen producten meer om te laden.</p></div>');
                $('.post-load-more-btn').hide();
                $('#ajxaloader').hide();
            } else {
                $('#ajxaloader').hide();
                that.data('page', newPage);
                $('#post-content').append(response.substr(response.length-1, 1) === '0'? response.substr(0, response.length-1) : response);
            }
        },
        error: function(response ) {
            console.log('asdfsd');
        },
    });
});



})(jQuery);