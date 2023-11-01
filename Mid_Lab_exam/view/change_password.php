<?php 
   require_once('../controller/sessionCheck.php');
?>



<center>
	<form>
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="currentpassword" value="" /><br />
						New Password<br />
						<input type="password" name="newpassword" value="" /><br />
						Retype New Password<br />
						<input type="password" name="retypenewpassword" value="" />								
						<hr />
						<input type="button" value="Change" />     
						<a href="home.html">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>