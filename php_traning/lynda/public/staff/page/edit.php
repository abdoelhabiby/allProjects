<?php

require_once("../../../private/function.php");

$page_title = "edit_page";
require_once("../../shared/header_staff.php");


$id = htmlspecialchars($_GET['id']) ?? 'x';

if($id == 'x'){

    header("location:index.php");
    exit;
} 






$id = (int)$id;
$id = mysqli_real_escape_string($connect,$id);

$query = "SELECT id,page_name,position,visible ";
$query.= "FROM page WHERE id = '{$id}'";

 $result = mysqli_query($connect,$query);

 if(mysqli_num_rows($result) > 0){
    $key = mysqli_fetch_assoc($result);
  
 }else{

    echo redirect_to("index.php");
 }





?>

<style type="text/css">
	.n_subject{

	max-width: 400px;
    margin: auto;
    padding: 5px;
}

.n_subject .form-group{
	margin-bottom: 30px;
}

.n_subject label{font-size: 19px;}
</style>

<div class="content">
  <div class="container">
  	
    <a href="index.php"> <<< Back To LIst</a>

    <h2 class="h2 mt-2">Edit Page </h2>

<?php
       if(isset($_SESSION['empty'])){ echo $_SESSION['empty']; unset($_SESSION['empty']); }
       if(isset($_SESSION['chars'])){ echo $_SESSION['chars']; unset($_SESSION['chars']); }
       if(isset($_SESSION['poserr'])){ echo $_SESSION['poserr']; unset($_SESSION['poserr']);}
      if(isset($_SESSION['errad'])){ echo $_SESSION['errad']; unset($_SESSION['errad']);}

?>

    <form method="POST" 
    action="submit.php?do=<?php echo urlencode(htmlspecialchars('editPage'))  .
                                           '&id=' . urlencode(htmlspecialchars($id));?>" 
    class="mt-5 n_subject">
    	<div class="form-group row clearfix">
	    	<label class="col-sm-4 col-form-label" for="menuName">Page Name</label>
	    	<input class="col-sm-8 form-control" type="text" name="page_name" id="menuName"
                   value="<?php echo $key['page_name']; ?>">
    	</div>

        <div class="form-group row clearfix">
            <label class="col-sm-4 col-form-label" for="subject_id">Subject_id</label>
            <select id="subject_id" class="form-control col-sm-8" name="subject_id">
      
      <?php         
               $query = "SELECT id,menu_name FROM subject";
                $result = mysqli_query($connect,$query);

               



                if(mysqli_num_rows($result) > 0){
                    while ($key = mysqli_fetch_assoc($result)) {

            

                        echo "<option class='p-2' value=". $key['id'] . ">"  . $key['menu_name'] . 
                             "</option>";
                    }

                }else{
                   echo "<option value='1' class='p-2'>1</option>";
                }

?>

                
            </select>
        </div>  

    	<div class="form-group clearfix">
    		<label class="col-sm-4 form-check-label" for="visible" style="padding-left: 0;">Visible</label>
            <input  type="hidden" name="visible" value="0">
    		<input  type="checkbox" name="visible" id="visible" value="1">
	    	
	    	
	    	
    	</div>    	 

    	<input type="submit" name="submit" value="Edit Page" class="btn btn-primary">   	

    </form>


  </div>





</div>







<?php
mysqli_free_result($result);

require_once("../../shared/footer_staff.php");

 ?>
