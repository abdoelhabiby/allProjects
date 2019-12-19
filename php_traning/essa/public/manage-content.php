<?php 

include 'conected-db.php';
include_once 'session.php';

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

<li> <a  style="color:white;" href="manage-content.php?menu=<?php echo mysqli_real_escape_string($connect,$keyarray['id']);?>">
 <h4><?php echo $keyarray['ITEM_NAME']; ?>  </h4></a></li>

<?php
      $query1="SELECT * FROM pages WHERE visible=1 AND `pages`. `item_name_id`= ".$keyarray['id'];
      $fromdata1= mysqli_query($connect,$query1);
      if(mysqli_num_rows($fromdata1) > 0) {
      while($keyarray1=mysqli_fetch_assoc($fromdata1)){

?>
    <li> <a  style="color:white;" href="manage-content.php?page=<?php echo mysqli_real_escape_string($connect,$keyarray1['id']); ?>">
     <?php echo $keyarray1['page_name']; ?>  </a></li>
<?php }} ?>
<?php }}    ?>

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
          <?php echo mysqli_real_escape_string($connect,$keyarray['ITEM_NAME']) ."("
           . mysqli_real_escape_string($connect,$keyarray['id']) . ")"; ?>
        </button>
      </h5>
    </div>

    <div id="collapseOne<?php echo $keyarray['id'];?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">


       <a href="manage-content.php?menu=<?php echo mysqli_real_escape_string($connect ,$keyarray['id']);?>"> 
        <h6><?php echo mysqli_real_escape_string($connect,$keyarray['ITEM_NAME']); ?> </h6></a>


              <?php
    $query1="SELECT * FROM pages WHERE `pages`. `item_name_id`= ".$keyarray['id'];
    $fromdata1= mysqli_query($connect,$query1);
    if(mysqli_num_rows($fromdata1) > 0) {
    while($keyarray1=mysqli_fetch_assoc($fromdata1)){
?>

    <ul style="list-style-type:none;">
     <li> <a  href="manage-content.php?page=<?php echo $keyarray1['id']; ?>">
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

      <br /> 
    <h4> <?php 

     echo msg(); //this to if succes sign menu (session.php) ?> </h4> <br />
     


  <h3>menu and page tools</h3> <br>
  
          <a type="button" class="btn btn-danger" href="creat_menu.php">Creat new menu</a>
          <a type="button" class="btn btn-danger" href="edit_menu.php">Edit menu</a> 
          <a type="button" class="btn btn-danger" href="delete_menu.php">delet menu</a> 
          <a type="button" class="btn btn-danger" href="creat_page.php">Creat new page</a>
          <a type="button" class="btn btn-danger" href="edit_menu.php">Edit page</a> 
          <a type="button" class="btn btn-danger" href="admin.php">Admin Panel</a>
 <br />
<br>




<br />

<table border="1" width=850>
  <tr style="height: 35px; background-color:#00b7ff"> 
    <td>

       <?php
           if($menu_id_selected){

    $query="SELECT * FROM website_navbar WHERE id=" .$menu_id_selected;
    $fromdata=mysqli_query($connect,$query);
    if(mysqli_num_rows($fromdata) > 0) {
    while($keyarray=mysqli_fetch_assoc($fromdata)){
      echo $keyarray['ITEM_NAME']; } }

     } elseif($page_id_selected){

   $query1="SELECT * FROM pages WHERE id=" .$page_id_selected;
    $fromdata1= mysqli_query($connect,$query1);
    if(mysqli_num_rows($fromdata1) > 0) {
    while($keyarray1=mysqli_fetch_assoc($fromdata1)){
     echo $keyarray1['page_name'];
  
?>
    </td>
    
  </tr>
  <tr style="height: 40px;">
    <td>  
<?php 
echo $keyarray1['content'];
    }}}
?>
  
</td>
  </tr>

</table>
 
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