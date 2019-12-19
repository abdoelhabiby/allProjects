<?php

/*
if($_SERVER['REQUEST_METHOD'] == 'POST'){

 $langchose = $_POST['lang'] ?? 'false';

 $valuec = $langchose;
 $expire = time() + 60 * 60 * 24 * 10;

 setcookie('mylang',$valuec,$expire);

echo "MY LANGUAGE IS: " . $_COOKIE['mylang'];

}

 $expire = time() - 3600;


 setcookie('mylang','arabic',$expire);




?>


<form method="POST" action="">

	<select name="lang">
		<?php
              foreach ($languages as $value) { ?>

               <option value="<?php echo $value; ?>" <?php if($value == $valuec){echo 'selected';}  ?>>
               	<?php echo $value; ?>
               </option>

              <?php
              }
		?>
		
	</select>

	<input type="submit" value="set you lang">
	
</form>

*/

echo phpinfo();

?>

