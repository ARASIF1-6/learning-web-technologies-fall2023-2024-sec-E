<html lang="en">

<head>
    <title> Registration </title>
    <script src="../asset/JS/guestRegistrationCheck.js"></script>
</head>

<body>
    
    <form method="post" action="../controller/registrationCheck.php" enctype="" onsubmit="validRegistrationCheck()" >
        <fieldset>
            <legend> Registration </legend>
            Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" id="name" name="name" value=""/> <br> <br>
            Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="email" id="email" name="email" value=""/> <br> <br> 
            Mobile Number: <input type="tel" id="number" name="number" value=""/> <br> <br>
            User Type: Guest <br> <br>
            Gender: <input type="radio" id="gender" name="gender" value="Male" /> Male
                    <input type="radio" id="gender" name="gender" value="Female" /> Female
                    <input type="radio" id="gender" name="gender" value="Other" /> Other <br> <br>
            Username: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" id="username" name="username" value=""/> <br> <br>
            Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="password" id="password" name="password" value=""/> <br> <br>
            Confirm Password: <input type="password" id="confirmpassword" name="confirmpassword" value=""/> <br> <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>

</body>

</html>