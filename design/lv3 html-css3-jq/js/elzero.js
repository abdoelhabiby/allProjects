$(document).ready(function(){


$(".header").height($(window).height());

$(window).resize(function(){
	$(".header").height($(window).height());
});

$("h1").css({"color": "green"});








$(".header .fa-chevron-down").click(function(){

  $("html,body").animate({
  	scrollTop : $(".features").offset().top
  },1000)


})


//------------------------------------------------------

$(".show").click(function(){

    $(".show").fadeOut(400);
    $(".hidden").fadeIn(1000);
    

})

//-------------------------------
var chevronleft = $(".fa-chevron-left"),
    chevronright= $(".fa-chevron-right");




function checkClient(){

$(".client:first").hasClass("allow") ?  chevronleft.fadeOut() : chevronleft.fadeIn();
$(".client:last").hasClass("allow") ?  chevronright.fadeOut() : chevronright.fadeIn();


}




   checkClient();


$(".araa i").click(function(){

if($(this).hasClass("fa-chevron-right")){

	$(".allow").fadeOut(700,function(){

   $(this).removeClass("allow").next(".client").addClass("allow").fadeIn();

   checkClient();



	})
}else{

$(".allow").fadeOut(700,function(){

   $(this).removeClass("allow").prev(".client").addClass("allow").fadeIn();

   checkClient();



	})

}


})




$("button").click(function(e){
	e.preventDefault();
})







$("body").niceScroll({
	 cursorcolor: " #F7600e",
	 cursorborder: "1px solid  #F7600e",
	 cursorborderradius: "3px",
	 cursorwidth: "9px",
	 scrollspeed: 80
});






});



