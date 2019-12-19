$(function(){



   var nameerror = true,
       mobileerror = true,
       textareaerror = true;


    $("#elname").blur(function(){

    	 "use strice";
 
		    if($(this).val().length < 3){
              $(this).css({border : "1px solid #F00"});
		      $(this).parent().find(".input-error").fadeIn(500);
		      $(this).parent().find(".elsp").css({visibility: "visible"});

		     }else{
               $(this).css({border : "1px solid #ced4da"});
		  	   $(this).parent().find(".input-error").fadeOut(500);
		  	   $(this).parent().find(".elsp").css({visibility: "hidden"});

		  	   nameerror = false;

		    }

    })




    $("#mobile").blur(function(){

    	 "use strice";
 
		    if($(this).val().length < 11){
              $(this).css({border : "1px solid #F00"});
		      $(this).parent().find(".input-error").fadeIn(500);
		      $(this).parent().find(".elsp").css({visibility: "visible"});

		     }else{
               $(this).css({border : "1px solid #ced4da"});
		  	   $(this).parent().find(".input-error").fadeOut(500);
		  	   $(this).parent().find(".elsp").css({visibility: "hidden"});
		  	   mobileerror = false;

		    }

    })





    $("#your-message").blur(function(){

    	 "use strice";
 
		    if($(this).val().length < 2){

	              $(this).css({border : "1px solid #F00"});
			      $(this).parent().find(".input-error").fadeIn(500);
			      $(this).parent().find(".elsp").css({visibility: "visible"});

		     }else{
	               $(this).css({border : "1px solid #ced4da"});
			  	   $(this).parent().find(".input-error").fadeOut(500);
			  	   $(this).parent().find(".elsp").css({visibility: "hidden"});
			  	   textareaerror = false;

		    }

    });




      	$(".contact-form").submit(function(event){
  

         if(nameerror === true || mobileerror === true || textareaerror === true){
  
   				event.preventDefault();

   		    }else{
   		    	 window.location = this.href;

   		    	 console.log(this.href);

   		    }
   		

	});







});




