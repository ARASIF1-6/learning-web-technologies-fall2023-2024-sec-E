<?php 
   require_once('../controller/sessionCheck.php');
   require_once('../model/userModel.php');
   $user = viewprofile($_SESSION['user']);
?>


<center>
	<h1>Welcome <?=$user['Name']?>!</h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.php">Change Password</a>
	<br/>
	<a href="../controller/logout.php">Logout</a>
</center>