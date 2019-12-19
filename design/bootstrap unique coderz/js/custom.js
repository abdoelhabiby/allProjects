$(function(){







$(".navbar .navbar-right a").click(function(e){
	e.preventDefault();
})





$(".navbar ul li a").click(function(){


  $("body,html").animate({

  	scrollTop: $(this).data('value').offset().top;

  },700);


})

















              new WOW().init();





});