<?php

require_once("../../../private/function.php");

$page_title = "page";
require_once("../../shared/header_staff.php");




 ?>



	<div class="container">

<?php

    if(isset($_SESSION['errore'])){ echo $_SESSION['errore']; unset($_SESSION['errore']);}
    if(isset($_SESSION['succes'])){ echo $_SESSION['succes']; unset($_SESSION['succes']); }


?>




	<h2 class="mb-3">Page</h2>
		<a href="new.php">Create New Page</a>

		<table class="table mt-4 text-center">
			<thead class="thead-dark the">
				<tr>
					<td>ID</td>
					<td>Subject_id</td>
					<td>Page_Name</td>
					<td>Position</td>
					<td>Visible</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</thead>

<?php
  $query = "SELECT page.*,subject.menu_name FROM page ";
   $query.= "INNER JOIN subject ON page.subject_id =subject.id";
  $result = mysqli_query($connect,$query);

  if(mysqli_num_rows($result) > 0 && mysqli_affected_rows($connect) > 0){

  	while ($key = mysqli_fetch_assoc($result)){


  		

?>



				<tbody>
				<tr>
					<td><?php echo $key['id']; ?></td>
					<td><?php echo $key['menu_name']; ?></td>
					<td><?php echo $key['page_name']; ?></td>
					<td><?php echo $key['position']; ?></td>
					<td><?php echo $key['visible'] == 1 ? 'true' : 'false'; ?></td>
					
					<td>
						<button class="btn btn-success"><a style='color:#FFF;' href="show.php?id=<?php echo urlencode(h($key['id']));?>">View</a></button>
					</td>
					<td>
						<button class="btn btn-primary"><a style='color:#FFF;' href="edit.php?id=<?php echo urlencode(h($key['id']));?>">Edit</a></button>
					</td>										
					<td>
						<button class="btn btn-danger ">
							<a class='confirm' style='color:#FFF;'
						 href="deletepage.php?id=<?php echo urlencode(h($key['id'])) ;?>"
						 >Delete</a></button>
					</td>
				</tr>
			</tbody>


<?php



  	}

  }else{
  
    echo redirect_to("../index.php");
    exit;

  }



?>





		</table>
	</div>






<?php

mysqli_free_result($result);



require_once("../../shared/footer_staff.php");

 ?>
