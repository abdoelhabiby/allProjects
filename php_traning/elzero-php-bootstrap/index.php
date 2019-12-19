<?php


  function check($input){	
    $input = strip_tags($input);
    $input = stripcslashes($input);
    $input = trim($input);

    return $input;
       }





	if($_SERVER['REQUEST_METHOD'] == 'POST'){

 

		$username  = check($_POST['name']);
	  $email     = check($_POST['email']);
		$mobile    = check($_POST['mobile']);
		$mobile    = filter_var($mobile,FILTER_SANITIZE_NUMBER_INT);
		$textarea  = check($_POST['textarea']);

    
    $formerrors = array();


   if(strlen($username) < 3){

   	$formerrors[] = "!sorry your name i must be bigger than 3l";

   }


 if(strlen($mobile) < 3){

   	$formerrors[] = "!sorry your number phone is small";


   }






   if(empty($formerrors)){

		//echo $username . "<br>" .$email . "<br>" .$mobile . "<br>" .$textarea . "<br>";

		$to = "abdelhady20190@gmail.com";
		$subject  = 'contact form';
		$msg = $textarea;
		$headers = "from " . $email . '\r\n';

		if(mail($to, $subject, $msg,$headers)){

			$username = '';
			$email = '';
			$mobile = '';
			$textarea = '';


          echo "<div class='alert alert-success'>success to send your message</div>";

		}

	}


}



	



?>






<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>real madrid</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<link rel="stylesheet"  href="css/contact.css">



</head>
<body>

  
  <!------------------------------ start form -------------------------->


  <div class="container">
  	  
  	  <h2 class="h1 text-center mt-5 ">Contact Me</h2>





  	  <form class="contact-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">




<?php

		 if(isset($formerrors) && !empty($formerrors)){ ?>

		 	 <div class="elerrors">
             <div class="alert alert-danger alert-dismissible fade show" role="alert">


<?php
	                  foreach ($formerrors as $errorss) { 

	                  	 echo   $errorss. "<br>";
	                  } 
?>

	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
	  </div>
    </div>


<?php
		}


?>


   
	



  	  	<div class="form-group row">
  	  		<label for="elname" class="col-sm-3 col-12 col-form-label p-2">Username</label>


  	  	    <input type="text" name="name" class="form-control col-sm-8 col-11" id="elname" required autocomplete="off" 
  	  	    value="<?php if(isset($username)){echo $username; } ?>" />
  	  	    <span class="col-sm-1 col-1 elsp">*</span>

  	  	     <p class="text-danger text-center col-12 input-error">!sorry your name must be bigger than 3</p>

  	  	</div>



  	  	<div class="form-group row">
  	  		<label for="elemail" class="col-sm-3 col-12 col-form-label p-2">Email</label>
  	  	    <input type="email" name="email" class="form-control col-sm-8 col-11" id="elemail"required 
  	  	    value="<?php if(isset($email)){echo $email; } ?>"/>
  	  	    <span class="col-sm-1 col-1">*</span>
  	  	    <p class="text-danger text-center col-12 input-error">!sorry your email must be not empty</p>


  	  	</div>


  	  	<div class="form-group row">
  	  		<label for="mobile" class="col-sm-3 col-12 col-form-label p-2">Mobile</label>
  	  	    <input type="text" name="mobile" class="form-control col-sm-8 col-11" id="mobile"
  	  	    value="<?php if(isset($mobile)){echo $mobile; } ?>"/>
  	  	   <p class="input-error text-danger text-center col-12 ">!sorry your number phone is small</p>

  	  	</div>


  	  	<div class="form-group row">
  	  		<label for="your-message" class="col-sm-3 col-12 col-form-label p-2">Your Message</label>
  	  	    <textarea class="form-control col-sm-8 col-11" id="your-message" cols="9" rows="8" name="textarea" required>
  	  	    <?php if(isset($textarea)){echo $textarea; } ?>
  	  	    </textarea>
  	  	      	  	    <span class="col-sm-1 col-1">*</span>
  	  	      	  	     <p class="input-error text-danger text-center col-12 ">!sorry your message cant be empty</p>


  	  	</div>  	  	  	  

  	  	<input type="submit" name="submit" value="Send Message" class="defa btn btn-success btn-md float-right mr-4">
  	  	<i class="fa fa-send float-right fsend"></i>

  	  </form>


  </div> 



 



  <!------------------------------ end form -------------------------->





<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
 integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script src="js/contact.js">
	
</script>


</body>
</html>