<?php

require_once("../../../private/function.php");


if($_SERVER["REQUEST_METHOD"] == 'POST'){

 $do = $_GET['do'] ?? redirect_to("new.php");



 	  
//-------------------------------new page ---------------------------------------------


  if($do == "newPage"){

      $page_name = $_POST['page_name'];
      $page_name = checkname($page_name);
      $page_name = MRES($page_name);

   
      if($page_name == ''){
        $_SESSION['empty'] = "<div class='alert alert-danger'>SORRY THE FAILD MUST NOT BE EMPTY</div>";
        redirect_to('new.php');
        exit;
      }
  
      if(strlen($page_name) > 50 || strlen($page_name) < 3){
        $_SESSION['chars'] = "<div class='alert alert-danger'>SORRY THE NAME MUST BE LESS THAN 50 & BIGGERTHAN 3</div>";
        redirect_to('new.php');
        exit;
      }



       $subject_id = $_POST['subject_id'];
       $subject_id = (int)$subject_id;
       $subject_id = MRES($subject_id);


        if($subject_id == ''){
        $_SESSION['poserr'] = "<div class='alert alert-danger'>SORRY THE FAILD MUST NOT BE EMPTY</div>";
        redirect_to('new.php');
        exit;
      }
  
       //echo $position;

       $visible = $_POST['visible'];
       $visible = (int)$visible;
       $visible = MRES($visible);

       //echo $visible;


   $queryp = "SELECT COUNT(position) AS countp FROM page WHERE subject_id = '{$subject_id}'";
   $resultp = mysqli_query($connect,$queryp);

   if(mysqli_num_rows($resultp) > 0){
 
   $keyp = mysqli_fetch_assoc($resultp);

   $countpp = $keyp['countp'] +1;

   //echo $countpp;


   }else{
    $countpp = 1;
   }



   //echo $page_name . "<br>" . $subject_id . "<br>" . $visible . "<br>" .$countpp ;

    
      $query = "INSERT INTO page (subject_id,page_name,position,visible) ";
      $query.= "VALUE('{$subject_id}','{$page_name}','{$countpp}','{$visible}')";

      $result = mysqli_query($connect,$query);

      if($result && mysqli_affected_rows($connect) > 0){

            $_SESSION['succes'] ='
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>SUCCESS!</strong>SUCCESS TO ADD NEW SUBJECT
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';

           redirect_to('index.php');
            exit;

      }else{

            $_SESSION['errad'] ='
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>FAILDTO!</strong>FAILDTO ADD NEW SUBJECT BECAUSE THIS NAME UNIQUE
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';


             redirect_to('index.php');
             exit;

      }

mysqli_free_result($resultp);

mysqli_free_result($result);
   }  
   










//-------------------------------end new page ---------------------------------------------



//---------------------------------edit page------------------------------------------------



  if($do == "editPage"){
    

      $id = $_GET['id'] ?? redirect_to("edit.php");
      $id = (int)$id;
      $id = MRES($id);



      $page_name = $_POST['page_name'];
      $page_name = checkname($page_name);
      $page_name = MRES($page_name);

   
      if($page_name == ''){
        $_SESSION['empty'] = "<div class='alert alert-danger'>SORRY THE FAILD MUST NOT BE EMPTY</div>";
        redirect_to('new.php');
        exit;
      }
  
      if(strlen($page_name) > 50 || strlen($page_name) < 3){
        $_SESSION['chars'] = "<div class='alert alert-danger'>SORRY THE NAME MUST BE LESS THAN 50 & BIGGERTHAN 3</div>";
        redirect_to('edit.php');
        exit;
      }



       $subject_id = $_POST['subject_id'];
       $subject_id = (int)$subject_id;
       $subject_id = MRES($subject_id);


        if($subject_id == ''){
        $_SESSION['poserr'] = "<div class='alert alert-danger'>SORRY THE FAILD MUST NOT BE EMPTY</div>";
        redirect_to('new.php');
        exit;
      }
  
       //echo $position;

       $visible = $_POST['visible'];
       $visible = (int)$visible;
       $visible = MRES($visible);

       //echo $visible;





   //echo $page_name . "<br>" . $subject_id . "<br>" . $visible . "<br>" .$id ;

   


   $query = "UPDATE page SET subject_id = '{$subject_id}', page_name='{$page_name}',
                            visible = '{$visible}' WHERE id = '{$id}' LIMIT 1";

   $result = mysqli_query($connect,$query);
   
   if($result && mysqli_affected_rows($connect) > 0){

         $_SESSION['succes'] ='
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>SUCCESS!</strong>SUCCESS TO EDIT SUBJECT
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';

             redirect_to('index.php');
             exit;


   }else{

       $_SESSION['errad'] = "<div class='alert alert-danger'>FAILDTO EDIT page BECAUSE THIS NAME UNIQUE</div>";
             redirect_to('edit.php');
             exit;
   }                         
  


mysqli_free_result($result);

   }  
   






//-------------------------------end edit  page ---------------------------------------------
















}else{

  echo redirect_to("new.php");

}



?>