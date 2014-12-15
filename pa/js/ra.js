jQuery(function($) {
    var divs = $('.fade');
    $(window).on('scroll', function() {
        var st = $(this).scrollTop();
        divs.css({ 
            'margin-top' : -(st/30)+"px", 
            'opacity' : 1 - st/210
        }); 
    });
});