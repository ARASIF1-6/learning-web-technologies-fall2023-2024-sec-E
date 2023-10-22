<?php 
    require_once('sessionCheck.php');
?>


<html lang="en">
<head>
    <title> Change Password </title>
</head>
<body>
    <table border = "1" align = "center" width = "35%" height = "350px">
        <tr>
            <td colspan = "2"> 
              <img src = "xcompany.png" alt = "" /> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Logged in as <a href = "logged_in_dashboard.php"> Bob </a> |
              <a href = "logout.php"> Logout </a>
            </td>
        </tr>
        <tr>
            <td>
              Account <hr>
                <ul>
                  <li> <a href = "logged_in_dashboard.php"> Dashboard </a> </li>
                  <li> <a href = "view_profile.php"> View Profile </a> </li>
                  <li> <a href = "edit_profile.php"> Edit Profile </a> </li>
                  <li> <a href = "change_profile_picture.php"> Change Profile Picture </a> </li>
                  <li> <a href = "change_password.php"> Change Password </a> </li>
                  <li> <a href = "logout.php"> Logout </a> </li> 
                </ul> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </td>
            <td colspan = "1">
                <form method="post" action="" enctype="">
                    <fieldset>
                        <legend>CHANGE PASSWORD</legend>
                        Current Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="password" name="currentpassword" value="" /> <br>
                        New Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="password" name="newpassword" value="" /> <br>
                        Retype New Password: <input type="password" name="retypenewpassword" value="" /> <br> <hr>
                        <input type="submit" name="submit" value="Submit" />
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
           <td align = "center" colspan = "2"> Copyright &copy; 2017 </td>
        </tr>
    </table>
</body>
</html>