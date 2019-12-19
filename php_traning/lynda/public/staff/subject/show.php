<?php

require_once("../../../private/function.php");

require_once("../../shared/header_staff.php");

$page_title = "Show_Subject";


//$id = isset($_GET['page']) ? $_GET['page'] : 1;

$id = $_GET['id'] ?? '1';

$id = (int)$id;
$id = h($id);
$id = MRES($id);

$query = "SELECT * FROM subject ";
$query.="WHERE id = '{$id}'";
$result = mysqli_query($connect,$query);

  if(mysqli_num_rows($result) > 0){
   $key = mysqli_fetch_assoc($result);

 

?>

<style type="text/css">
	span{
		font-size: 22px;
	}
	hr{border-top: 2px solid rgba(0,0,0,.1)}
</style>

	<div class="container">

		<a href="index.php"> <<< Back To LIst</a>
        <h2 class="mt-4 h1 mb-5 text-center">SUBJECT : About Global Bank </h2>

   


         		<table class="table mt-4 text-center">
			<thead class="thead-dark the">
				<tr>
					<td>ID</td>
					<td>Menu Name</td>
					<td>Position</td>
					<td>Visible</td>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo h($key['id']); ?></td>
					<td><?php echo h($key['menu_name']); ?></td>
					<td><?php echo h($key['position']); ?></td>
					<td><?php echo h($key['visible'] == 1 ? 'true' : 'false'); ?></td>
				</tr>
			</tbody>


		</table>


<hr />


 <!-- ----------------------show pages to this subject --------->







 <h2 class="mt-4 h2 mb-3 "> Pages </h2>

   
		<a href="../page/new.php?id=<?php echo h(u($id));?>  ">Create New Page</a>


         	<table class="table mt-4 text-center">
			<thead class="thead-dark the">
				<tr>
					<td>ID</td>
					<td>Page_Name</td>
					<td>Position</td>
					<td>Visible</td>
				</tr>
			</thead>

			
				
<?php

  $queryp = "SELECT * FROM page WHERE subject_id = '{$id}'";
  $resultp = mysqli_query($connect,$queryp);

  if(mysqli_num_rows($resultp) > 0){
   
   while($keyp = mysqli_fetch_assoc($resultp)){  ?>



             <tbody>
                <tr>
                	<td><?php echo h($keyp['id']); ?></td>
					<td><?php echo h($keyp['page_name']); ?></td>
					<td><?php echo h($keyp['position']); ?></td>
					<td><?php echo h($keyp['visible'] == 1 ? 'true' : 'false'); ?></td>
				</tr>
			</tbody>


<?php


   }

  }



?>			


		</table>















</div>

<?php

/*
 $preg = '/\A[A-Z0-9._%=-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';

  if(preg_match($preg, 'abdoelhabiby97@gmail.com') === 1){
  	echo 'yes';
  }else{
  	echo "noo";
  }

*/
   mysqli_free_result($resultp);

 
 mysqli_free_result($result);

  }else{
  	$_SESSION['errore'] = "<div class='alert alert-danger'>SORRY CAN NO SHOW THIS SUBJECT</div>";
  	redirect_to('index.php');
  	exit;
  }

require_once("../../shared/footer_staff.php");

 ?>