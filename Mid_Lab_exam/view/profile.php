<?php 
   require_once('../controller/sessionCheck.php');
   require_once('../model/userModel.php');
   $user = viewprofile($_SESSION['user']);
?>


<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="2" align="CENTER">Profile</td></tr>
		<tr><td>ID</td><td><?=$user['Id']?></tr>
		<tr><td>NAME</td><td><?=$user['Name']?></td></tr>	
		<tr><td>USER TYPE</td><td><?=$user['UserType']?></td></tr>
		<tr><td colspan="2" align="right">
		<?php if($user['UserType'] == "Admin"){ ?>
		    <a href="admin_home.php">Go Home</a></td></tr>
		<?php }else{ ?> 
                <a href="user_home.php">Go Home</a></td></tr> 
		<?php } ?> 
	</table>			
</center>