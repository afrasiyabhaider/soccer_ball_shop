// JavaScript Document
$(document).ready(function() {

$(window).bind("load", function(e){
    $('html, body').animate({
        scrollTop: $(".coming-sec").offset().top
    }, 2000);
});

$('.moves').slick({
	  dots: false,
	  arrows: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
      autoplaySpeed: 2500,
	  fade: true,
	  cssEase: 'linear'
	});
	
jQuery('.move').slick({
  dots: false,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2500,
  responsive: [
	{
	  breakpoint: 1030,
	  settings: {
		slidesToShow: 4,
		slidesToScroll: 1
	  }
	},
	{
	  breakpoint: 780,
	  settings: {
		slidesToShow: 3,
		slidesToScroll: 1
	  }
	},
	{
	  breakpoint: 650,
	  settings: {
		slidesToShow: 2,
		slidesToScroll: 1
	  }
	}
  ]
});

jQuery('.move2').slick({
  dots: false,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3500,
  responsive: [
	{
	  breakpoint: 1030,
	  settings: {
		slidesToShow: 4,
		slidesToScroll: 1
	  }
	},
	{
	  breakpoint: 780,
	  settings: {
		slidesToShow: 3,
		slidesToScroll: 1
	  }
	},
	{
	  breakpoint: 650,
	  settings: {
		slidesToShow: 2,
		slidesToScroll: 1
	  }
	}
  ]
});

 $('.bigthumbs').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.bigthumbs-nav'
});
$('.bigthumbs-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.bigthumbs',
  dots: false,
  centerMode: true,
  focusOnSelect: true
});
$('.spi').on('click', function(){ 
	$('.enquiryform').fadeIn('slow'); 	
	$('.overlay').fadeIn('fast'); 	
});
$('.closebtn').on('click', function(){ 
	$('.enquiryform').fadeOut('fast');	
	$('.overlay').fadeOut('fast');	
});
$('.fa-angle-down').on('click', function(){ 
	$(this).toggleClass('fa-angle-up'); 
    $(this).next().siblings('ul').slideToggle();	
});
$('.sidebarr ul li ul li a.active').closest('ul').prev('a').siblings('i').trigger('click');	
$('.togmenu').on('click', function(){ 
    $(this).siblings().find('ul').slideToggle();
});
 $(".set > a").on("click", function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this)
        .siblings(".content")
        .slideUp(200);
      $(".set > a i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
    } else {
      $(".set > a i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
      $(this)
        .find("i")
        .removeClass("fa-plus")
        .addClass("fa-minus");
      $(".set > a").removeClass("active");
      $(this).addClass("active");
      $(".content").slideUp(200);
      $(this)
        .siblings(".content")
        .slideDown(200);
    }
  });

});


