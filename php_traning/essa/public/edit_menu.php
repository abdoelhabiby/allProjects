<?php
include 'conected-db.php'; 
include_once 'session.php';
include_once 'function.php';

if(!isset($_SESSION['id_user'])){

  header("location:login.php");
}



?>

<?php
if(isset($_GET['menu'])){
$menu_id_selected=$_GET['menu'];
$page_id_selected=null;

}elseif(isset($_GET['page'])){
  $page_id_selected=$_GET['page'];
  $menu_id_selected=null;
}else{
   $page_id_selected=null;
  $menu_id_selected=null;
}

?>



<!doctype html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.min.css" >
  </head>

<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">

      <ul style="list-style-type:none;">
<li> <a  style="color:white;" href='#'><h4> CMS </h4></a> </li>

   <?php
$query="SELECT * FROM website_navbar WHERE VISIBLE =1";
$fromdata=mysqli_query($connect,$query);
if(mysqli_num_rows($fromdata) > 0) {
while($keyarray=mysqli_fetch_assoc($fromdata)){
   ?>

<li> <a  style="color:white;" href="manage-content.php?menu=<?php echo $keyarray['id'];?>">
 <h4><?php echo $keyarray['ITEM_NAME']; ?>  </h4></a></li>

<?php
      $query1="SELECT * FROM pages WHERE visible=1 AND `pages`. `item_name_id`= ".$keyarray['id'];
      $fromdata1= mysqli_query($connect,$query1);
      if(mysqli_num_rows($fromdata1) > 0) {
      while($keyarray1=mysqli_fetch_assoc($fromdata1)){

?>
    <li> <a  style="color:white;" href="manage-content.php?page=<?php echo $keyarray1['id']; ?>">
     <?php echo $keyarray1['page_name']; ?>  </a></li>
<?php }} ?>
<?php }} ?>

</ul>

</div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>        



<!-- colaps -->






<div class="container">
<div class='row'>
  <div class='col-sm-3'>



<div class="accordion" id="accordionExample">

       <?php
    $query="SELECT * FROM website_navbar";
    $fromdata=mysqli_query($connect,$query);
    if(mysqli_num_rows($fromdata) > 0) {
    while($keyarray=mysqli_fetch_assoc($fromdata)){
?>

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $keyarray['id'];?>" aria-expanded="true" aria-controls="collapseOne">
          <?php echo mysqli_real_escape_string($connect,$keyarray['ITEM_NAME']) ."-"
           . mysqli_real_escape_string($connect,$keyarray['id']); ?>
        </button>
      </h5>
    </div>

    <div id="collapseOne<?php echo $keyarray['id'];?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">


       <a href="edit_menu.php?menu=<?php echo mysqli_real_escape_string($connect ,$keyarray['id']);?>"> 
        <h6><?php echo mysqli_real_escape_string($connect,$keyarray['ITEM_NAME']); ?> </h6></a>


              <?php
    $query1="SELECT * FROM pages WHERE `pages`. `item_name_id`= ".$keyarray['id'];
    $fromdata1= mysqli_query($connect,$query1);
    if(mysqli_num_rows($fromdata1) > 0) {
    while($keyarray1=mysqli_fetch_assoc($fromdata1)){
?>

    <ul style="list-style-type:none;">
     <li> <a  href="edit_menu.php?page=<?php echo $keyarray1['id']; ?>">
     <?php echo mysqli_real_escape_string($connect,$keyarray1['page_name']); ?>  </a></li>
   </ul>

<?php  } } ?>


      </div>
    </div>
  </div>

    <?php } }  mysqli_free_result($fromdata);  ?>

</div>
</div>
        <div class='col-sm-9'> <br />
   
      <?php
   echo "<h3> NOTICE </h3>" . "<q>" . 'first chose the menu or (page) then do your edit' . "</q>" . "<br>";

echo "<q>" . "The field must be entered your menu or (page) To be modified and In case of success you will be transferred to". "</q>";
echo "<br>" .
"<q>". 'page (home) and else to again (edit menu)' ."</q>";
echo "<br>";

 ?>     
 


<br />

<?php 
if($menu_id_selected)   {
	$_SESSION['id']=$menu_id_selected;

echo "<h3>Edit Menu</h3>";

 echo " <form method='POST' action='edit_menu_submit.php'> ";

$query="SELECT * FROM website_navbar WHERE id=" .$menu_id_selected;
    $fromdata=mysqli_query($connect,$query);
    if(mysqli_num_rows($fromdata) > 0) {
    while($keyarray=mysqli_fetch_assoc($fromdata)){
   echo " <div class='form-group'>";
   echo " <label for='text'>menu group: ". $keyarray{'ITEM_NAME'}. "</label>";
   echo " <input type='text' class='form-control' id='text' name='menu' placeholder=". $keyarray{'ITEM_NAME'}. '>';
   echo " </div>";

  echo "<div class='form-group'>";
	 echo "	<div class='radio'>";
		 echo "  <label for='text'>visible: </label>";
		 if( $keyarray['VISIBLE'] == 1){
		 echo "  <label><input type='radio' name='optradio' value='1' checked>yse</label>";
		 echo "  <label><input type='radio' name='optradio' value='0'>no</label>";
		}else{
				 echo "  <label><input type='radio' name='optradio' value='1' >yse</label>";
		 echo "  <label><input type='radio' name='optradio' value='0' checked>no</label>";
		}
	     echo "  </div>";
         echo "  </div>";

          echo "<div class='form-group'>";
	 echo "	<div class='RANK'>";
		 echo "  <label for='text'>RANK: ".$keyarray['RANK'] .'</label>';
     echo "  </div>";
         echo "  </div>";


           echo "    <div class='form-group'>";
    //echo " <label for='sel1'>Select list:</label>";
   echo "  <select class='form-control' id='sel1'>";

           ?>
        <?php   
    $query2="SELECT RANK FROM website_navbar";
    $fromdata2=mysqli_query($connect,$query2);
    $count_row=mysqli_num_rows($fromdata2);


 for ($i=1; $i <= $count_row+1 ; $i++) { 

?>
    <option value="<?php echo $i; ?>"> <?php echo $i; ?></option>

<?php }?>
  </select>
</div>

<?php

}
  }

?>
<?php 
  echo "<button type='submit' class='btn btn-primary' name='submit'>Submit</button>";
 echo "</form>";


}


