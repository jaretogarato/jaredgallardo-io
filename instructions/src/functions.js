
window.page = 'Welcome';
window.rate = 750;

$('div.info').each(function(){
	$('.box:not(:first)', this).children('h1.cat').after('<span class="prev">PREV</span>');
});

$('div.info').each(function(){
	$('.box:not(:last)', this).children('h1.cat').after('<span class="next">NEXT</span>');
});

$('div.info').each(function(){
	$('.box:last', this).children('h1.cat').after('<span class="back-to-top">BACK TO MENU</span>');
});

$('.nav a').click(function(){
	
	window.page = $(this).attr('id').replace('btn-', '');
	
	window.the = page;
	
	var the_text = $(this).text();
	
	show(window.page, the_text);
	
	$(this).css({'background-color':'#000000', 'color':'#ffee00'});
	
});



function show(page, text){
	
	$('.nav a').css({'background-color':'transparent', 'color':'#cccccf'});
	
	if (page == 'Start'){
		$('.nav a#btn-' + page).css({'background-color':'#000000', 'color':'#ffee00'});
	}
	
	window.page = page;
	window.the = page;
	
	var the_text = text;
	
	if (page == 'Welcome'){
		$('body').css({'background-color':'#000000'});
		$('.page').hide();
		$('.subject').hide();
		$('div#Welcome').fadeIn(500);
	} else {
		$('.subject').hide();
		$('.subject').show();
		$('.subject-text').html('<span style="color:#ffee00;letter-spacing:7px;">ASCENDE</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' + the_text);
		
		$('body').css({'background-color':'#303036'});
		$('div.page, div#Welcome').css({'display':'none'});
		
		$('div#' + page + ', div#' + page + '-section').show();
		
	}
	$('.to-top').hide();
	
	$('html, body').animate({ scrollTop: 0 }, 0);
}





$('.section-button').click(function(){
	
	var the = $(this).parent().parent().parent().attr('id');
	var kid = $(this).index() + 1;
	window.the = the;
	
	var target = $('#' + the + '-section .info .box:nth-child(' + kid + ')');
	
	$('html, body').animate({ scrollTop: $(target).offset().top - 145 }, window.rate, 'easeInOutExpo', function(){
		$('.to-top').show();
	});
	
	return false; 

});



$('.cat').click(function(){
	
	$('html, body').animate({ scrollTop: $(this).offset().top - 175 }, window.rate, 'easeInOutExpo');
	
});



$('.to-top').click(function(){
	
	$('html, body').animate({ scrollTop: 0 }, window.rate, 'easeInOutExpo');
	
});

$('.prev').click(function(){
	
	var kid = $(this).parent().index();
	
	var target = $('#' + window.the + '-section .info .box:nth-child(' + kid + ')');
	
	$('html, body').animate({ scrollTop: $(target).offset().top - 145 }, window.rate, 'easeInOutExpo', function(){
		//
	});
	
});



$('.next').click(function(){
	
	var kid = $(this).parent().index() + 2;
	
	var target = $('#' + window.the + '-section >.info').find('.box:nth-child(' + kid + ')');
	
	$('html, body').animate({ scrollTop: $(target).offset().top - 145 }, window.rate, 'easeInOutExpo', function(){
		//
	});
	
});



$('.back-to-top').click(function(){
	
	$('html, body').animate({ scrollTop: 0 }, window.rate, 'easeInOutExpo');
	
});




$(window).resize(function() {
    resize();
});





function resize(){
    window.width = $(window).width();
    window.height = $(window).height();
    
	$('#stats').text(window.width + ' x ' + window.height);
	
	if (window.width < 1050){
		$('.responsive').css({'width':'980px'});
		$('.nav').css({'width':'820px'});
		
	} else if (window.width < 1150){
		$('.responsive').css({'width':'1000px'});
		$('.nav').css({'width':'820px'});
		
	} else if (window.width < 1250){
		$('.responsive').css({'width':'1100px'});
		$('.nav').css({'width':'820px'});
		
	} else if (window.width < 1350){
		$('.responsive').css({'width':'1200px'});
		$('.nav').css({'width':'820px'});
		
	} else if (window.width < 1450){
		$('.responsive').css({'width':'1300px'});
		$('.nav').css({'width':'820px'});
		
	} else if (window.width < 3000){
		$('.responsive').css({'width':'1400px'});
		$('.nav').css({'width':'820px'});
		
	}	
	
}

$(document).ready(function(){
	
    resize();
    
});

if (window.browser == 'ie'){
	window.scroller = 'html';
} else if (window.browser == 'firefox'){
	window.scroller = 'html, body';
} else if (window.browser == 'chrome'){
	window.scroller = 'body';
} else {
	window.scroller = 'html, body';
}

$(window).scroll(function(e){
	e.preventDefault();
	
	if ($(window.scroller).scrollTop() == 0){
		$('.to-top').hide();
	} else if (window.page != 'Welcome'){
		$('.to-top').show();
	}
	
});


