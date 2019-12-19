<?php

$page_title = "Dashbord";

include 'session.php';

include 'include/all_include.php';


?>

<style>
 .container3{
 	width:1150px;
 	margin:50px auto;
 	text-align: center;
 	font-size: 20px;

 	 }

.container3 a{
text-decoration: none;
 color:#FFF;
}

 .container3 .p1,.p2,.p3{
    display: inline;
	width:21%;
	height: 90px;
	margin-right: 34.6px;
	background: #FFF;
	float:left;
	padding: 10px;
		border-radius: 10px;



 }

 .container3 .p4{
 	display: inline;
    width:21%;
    height: 90px;
	background: #FFF;
	float:left;
    padding: 10px;
    	border-radius: 10px;


 }
.container3 .p1{
	background: #e74c3c;
	color:#FFF;
}
.container3 .p2{
	background:#3498db;
	color:#FFF;
}
.container3 .p3{
	background: #8e44ad;
	color:#FFF;
}
.container3 .p4{
	background: #2c3e50;
	color:#FFF;
}

 .container3 span{
 	display: block;
 	margin-top: 12px;
 	font-size: 40px;
 }

.container4{
	width:1150px;
 	margin:20px auto;
 	text-align: center;
}

.container4 .panel1{

 width:548px;
 margin-right: 33px;
 display: inline;
 float: left;
 background:#dcd3d3;
  border: 1px solid #FFF;
  padding: 4px;

}
.container4 .panel1 i{
	float:left;
	margin-left: 3px;
}

.container4 .panel2{
 width:548px;
 display: inline;
 float: left;
 border: 1px solid #FFF;
 background:#dcd3d3;
   padding: 4px;


}
.container4 .panel2 i,.sp1{
	float:left;
	margin-left: 3px;
}

.container4 .panel1 .panbody{

 width:548px;
 margin-top:2px;

 margin-right: 33px;
 display: inline;
 float: left;
 background:#FFF;
padding-top:5px;
padding-bottom:5px;

}


.container4 .panel1 .panbody .pantes{
	float: left;
}
.container4 .panel2 .panbody{

 width:548px;
 margin-top:2px;

 margin-right: 33px;
 display: inline;
 float: left;
 background:#FFF;
padding-top:4px;
padding-bottom:4px;

}


.container4 .panel2 .panbody .pantes{
	float: left;
}
 </style>

<?php 


 ?>

 	<div class="container3">
     
     <h1>Dashboard</h1>
	    <p class="p1">
	    	Total Members<span><a href ='members.php' ><?php echo all('user'); ?></a></span>
	    </p>
        <p class="p2">
	    	Pending Members<span><a href='members.php?page'><?php echo pending(); ?></a></span>
	    </p> 
	    <p class="p3">
	    	Total Items<span>1500</span>
	    </p> 
	    <p class="p4">
	    	Total Comments<span>3500</span>
	    </p> 
	  
 	</div>
    
    <div style="clear: both;"></div>

    <div class="container4">

    	<div class="panel1">
    		<i class="fa fa-users"></i><span class="sp1">Lates Regiester Users</span><br>
    		<span class="panbody"> <i class="pantes">test</i></span>

    	
    	</div>
    	
        <div class="panel2">
    		<i class="fa fa-tag"></i> <span class="sp1">Lates Item</span><br>
    		    		<span class="panbody"> <i class="pantes">test</i></span>

    	</div>
    	
    </div>

  






<?php

include 'include/footer2.php';
?>