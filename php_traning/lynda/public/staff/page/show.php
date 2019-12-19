<?php

require_once("../../../private/function.php");

$page_title = "Show_Page";
require_once("../../shared/header_staff.php");



//$id = isset($_GET['page']) ? $_GET['page'] : 1;

$id = $_GET['id'] ?? '1';

$id = (int)$id;
$id = h($id);
$id = MRES($id);

 

$query = "SELECT * FROM page WHERE id = '{$id}'";

$result = mysqli_query($connect,$query);

  if(mysqli_num_rows($result) > 0){
   $key = mysqli_fetch_assoc($result);

   $querys = "SELECT menu_name FROM  subject WHERE id = '{$key['subject_id']}'";
   $results = mysqli_query($connect,$querys);

   if(mysqli_num_rows($results) > 0){
   
   $keys = mysqli_fetch_assoc($results);
   $keyss = $keys['menu_name'];

   }else{
      $keyss = $key['subject_id'];
   }


 

?>

<style type="text/css">
	span{
		font-size: 22px;
	}
</style>

	<div class="container">

		<a href="index.php"> <<< Back To LIst</a>
        <h2 class="mt-4 h1 mb-5 text-center">Page : About Global Bank </h2>

   


         		<table class="table mt-4 text-center">
			<thead class="thead-dark the">
				<tr>
					<td>ID</td>
					<td>Subject_id</td>
					<td>Menu Name</td>
					<td>Position</td>
					<td>Visible</td>
					
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo h($key['id']); ?></td>
					<td><?php echo h($keyss); ?></td>
					<td><?php echo h($key['page_name']); ?></td>
					<td><?php echo h($key['position']); ?></td>
					<td><?php echo h($key['visible'] == 1 ? 'true' : 'false'); ?></td>
					

				</tr>
			</tbody>

			<table class="table  mt-4 text-center ">
				<tr>
					<td class="bg-primary" style="color:#FFF">Content</td>
				</tr>
				<tr>
					<td><?php echo h($key['content']); ?></td>
				</tr>
			</table>


		</table>


	</div>

<?php




  }else{
  	$_SESSION['errore'] = '
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>FAILED!</strong>SORRY CANNOt SHOW THIS PAGE .
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
            	redirect_to('index.php');
  	            exit;
  }


 mysqli_free_result($results);
 
 mysqli_free_result($result);


require_once("../../shared/footer_staff.php");

 ?>