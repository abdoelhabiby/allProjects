
<?php 

include 'conected-db.php'; 
include_once 'session.php';


if(!isset($_SESSION['id_user'])){

  header("location:login.php");
}







if(isset($_GET['admin'])){

	$admin_id_selected=$_GET['admin'];

}else{

	$admin_id_selected=null;
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
    
    <style>
     /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
    </style>
  </head>
  
  <body>






<div class="container">
<div class='row'>
  <div class='col-sm-2'>



</div>

<div class='col-sm-10'>
	<br>
	<br>
	<br>

<h2>Manage Admins</h2>

<br>


<!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'admins')">admins</button>
  <button class="tablinks" onclick="openCity(event, 'add admin')">add admin</button>
  <button class="tablinks" onclick="openCity(event, 'edit admin')"> Edit Admin</button>
    <button class="tablinks" onclick="openCity(event, 'delete admin')">Delete Admin</button>

</div>

<!-- Tab content -->
<div id="admins" class="tabcontent">
  <h2>Admins information</h2>
  <p>admins information according to database.</p>

<table class='table table-borderd'>
<tr>
<th>User Name </th>
<th>first Name </th>
<th>Laste Name </th>
<th>Email </th>
<th>Date </th>
</tr>
<?php 
$query="SELECT * from admins";
$result=mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
	while($keyarray=mysqli_fetch_assoc($result)){
?>


  <tr>
  	<td><?php echo htmlentities($keyarray['username']); ?> </td>
   	<td><?php echo htmlentities($keyarray['firstname']); ?> </td>
  	<td><?php echo htmlentities($keyarray['lastname']); ?> </td>
  	<td><?php echo htmlentities($keyarray['email']); ?> </td>
  	<td><?php echo htmlentities($keyarray['date']); ?> </td>

  </tr>

<?php
	}
}

?>
</table>

</div>

<div id="add admin" class="tabcontent">

<h2>'NOTICE'</h2>

  <q>The field must be entered your information and the number of characters must be<br>
  greater than 4 and less than 20(this to f&L&U.name)</q><br>
  <q>password must be greater than 7</q>
<form action='admin_submit.php' method="POST">
  <div class="form-group">
    <label >first name:</label>
    <input type="text" class="form-control" name='fname' placeholder="first name">
  </div>
  <div class="form-group">
    <label >last name:</label>
    <input type="text" class="form-control" name='lname' placeholder="last name">
  </div>

  <div class="form-group">
    <label >user name:</label>
    <input type="text" class="form-control" name='uname' placeholder="user name">
  </div>

  <div class="form-group">
    <label >password:</label>
    <input type="password" class="form-control" name='password' placeholder="password">
  </div>


   <div class="form-group">
    <label>Email address:</label>
    <input type="email" class="form-control" name="email"  placeholder="Enter email">
  </div>


  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>






</div>


			<div id="edit admin" class="tabcontent">


			<div class="container">
			<div class='row'>
			  <div class='col-sm-2'>

<?php
                $query1="SELECT * from admins";
				$result1=mysqli_query($connect,$query1);
				if(mysqli_num_rows($result) > 0){
					while($keyarray1=mysqli_fetch_assoc($result1)){

?>
<ul class="list-group">
	<li class='list-group-item list-group-item-warning'>
		<a href='admins_manage.php?admin=<?php echo mysqli_real_escape_string($connect,$keyarray1['id']); ?>'>
			<?php echo mysqli_real_escape_string($connect,$keyarray1['username']); ?>
		</a>
    </li>
</ul>

<?php
	}}	   
?>
			</div>

			<div class='col-sm-10'>



                <?php

                if($admin_id_selected){ 


                echo  " <h2>NOTICE</h2>";
                echo " <q>The field must be entered your information and the number of characters must be<br>
  greater than 4 and less than 20(this to f&L&U.name)</q><br>
  <q>password must be greater than 7</q>";


                 $_SESSION['admin_id']=$admin_id_selected;

                   $query2="SELECT * from admins WHERE id =".$admin_id_selected;
				$result2=mysqli_query($connect,$query2);
				if(mysqli_num_rows($result) > 0){
					while($keyarray2=mysqli_fetch_assoc($result2)){ ?>




                     <form action='edit_admin_submit.php' method="POST">
  <div class="form-group">
    <label >first name:</label>
    <input type="text" class="form-control" name='fname' placeholder="<?php echo $keyarray2['firstname']?>">
  </div>
  <div class="form-group">
    <label >last name:</label>
    <input type="text" class="form-control" name='lname' placeholder="<?php echo $keyarray2['lastname']?>">
  </div>

  <div class="form-group">
    <label >user name:</label>
    <input type="text" class="form-control" name='uname' placeholder="<?php echo $keyarray2['username']?>">
  </div>

  <div class="form-group">
    <label >password:</label>
    <input type="password" class="form-control" name='password' placeholder="<?php echo $keyarray2['password']?>">
  </div>


   <div class="form-group">
    <label>Email address:</label>
    <input type="email" class="form-control" name="email"  placeholder="<?php echo $keyarray2['email']?>">
  </div>


  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
					}}

                         ?>


<?php

     }

?>
		
			</div>

			</div>
			</div>
			</div>




							<div id="delete admin" class="tabcontent">
							  <h3>Delete admin</h3>
							  <p>this area to delete admin.</p>

                    
<table class='table table-borderd'>
<tr>
<th>User Name </th>
<th>first Name </th>
<th>Laste Name </th>
<th>Email </th>
<th>Date </th>
</tr>
<?php 

$query5="SELECT * from admins";
$result5=mysqli_query($connect,$query5);
if(mysqli_num_rows($result5) > 0){
  while($keyarray5=mysqli_fetch_assoc($result5)){
?>


  <tr>
    <td><?php echo htmlentities($keyarray5['username']); ?> </td>
    <td><?php echo htmlentities($keyarray5['firstname']); ?> </td>
    <td><?php echo htmlentities($keyarray5['lastname']); ?> </td>
    <td><?php echo htmlentities($keyarray5['email']); ?> </td>
    <td><?php echo htmlentities($keyarray5['date']); ?> </td>
   <td><a type='button' class='btn btn-danger' href="admin_delete.php?id=<?php 
   echo mysqli_real_escape_string($connect,$keyarray5['id']); ?>" > Delete </a> </td> 


  </tr>


<?php

  }
}

?>
</table>



							</div>



</div>

</div>
</div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script type="text/javascript">function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}</script>
  </body>
</html>
