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
  });

})(jQuery);

function postCategory(val){
    var ajaxurl = ajax_posts_object.ajaxurl;
    //ajax call
    jQuery.ajax({
        url: ajaxurl,
        type: 'post',
        data: {
            cat: val,
            el_li: 'not',
            action: 'ajax_post_script_load_more'
        },
        beforeSend: function ( xhr ) {
            jQuery('#ajxaloader').show();
             
        },
        success: function(response ) {
            //check
            //console.log(response);
            if (response  == 0) {
                //$('.post-load-more-btn').prepend('<div class="clearfix"></div><div class="text-center"><p>Geen producten meer om te laden.</p></div>');
            } else {
                jQuery('#post-content').html(response.substr(response.length-1, 1) === '0'? response.substr(0, response.length-1) : response);
              listItemHide();
            }
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

function historyCategory(val){
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
             
        },
        success: function(response ) {
            //check
            console.log(response);
            if (response  == 0) {
                //$('.post-load-more-btn').prepend('<div class="clearfix"></div><div class="text-center"><p>Geen producten meer om te laden.</p></div>');
            } else {
                jQuery('#history-content').html(response.substr(response.length-1, 1) === '0'? response.substr(0, response.length-1) : response);
              listItemHide();
            }
        },
        error: function(response ) {
            console.log('asdfsd');
        },
    });
}