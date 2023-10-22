<html lang="en">
<head>
    <title> Login </title>
</head>
<body>
    <table border = "1" align = "center" width = "35%" height = "350px">
        <tr>
            <td> 
              <img src = "xcompany.png" alt = "" /> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
              <a href = "public_home.php" align = "right"> Home </a> |
              <a href = "login.php"> Login </a> |
              <a href = "registration.php"> Registration </a>
            </td>
        </tr>
        <tr>
            <td>
                <form method="post" action="loginCheck.php" enctype="">
                    <fieldset>
                        <legend>LOGIN</legend>
                        Username : <input type="text" name="username" value="" /> <br>
                        Password &nbsp: <input type="password" name="password" value="" /> <br> <hr>
                        <input type="checkbox" name="checkbox" value="" /> Remember Me <br> <br>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="forgot_password.php">Forgot Password?</a>
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
           <td align = "center"> Copyright &copy; 2017 </td>
        </tr>
    </table>
</body>
</html>