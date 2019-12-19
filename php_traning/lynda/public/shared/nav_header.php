<?php

require_once"../private/function.php";


$id = $_GET['id'] ?? '1';





$query = "SELECT * FROM subject WHERE visible = 1";

$result = mysqli_query($connect,$query);


if(mysqli_num_rows($result) > 0){
?>
  
    <link rel="stylesheet" type="text/css" href="stylesheet/style_public.css">
    <style type="text/css">

    	.active a{color: green}

    	.navl{
    		height: 100%;
    	}
    	
    </style>


<div class="navlli col-3">
  <ul class="list-group  pl-3 navl pt-4">

<?php







  while($key = mysqli_fetch_assoc($result)){


  	   echo "<li class='list-group mb-3 fhea'>  <a href='index.php?id=". h(urlencode($key['id'])) .
  	         "' class='nav-link'>" . h($key['menu_name']). "</a></li>";


  	$queryp = "SELECT * FROM page ";
  	$queryp.="WHERE subject_id = '{$key['id']}' AND visible = 1";
    $resultp = mysqli_query($connect,$queryp);

      if(mysqli_num_rows($resultp) > 0){
      while ($keyp = mysqli_fetch_assoc($resultp)) {


if($id == $keyp['subject_id']){

?>


<ul class='list-group  pl-3 mb-2'>

	<li class='list-group <?php if($keyp['id'] == $pageid ){echo 'active';}?>'>

	<a href="index.php?pageid=<?php echo h($keyp['id']);?>&id=<?php echo  h($id)?>">
		<?php echo h($keyp['page_name']); ?></a></li></ul>




<?php
}

      }
  }



}




?>

   </ul>

  </div>

  


<?php

}


?>







