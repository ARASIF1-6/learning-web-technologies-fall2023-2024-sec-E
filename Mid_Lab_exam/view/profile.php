<?php 
   require_once('../controller/sessionCheck.php');
   require_once('../model/userModel.php');
   $user = viewprofile($_SESSION['user']);
?>


<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="2" align="CENTER">Profile</td></tr>
		<tr><td>ID</td><td><?=$users['Id']?></tr>
		<tr><td>NAME</td><td><?=$users['Name']?></td></tr>	
		<tr><td>USER TYPE</td><td><?=$users['UserType']?></td></tr>
		<tr><td colspan="2" align="right"><a href="admin_home.php">Go Home</a></td></tr>
	</table>			
</center>