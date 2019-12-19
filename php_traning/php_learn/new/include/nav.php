<?php
if(!isset($nonav)){
?>
<div class="nav">
      
      <div class="container">
	<div class="navleft">
	<a href="Dashbord.php"><?php echo lang('HOME ADMIN'); ?></a>
	<a href="#"><?php echo lang('CATAG'); ?></a>
	<a href="#"><?php echo lang('ITEMS'); ?></a>
	<a href="members.php"><?php echo lang('MEMBERS'); ?></a>
	<a href="#"><?php echo lang('STATIC'); ?></a>
	<a href="#"><?php echo lang('LOGS'); ?></a>

	 

      </div>

	<div class="navright">

      <i><?php echo $_SESSION['username']; ?></i>
	 <a href="<?php echo 'include/logout.php'; ?>">log out</a>
	 	 <a href="<?php echo urldecode('edit_profile.php?id=' . $_SESSION['user_id']); ?>">edit profile</a>


	</div>
      </div>
</div>

<?php } ?>