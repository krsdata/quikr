// JavaScript Document

$(window).on("load",function(){
	
	$(".leftMenuInr").mCustomScrollbar({
		//setHeight:500,
		theme:"minimal-dark"
	});
});

$(document).ready(function(e) {
    $('.mainBnr .owl-carousel').owlCarousel({
		items:1,
		loop:false,
		margin:10,
		nav: true
	});
	
	$('.trndngSldr .owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		center: true,
		nav: true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:3,
			},
			1000:{
				items:3,
			}
		}
	});
	
	$('.commanSlider .owl-carousel').owlCarousel({
		margin:0,
		nav: true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:3,
			},
			1000:{
				items:3,
			}
		}
	});
});