$(function(){

 "use strict";

  $(window).resize(function(){
  	
  $(".header").width($(window).width());


  })


$(".thelist li").click(function(){

   $(this).addClass("selected").siblings("li").removeClass("selected");

   var elvalue = $(this).data("value");

   $(".information .elcontent div").hide();
   $("." + elvalue).fadeIn(600);



})



})