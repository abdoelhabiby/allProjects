
<footer class="bg-primary text-center h2 p-2">
	&copy; Copy Right <?php echo Date('Y'); ?> By Me
</footer>

<style type="text/css">

</style>

<script type="text/javascript" src="../stylesheet/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="../stylesheet/bootstrap.min.js"></script>


<script type="text/javascript">

$(function(){



	 
	 $(".confirm").click(function(e){

  var tyt = confirm("Are You Shore To Delete");

  if(tyt === false){
  	e.preventDefault();
  }

	 });







	
});

</script>





</body>
</html>

<?php 




if(isset($connect)){

	mysqli_close($connect);
}

//session_unset();

ob_end_flush(); 

?>