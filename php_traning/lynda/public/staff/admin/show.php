<?php

require_once("../../../private/function.php");
$page_title = "Show Admin";

$id = $_GET['id'] ?? rediredt_to('index.php');


 $id = (int)$id;
 $id = h($id);
 $id = MRES($id);

require_once("../../shared/header_staff.php");
 


 $query = "SELECT * from ";
 $query.="admins";
 $result = mysqli_query($connect,$query);

  if(mysqli_num_rows($result) > 0){

  	$key = mysqli_fetch_assoc($result);

   ?>

<style type="text/css">
	span{
		font-size: 22px;
	}
</style>

<div class="content">
	<div class="container">

		<a href="index.php"> <<< Back To LIst</a>
        <h2 class="mt-4 h1 mb-5 text-center">ADMIN : <?php echo $key['username'];?> </h2>

   


         		<table class="table mt-4 text-center">
			<thead class="thead-dark the">
				<tr>
					<td>ID</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Username</td>
					<td>Email</td>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo h($key['id']); ?></td>
					<td><?php echo h($key['first_name']); ?></td>
					<td><?php echo h($key['last_name']); ?></td>
					<td><?php echo h($key['username']); ?></td>
					<td><?php echo h($key['email']); ?></td>
				</tr>
			</tbody>


		</table>


	</div>
</div>





   <?php




  }else{

   
 			$_SESSION['cantshow'] = '
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>FAILED!</strong>	SORRY CANNOT SHOW THIS ADMIN!!
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';


                  redirect_to('index.php');


  }



?>







<?php


mysqli_free_result($result);

require_once("../../shared/footer_staff.php");

 ?>

