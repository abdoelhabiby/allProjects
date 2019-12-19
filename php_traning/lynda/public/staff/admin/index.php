<?php

require_once("../../../private/function.php");

$page_title = "admin";
require_once("../../shared/header_staff.php");


?>

<style type="text/css">
table a{color:#FFF;}
</style>

<div class="container">

<div class="content">

	<?php 
        if(isset($_SESSION['SUCCESS']))  { echo $_SESSION['SUCCESS'];   unset($_SESSION['SUCCESS']);} 
        if(isset($_SESSION['cantshow'])) { echo $_SESSION['cantshow'];  unset($_SESSION['cantshow']);} 
        if(isset($_SESSION['cantedit'])) { echo $_SESSION['cantedit'];  unset($_SESSION['cantedit']);} 
        if(isset($_SESSION['faileddel'])){ echo $_SESSION['faileddel']; unset($_SESSION['faileddel']);} 
        
        
  

  
	?>

	<h2 class="mb-3">Admins</h2>
		<a href="new.php">Create New Admin</a>

		<table class="table mt-4 text-center"> 
			<thead class="thead-dark the">
				<tr>
					<td>ID</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Username</td>
					<td>Email</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</thead>

		<?php
          $query = "SELECT * FROM admins";
          $result = mysqli_query($connect,$query);
          if(mysqli_num_rows($result) > 0){
          	while ($key= mysqli_fetch_assoc($result)) { ?>

          		<tbody>
          			<tr>
          				<td><?php echo h($key['id']); ?> </td>
          				<td><?php echo h($key['first_name']); ?> </td>
          				<td><?php echo h($key['last_name']); ?> </td>
          				<td><?php echo h($key['username']); ?> </td>
          				<td><?php echo h($key['email']); ?> </td>
          				<td>
          						
							<button class="btn btn-success">
							<a style='color:#FFF;' href="show.php?id=<?php echo u(h($key['id']));?>">View</a>
						    </button>
          				</td>

          				<td>
          						
							<button class="btn btn-primary">
							<a style='color:#FFF;' href="edit.php?id=<?php echo u(h($key['id']));?>">Edit</a>
						    </button>
          				</td>


          				<td>
          						
							<button class="btn btn-danger">
							<a class="confirm" style='color:#FFF;' href="delete.php?id=<?php echo u(h($key['id']));?>">Delete</a>
						    </button>
          				</td>


          			</tr>
          		</tbody>
          		

<?php
          	}
          }else{
          	//redirect_to("../index.php");
          	//exit;
          }

		?>


		</table>


</div>

</div>























<?php

mysqli_free_result($result);


require_once("../../shared/footer_staff.php");

 ?>
