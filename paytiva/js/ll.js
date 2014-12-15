function myFunctionId (id) {
	
	if ($('#'+ id).hasClass('active')) {
		$('#'+ id).removeClass('active');
	} else {
		
		$(".expand").removeClass("active");  // remove active class from all
        $('#'+ id).addClass('active');         // add active class to clicked element
       
	}
	
}


$('.body').on('show.bs.collapse', function () {
    $('.body .in').collapse('hide');
    
});
