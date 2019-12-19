<?php 

include 'conected-db.php';
include_once 'session.php';

 ?>

<?php
if(isset($_GET['menu'])){
$menu_id_selected=urlencode($_GET['menu']);
$page_id_selected=null;

}elseif(isset($_GET['page'])){
  $page_id_selected=urlencode($_GET['page']);
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
$result=mysqli_query($connect,$query);
 if(mysqli_num_rows($result) > 0 ){
 while($keyarray=mysqli_fetch_assoc($result)){
    
    $query1="SELECT * FROM pages WHERE item_name_id=".$keyarray['id'];
    $result1=mysqli_query($connect,$query1);

    if(mysqli_num_rows($result1) > 0){

      echo "<li><h4> <a style='color:white;'>". mysqli_real_escape_string($connect,$keyarray['ITEM_NAME']) ."</li></h4></a>";
    }else{ ?>


     <li><h4><a style='color:white;' href='theindex.php?menu=<?php echo $keyarray['id']; ?>'>
      <?php echo mysqli_real_escape_string($connect,$keyarray['ITEM_NAME']); ?> 
    </li></h4></a>
     <?php

    }

if(mysqli_num_rows($result1) > 0){

  while($keyarray1=mysqli_fetch_assoc($result1)){

?>
 <li><a style='color:white;' href='theindex.php?page=<?php echo $keyarray1['id']; ?>'>
  <?php echo mysqli_real_escape_string($connect,$keyarray1['page_name']); ?> </li></a>

    <?php
  } } }  }
?>


</ul>

</div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" 
    aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>        






<div class="container">
<div class='row'>
  <div class='col-sm-3'>

</div>


         <div class='col-sm-9'> <br /> 

 <table border='1' width=850>
<tr style='height: 35px; background-color:#00b7ff'>
 <td>


       <?php
           if($menu_id_selected){
/*
 echo " <table border='1' width=850>";
 echo "<tr style='height: 35px; background-color:#00b7ff'> ";
 echo " <td>";

*/
    $query="SELECT * FROM website_navbar WHERE VISIBLE =1 AND id=" .$menu_id_selected;
    $fromdata=mysqli_query($connect,$query);
    if(mysqli_num_rows($fromdata) > 0) {


    while($keyarray=mysqli_fetch_assoc($fromdata)){

      echo $keyarray['ITEM_NAME']; 



    } }


     } elseif($page_id_selected){

   $query1="SELECT * FROM pages WHERE visible =1 AND id=" .$page_id_selected;
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
echo nl2br($keyarray1['content']);
    }}}
?>
  
</td>
  </tr>

</table>

    <?php if($menu_id_selected == 1){
      echo "<br>";
      echo "<p> PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development. It was originally created by Rasmus Lerdorf in 1994;[4] the PHP reference implementation is now produced by The PHP Group.[5] PHP originally stood for Personal Home Page,[4] but it now stands for the recursive initialism PHP: Hypertext Preprocessor.[6]

PHP code may be embedded into HTML code, or it can be used in combination with various web template systems, web content management systems, and web frameworks. PHP code is usually processed by a PHP interpreter implemented as a module in the web server or as a Common Gateway Interface (CGI) executable. The web server combines the results of the interpreted and executed PHP code, which may be any type of data, including images, with the generated web page. PHP code may also be executed with a command-line interface (CLI) and can be used to implement standalone graphical applications.[7]</p>";
echo " <center><h4>fookin shelby</h4></center> ";
echo "<img width=850px src='coor.jpg'>";



    }elseif($menu_id_selected == 2){

    echo "<br>";
      echo "<p> PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development. It was originally created by Rasmus Lerdorf in 1994;[4] the PHP reference implementation is now produced by The PHP Group.[5] PHP originally stood for Personal Home Page,[4] but it now stands for the recursive initialism PHP: Hypertext Preprocessor.[6]

PHP code may be embedded into HTML code, or it can be used in combination with various web template systems, web content management systems, and web frameworks. PHP code is usually processed by a PHP interpreter implemented as a module in the web server or as a Common Gateway Interface (CGI) executable. The web server combines the results of the interpreted and executed PHP code, which may be any type of data, including images, with the generated web page. PHP code may also be executed with a command-line interface (CLI) and can be used to implement standalone graphical applications.[7]</p>";
echo " <center><h4>fookin shelby</h4></center> ";
echo "<img width=850px src='about.jpg'>";

    } ?>

 
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