$(function(){



$("header").height($(window).height());



$(window).on("resize",function(){

$("header").height($(window).height());


})


$(".menupar").click(function(){


$("header ul").slideToggle(700);



})



$("a").click(function(e){

	e.preventDefault();
})




/*

$(".welcome button a").click(function(){

  $(this).addClass('active').siblings(this).removeClass('active');

})


$(".dropdown button").click(function(){



$(".dropdown ul").slideToggle(700);


})





*/















})