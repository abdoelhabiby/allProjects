<?php


require_once("../../../private/function.php");

$page_title = "subject";
require_once("../../shared/header_staff.php");


 ?>

<style type="text/css">

	button{
		width:100px;
	}
	
@media (max-width: 580px){
	 button{
		width:60px;
	}

}



</style>


	<div class="container">

<?php
    
    if(isset($_SESSION['errore'])){ echo $_SESSION['errore']; unset($_SESSION['errore']);}
    if(isset($_SESSION['succes'])){ echo $_SESSION['succes']; unset($_SESSION['succes']); }


?>

		<h2 class="mb-3">Subject</h2>
		<a href="new.php">Create New Subject</a>

		<table class="table mt-4 text-center">
			<thead class="thead-dark the">
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Count Page</td>
					<td>Position</td>
					<td>Visible</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</thead>

 <?php
  
  $query = "SELECT * FROM subject ";
  //$query.= "ORDER BY position ASC";
  $result = mysqli_query($connect,$query);

  if(mysqli_num_rows($result) > 0){
      
      while ($key = mysqli_fetch_assoc($result)) {  

   $queryp = "SELECT COUNT(subject_id) AS count_page FROM page ";
   $queryp.= "WHERE subject_id = '{$key['id']}'";
   $resultp = mysqli_query($connect,$queryp);

   if(mysqli_num_rows($resultp) > 0){
   	$keyp = mysqli_fetch_assoc($resultp);
     
     $pagecount = $keyp['count_page'];

   }else{
   	$pagecount = 0;
   }
   




      	?>




				<tbody>
				<tr>
					<td><?php echo h($key['id']); ?></td>
					<td><?php echo h($key['menu_name']); ?></td>
					<td><?php echo h($pagecount); ?></td>
					<td><?php echo h($key['position']); ?></td>
					<td><?php echo h($key['visible'] == 1 ? 'true' : 'false'); ?></td>

       
                    <td>
						<button class="btn btn-success"><a style='color:#FFF;'
						 href="show.php?id=<?php echo u(h($key['id']));?>">View</a></button>
					</td>
					<td>
						<button class="btn btn-primary"><a style='color:#FFF;' 
							href="edit.php?id=<?php echo u(h($key['id']));?>">Edit</a></button>
					</td>										
					<td>
						<button class="btn btn-danger ">
							<a class='confirm' style='color:#FFF;'
						 href="deletesubject.php?id=<?php echo u(h($key['id'])) ;?>"
						 ><i class="fa fa-close"></i>Delete</a></button>
					</td>
				</tr>
			</tbody>



	    	<?php
      	
      }

  }else{
  	echo redirect_to("../index.php");
  }


 ?>
		


		</table>
	</div>



<?php

mysqli_free_result($result);


require_once("../../shared/footer_staff.php");

 ?>
