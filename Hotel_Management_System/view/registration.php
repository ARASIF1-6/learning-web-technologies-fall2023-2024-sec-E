<html lang="en">

<head>
    <title> Registration </title>
    <script src="form_validation_with_JS/guestRegistrationCheck.js"></script>
</head>

<body>
    
    <form method="post" action="" enctype="">
        <fieldset>
            <legend> Registration </legend>
            Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="name" value=""/> <br> <br>
            Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="email" name="email" value=""/> <br> <br> 
            Mobile Number: <input type="tel" name="number" value=""/> <br> <br>
            User Type: Guest <br> <br>
            Gender: <input type="radio" name="gender" value="Male" /> Male
                    <input type="radio" name="gender" value="Female" /> Female
                    <input type="radio" name="gender" value="Other" /> Other <br> <br>
            Username: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="username" value=""/> <br> <br>
            Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="password" name="password" value=""/> <br> <br>
            Confirm Password: <input type="password" name="confirmpassword" value=""/> <br> <hr>
            <input type="submit" name="submit" value="Submit" onclick="validGuestRegistration()"/>
        </fieldset>
    </form>

</body>

</html>