<?php

require_once("../../../private/function.php");


if($_SERVER["REQUEST_METHOD"] == 'POST'){

 $do = $_GET['do'] ?? redirect_to("index.php");



 	  
//-------------------------------new page ---------------------------------------------

  if($do == "newSubject"){

      $menu_name = $_POST['menu_name'];
      $menu_name = checkname($menu_name);
      $menu_name = MRES($menu_name);

   
      if($menu_name == ''){
        $_SESSION['empty'] = "<div class='alert alert-danger'>SORRY THE FAILD MUST NOT BE EMPTY</div>";
        redirect_to('new.php');
        exit;
      }
  
      if(strlen($menu_name) > 50 || strlen($menu_name) < 3){
        $_SESSION['chars'] = "<div class='alert alert-danger'>SORRY THE NAME MUST BE LESS THAN 50 & BIGGERTHAN 3</div>";
        redirect_to('new.php');
        exit;
      }



       $position = $_POST['position'];
       $position = (int)$position;
       $position = MRES($position);


        if($position == ''){
        $_SESSION['poserr'] = "<div class='alert alert-danger'>SORRY THE FAILD MUST NOT BE EMPTY</div>";
        redirect_to('new.php');
        exit;
      }
  
       //echo $position;

       $visible = $_POST['visible'];
       $visible = (int)$visible;
       $visible = MRES($visible);

       //echo $visible;
     

      $query = "INSERT INTO subject (menu_name,position,visible) ";
      $query.= "VALUE('{$menu_name}','{$position}','{$visible}')";

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

            $_SESSION['errad'] = "<div class='alert alert-danger'>FAILDTO ADD NEW SUBJECT BECAUSE THIS NAME UNIQUE</div>";
             redirect_to('index.php');
             exit;

      }


mysqli_free_result($result);

   }  
   





//-------------------------------end new page ---------------------------------------------




//-------------------------------edit page --------------------------------------------------




  if($do == "editSubject"){

      $id = $_GET['id'] ?? redirect_to("edit.php");
      $id = (int)$id;
      $id = MRES($id);

      $menu_name = $_POST['menu_name'];
      $menu_name = checkname($menu_name);
      $menu_name = MRES($menu_name);

   
      if($menu_name == ''){
        $_SESSION['empty'] = "<div class='alert alert-danger'>SORRY THE FAILD MUST NOT BE EMPTY</div>";
        redirect_to('new.php');
        exit;
      }
  
      if(strlen($menu_name) > 50 || strlen($menu_name) < 3){
        $_SESSION['chars'] = "<div class='alert alert-danger'>SORRY THE NAME MUST BE LESS THAN 50 & BIGGERTHAN 3</div>";
        redirect_to('new.php');
        exit;
      }



       $position = $_POST['position'];
       $position = (int)$position;
       $position = MRES($position);


        if($position == ''){
        $_SESSION['poserr'] = "<div class='alert alert-danger'>SORRY THE FAILD MUST NOT BE EMPTY</div>";
        redirect_to('new.php');
        exit;
      }
  
       //echo $position;

       $visible = $_POST['visible'];
       $visible = (int)$visible;
       $visible = MRES($visible);

       //echo $visible;

       //echo $menu_name . "<br>" . $position . "<br>" . $visible . "<br>" .$id ;

     

    $query = "UPDATE subject SET menu_name = '{$menu_name}' , position = '{$position}' ,
                      visible = '{$visible}' WHERE id = '{$id}'";

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

            $_SESSION['errad'] = "<div class='alert alert-danger'>FAILDTO EDIT SUBJECT BECAUSE THIS NAME UNIQUE</div>";
             redirect_to('index.php');
             exit;

      }


mysqli_free_result($result);



   }  
   





//-------------------------------end edit  subject ---------------------------------------------
















}else{

  echo redirect_to("new.php");

}



?>