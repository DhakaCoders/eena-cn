(function($) {

$("#postloadMore").on('click', function(e) {
    e.preventDefault();
    var postSTR = '';
    //init
    if(pStr != '') postSTR = pStr;

    var ajaxurl = ajax_posts_object.ajaxurl;
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
            }
        },
        error: function(response ) {
            console.log('asdfsd');
        },
    });
}