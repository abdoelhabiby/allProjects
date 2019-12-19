<?php

$page_title = 'Edit Profile';




include 'session.php';
include 'include/all_include.php';

?>

			<style type="text/css">
				.hisdata{
					margin: 30px;
					line-height: 180%;
					font-size: 18.5px;

				}
			</style>


<?php  

  $hisid = $_SESSION['user_id'];
  $hisid = (int)$hisid;
  $hisid = mysqli_real_escape_string($connect,$hisid);


  $query = "SELECT * FROM users WHERE userid = '{$hisid}' LIMIT 1 ";
  $resul = mysqli_query($connect,$query);

  if(mysqli_num_rows($resul) && mysqli_affected_rows($connect) > 0) {

  	$key = mysqli_fetch_assoc($resul);

?>
  
     <div class="hisdata">


				<?php
                        echo "UserName : " .$key['username'] . "<br>";
					  	echo "Email : " . $key['email'] . "<br>";
					  	echo "FullNmae : " . $key['fullname'];

	
				?>

     </div>


   
<div class="edit_profile">

<h2>Edit Profile</h2>

  <div class="edit_form">


		 <form class="edit" action="<?php echo urldecode('edit_submit.php');?>" method='POST'>
   <input type="text" name="username" required autocomplete="off" placeholder="username" class="inputs" id="edit1" 
   onfocus="removeAttribute('placeholder');">	


   <input type="password" name="password" autocomplete="new-password" class="inputs" required placeholder="password" 
   onfocus="removeAttribute('placeholder');" id="edit2">

   <input type="email" name="email"  required placeholder="Email" class="inputs" id="edit3" 
   onfocus="removeAttribute('placeholder');">

    <input type="text" name="fullname" required autocomplete="off" placeholder="full name" class="inputs"
    onfocus="removeAttribute('placeholder');" id="edit4">
   <input type="submit" name="submit" value="Edit" class="submit">
		</form>
  	
  </div>






</div>

<div class="madrid">
	
	<?php 
	if(isset($_SESSION['erruser'])){ 
		echo "<q style='margin:30px; font-size: 20px;'>". $_SESSION['erruser'] ."</q>" ;
          unset($_SESSION['erruser']);

	}


 ?>
	

</div>


   <?php 

}else{

	echo "ERROR 404";
  
}

 ?>

<script>

var ed1 = document.getElementById('edit1'),
    ed2 = document.getElementById('edit2'),
    ed3 = document.getElementById('edit3'),
    ed4 = document.getElementById('edit4');


 ed1.onblur = function(){
 	if(ed1.value == ''){
   ed1.setAttribute('placeholder','username');
 	}}

 ed2.onblur = function(){
 	if(ed2.value == ''){
   ed2.setAttribute('placeholder','password');
 	}}


 	 ed3.onblur = function(){
 	if(ed3.value == ''){
   ed3.setAttribute('placeholder','Email');
 	}}


 	 ed4.onblur = function(){
 	if(ed4.value == ''){
   ed4.setAttribute('placeholder','full name');
 	}}


</script>
<style type="text/css">

	.foot{
		background: #382e2e;
		color:#FFF;
		height: 30px;
	}

	.foot p{
            padding: 6px;
    		text-align: center;
    		font-weight: bold;
	}

</style>


<div class="foot"><p>Madrid &copy; Every Thing To Real Madird! </p></div>

</body>
</html>