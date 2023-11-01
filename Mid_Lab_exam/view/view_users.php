<?php 
   require_once('../controller/sessionCheck.php');
   require_once('../model/userModel.php');
   $users = getAllUser();
?>



<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Users</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>USER TYPE</td>
		</tr>
		<?php   for($i=0; $i<count($users); $i++){ ?>
		    <tr>
			  <td><?=$users[$i]['Id']?></td><td><?=$users[$i]['Name']?></td><td><?=$users[$i]['UserType']?></td>
		    </tr>
		    <tr>
			 <td><?=$users[$i]['Id']?></td><td><?=$users[$i]['Name']?></td><td><?=$users[$i]['UserType']?></td>
		    </tr>
			<tr>
			 <td><?=$users[$i]['Id']?></td><td><?=$users[$i]['Name']?></td><td><?=$users[$i]['UserType']?></td>
		    </tr>
			<tr>
			 <td><?=$users[$i]['Id']?></td><td><?=$users[$i]['Name']?></td><td><?=$users[$i]['UserType']?></td>
		    </tr>
		    <tr>
			    <td colspan="3" align="right">
				   <a href="home.html">Go Home</a>
			    </td>
		    </tr>
		<?php } ?> 
	</table>			
</center>