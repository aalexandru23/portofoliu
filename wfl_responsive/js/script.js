function myFunction() {
		$('.circle-link-right').on('click', function(e){
        e.preventDefault();
        $('html,body').animate({scrollTop: $('#purpose').offset().top}, 1000);
    });
    $('.circle-link-left').on('click', function(e){
        e.preventDefault();
        $('html,body').animate({scrollTop: $('#walkforlife').offset().top}, 1000);
    });
	$('.circle-link-left2').on('click', function(e){
        e.preventDefault();
        $('html,body').animate({scrollTop: $('#story').offset().top}, 1000);
    });
	$('.circle-link-right2').on('click', function(e){
        e.preventDefault();
        $('html,body').animate({scrollTop: $('#team').offset().top}, 1000);
    });
	$('.circle-link-left3').on('click', function(e){
        e.preventDefault();
        $('html,body').animate({scrollTop: $('#adventure').offset().top}, 1000);
    });
	}
	$(document).ready(myFunction);