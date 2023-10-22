<?php 
    require_once('sessionCheck.php');
?>





<html lang="en">
<head>
    <title> View Profile </title>
</head>
<body>
    <table border = "1" align = "center" width = "35%" height = "250px">
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
                </ul> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </td>
            <td colspan = "1">
                    <fieldset>
                      <legend> Profile </legend>
                      <img src = "img_profile.png" alt = "" align = "right" />
                      Name        :Bob <hr> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      <a href = "change_profile_picture.php" > Change <a> <br>
                      Email      :bob@aiub.edu <hr>
                      Gender      :Male <hr>
                      Date of Birth      :19/09/1998 <hr>
                      <a href = "edit_profile.php"> Edit Profile <a>
                    </fieldset>
            </td>
        </tr>
        <tr>
           <td align = "center" colspan = "2"> Copyright &copy; 2017 </td>
        </tr>
    </table>
</body>
</html>