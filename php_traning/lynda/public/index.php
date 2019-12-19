<?php 


  $pageid = $_GET['pageid'] ?? '1';
   $pageid = (int)$pageid;



require_once "shared/public_header.php";

?>


<style type="text/css">
	.col-3 a{
		color:#FFF;
	}

	.col-3  a:hover{
		color:#dc707a;
	}

	.col-9 a{
		color: #000;
	}
</style>

<div class="container row mt-4">

<?php require_once "shared/nav_header.php";  ?>




<div class="col-9">

<?php


   //if(isset($_GET['pageid']) ? $_GET['pageid'] : "1"){

     
   $strip_tags_content = '<div><img><h1><p><ul><li><br><em><strong>';

     $queryc = "SELECT content FROM page where id = '{$pageid}'";
     $resultc = mysqli_query($connect,$queryc);

     if(mysqli_num_rows($resultc) > 0){

     	$keyc = mysqli_fetch_assoc($resultc);

     	echo strip_tags($keyc['content'], $strip_tags_content);
     }

  // }





?>
</div>
</div>









<?php 

require_once("shared/public_footer.php");

?>
