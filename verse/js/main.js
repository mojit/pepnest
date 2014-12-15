$('.selectpicker').selectpicker({
	 style: 'btn-default'
});
$(document).ready(function(){
    $("#pep_movea").hover(function(){
        $('.menua').stop().animate({'top': '-18px'}, 600);
    }, function(){
        $('.menua').stop().animate({'top': '-10px'}, 600);
    });    
});
$(document).ready(function(){
    $("#pep_moved").hover(function(){
        $('.menud').stop().animate({'top': '-18px'}, 600);
    }, function(){
        $('.menud').stop().animate({'top': '-10px'}, 600);
    });    
});
$(document).ready(function(){
    $("#pep_movec").hover(function(){
        $('.menuc').stop().animate({'top': '-18px'}, 600);
    }, function(){
        $('.menuc').stop().animate({'top': '-10px'}, 600);
    });    
});
$(document).ready(function(){
    $("#pep_moveg").hover(function(){
        $('.menug').stop().animate({'top': '-18px'}, 600);
    }, function(){
        $('.menug').stop().animate({'top': '-10px'}, 600);
    });    
});
$(document).ready(function(){
    $("#pep_moveco").hover(function(){
        $('.menuco').stop().animate({'top': '-18px'}, 600);
    }, function(){
        $('.menuco').stop().animate({'top': '-10px'}, 600);
    });    
});