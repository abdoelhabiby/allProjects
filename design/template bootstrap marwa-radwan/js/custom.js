$(function(){



$("a").click(function(e){

 e.preventDefault();

})



$(".navbar ul li a").click(function(){


$("html,body").animate({
	scrollTop : $($(this).data('value')).offset().top
},800)


})






});