(function($) {

  $( window ).load(function() {
    if( $("#firstTerm").length ){
      var firstTerm = $("#firstTerm").data('term');
      postCategory(firstTerm);
    } 
    if( $("#hfirstTerm").length ){
      var hfirstTerm = $("#hfirstTerm").data('term');
      historyCategory(hfirstTerm);
    }  

    if( $("#pfirstTerm").length ){
      var pfirstTerm = $("#pfirstTerm").data('term');
      productCategory(pfirstTerm);
    }  
  });

})(jQuery);

function postCategory(val, el){
    var ajaxurl = ajax_posts_object.ajaxurl;
    //ajax call
    jQuery.ajax({
        url: ajaxurl,
        type: 'post',
        context: this,
        data: {
            cat: val,
            el_li: 'not',
            action: 'ajax_post_script_load_more'
        },
        beforeSend: function ( xhr ) {
            jQuery('#ajxaloader').show();
            jQuery('#post-content').addClass('loading-now');
             
        },
        success: function(response ) {
            //check
            //console.log(response);
            if (response  == 0) {
                //$('.post-load-more-btn').prepend('<div class="clearfix"></div><div class="text-center"><p>Geen producten meer om te laden.</p></div>');
                jQuery('#post-content').removeClass('loading-now');
            } else {
                jQuery('#post-content').html(response.substr(response.length-1, 1) === '0'? response.substr(0, response.length-1) : response);
                jQuery('#post-content').removeClass('loading-now');
            }
            jQuery(el).parents('ul').find('li').removeClass('current');
            jQuery(el).parent('li').addClass('current');
        },
        error: function(response ) {
            console.log('asdfsd');
        },
    });
}


function listItemHide(){
 jQuery('#post-items').each(function(){       
      jQuery(this).find('li.hidelist').hide();
  });
}

function historyCategory(val, el){
    var ajaxurl = ajax_history_object.ajaxurl;
    //ajax call
    jQuery.ajax({
        url: ajaxurl,
        type: 'post',
        data: {
            cat: val,
            el_li: 'not',
            action: 'ajax_history_script_load_more'
        },
        beforeSend: function ( xhr ) {
            jQuery('#ajxaloader').show();
            jQuery('#history-tab').addClass('loading-now');
             
        },
        success: function(response ) {
            //check
            console.log(response);
            if (response  == 0) {
                //$('.post-load-more-btn').prepend('<div class="clearfix"></div><div class="text-center"><p>Geen producten meer om te laden.</p></div>');
                jQuery('#history-tab').removeClass('loading-now');
            } else {
                jQuery('#history-content').html(response.substr(response.length-1, 1) === '0'? response.substr(0, response.length-1) : response);
                jQuery('#history-tab').removeClass('loading-now');
            }
            
        },
        error: function(response ) {
            console.log('asdfsd');
        },
    });
}


function productCategory(val, el){
    var ajaxurl = ajax_product_object.ajaxurl;
    //ajax call
    jQuery.ajax({
        url: ajaxurl,
        type: 'post',
        data: {
            cat: val,
            el_li: 'not',
            action: 'ajax_product_script_load_more'
        },
        beforeSend: function ( xhr ) {
            jQuery('#ajxaloader').show();
            jQuery('#product-content').addClass('loading-now');
             
        },
        success: function(response ) {
            //check
            //console.log(response);
            if (response  == 0) {
                //$('.post-load-more-btn').prepend('<div class="clearfix"></div><div class="text-center"><p>Geen producten meer om te laden.</p></div>');
                jQuery('#product-content').removeClass('loading-now');
            } else {
                jQuery('#product-content').html(response.substr(response.length-1, 1) === '0'? response.substr(0, response.length-1) : response);
                jQuery('#product-content').removeClass('loading-now');
            }
            jQuery(el).parents('ul').find('li a').removeClass('active');
            jQuery(el).parent('li').addClass('active');
        },
        error: function(response ) {
            console.log('asdfsd');
        },
    });
}