?>

  



<?php

   if($page_id_selected)   {
  $_SESSION['id']=$page_id_selected;

echo "<h3>Edit page</h3>";

 echo " <form method='POST' action='edit_page_submit.php'> ";

$query="SELECT * FROM pages WHERE id=" .$page_id_selected;
    $fromdata=mysqli_query($connect,$query);
    if(mysqli_num_rows($fromdata) > 0) {
    while($keyarray=mysqli_fetch_assoc($fromdata)){
   echo " <div class='form-group'>";
   echo " <label for='text'>page group: ". $keyarray{'page_name'}. "</label>";
   echo " <input type='text' class='form-control' id='text' name='page' placeholder=". $keyarray{'page_name'}. '>';
   echo " </div>";


                                                //to visble
        echo "<div class='form-group'>";
         echo " <div class='radio'>";
           echo "  <label for='text'>visible: </label>";
           if( $keyarray['visible'] == 1){
           echo "  <label><input type='radio' name='optradio' value='1' checked>yse</label>";
           echo "  <label><input type='radio' name='optradio' value='0'>no</label>";
          }else{
               echo "  <label><input type='radio' name='optradio' value='1' >yse</label>";
           echo "  <label><input type='radio' name='optradio' value='0' checked>no</label>";
          }
             echo "  </div>";
               echo "  </div>";

     
                                  //to status

  echo "<div class='form-group'>";                
   echo " <div class='radio'>";
     echo "  <label for='text'>status: </label>";
     if( $keyarray['status'] == 1){
     echo "  <label><input type='radio' name='optradio1' value='1' checked>yse</label>";
     echo "  <label><input type='radio' name='optradio1' value='0'>no</label>";
    }else{
         echo "  <label><input type='radio' name='optradio1' value='1' >yse</label>";
     echo "  <label><input type='radio' name='optradio1' value='0' checked>no</label>";
    }
       echo "  </div>";
         echo "  </div>";
                             //to comment

               echo "<div class='form-group'>";
                   echo "<label for='comment'>Content: </label>";
                   echo "<textarea class='form-control' rows='5' name='content'>".$keyarray['content']."</textarea>";
                echo "</div>";


          echo "<div class='form-group'>";
   echo " <div class='RANK'>";
     echo "  <label for='text'>RANK: ".$keyarray['rank'] .'</label>';
     echo "  </div>";
         echo "  </div>";


           echo "    <div class='form-group'>";
    //echo " <label for='sel1'>Select list:</label>";
   echo "  <select class='form-control' id='sel1'>";

           ?>
        <?php   
    $query2="SELECT rank FROM pages WHERE item_name_id=".$keyarray['item_name_id'];
    $fromdata2=mysqli_query($connect,$query2);
    $count_row=mysqli_num_rows($fromdata2);


 for ($i=1; $i <= $count_row+1 ; $i++) { 

?>
    <option value="<?php echo $i; ?>"> <?php echo $i; ?></option>

<?php }?>
  </select>
</div>

<?php
   echo "<button type='submit' class='btn btn-primary' name='submit'>Submit</button>";
 echo "</form>";
?>

 <?php
/*
    echo "<div class='checkbox'>";
    $query5="SELECT id,ITEM_NAME FROM website_navbar";
    $result5=mysqli_query($connect,$query5);
    if(mysqli_num_rows($result5) > 0){
while($keyarray5=mysqli_fetch_assoc($result5)){


  if($keyarray5 == $keyarray['item_name_id']){
echo "<lable><input type='checkbox' name='checkbox' checked>";

  }else{ echo "<lable><input type='checkbox' name='checkbox' ";}

  echo " value='{$keyarray5['id']}'> {$keyarray5['ITEM_NAME']} </lable> &nbsp;&nbsp;";
  //  echo "{$keyarray5['id']} {$keyarray5['ITEM_NAME']} </lable> &nbsp;&nbsp;";

} 

    
}
*/

echo "</div>";

}
  }



?>
<?php 
  //echo "<button type='submit' class='btn btn-primary' name='submit'>Submit</button>";
 //echo "</form>";


}




?>
 
</div>

      



  </div>


 
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"  crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
     integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">  
     </script>
    <script src="static/js/bootstrap.min.js"></script>
  </body>
</html>
