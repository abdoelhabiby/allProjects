$(document).ready(function(){

/*
  var myheader = $(".header");

	myheader.height($(window).height());

		$(window).resize(function(){

		myheader.height($(window).height());

	});


//-------------------- slider ----------------------------------------------------------------------------

//$(".slider").bxSlider();

//-------------------------------------------------------------------------------------------------------=-
*/

var ournavbr = $(".navbar2");

	ournavbr.height($(window).height());

	ournavbr.on("resize",function(){

	$(this).height($(window).height());

})


	$(".links2 li a").on("click",function(){

	$(this).parent().addClass("active2").siblings(this).removeClass("active2");;

	

})

$(".navbar2 a").click(function(e){
	e.preventDefault();
})



$(".navbar2 li a").click(function(){
  
    $("html,body").animate({

      scrollTop: $("#" + $(this).data("value")).offset().top

    },1000);


});




//------------------slider-------------------

(function autoSlider(){

	$(".slider .thq").each(function(){

       if(!$(this).is(":last-child")){

       	$(this).delay(3000).fadeOut(1000,function(){

       		$(this).removeClass("thq").next().addClass("thq").fadeIn(1000);


          autoSlider();
       	})

  
       }else{


       	  $(this).delay(3000).fadeOut(1000,function(){

                $(this).removeClass("thq");

                $(".slider div").eq(0).addClass("thq").fadeIn();

                autoSlider();
       	  })

       }

           
	})
	 

//---------------------------------------------------------------------------


//------------------------------myProjects----------------------------------------

$(".myProjects li").click(function(){

	$(this).addClass("actoo").siblings(this).removeClass("actoo");
})


//------------------------------------------------------------------------------


}());


//-------------------nicescrool-------------------------------------

$("body").niceScroll({
	 cursorcolor: "green",
	 cursorborder: "1px solid green",
	 cursorborderradius: "3px",
	 cursorwidth: "9px",
	 scrollspeed: 80
});

//---------------------------------------------




});



