<html lang="en">
<head>
    <title>Form Submission</title>
</head>
<body>  
        <form method="post" enctype="">
            <fieldset>
                <legend>NAME</legend>
                <input type="text" name="username" value="<?php $username = $_REQUEST['username']; if($username == ""){ echo "null value"; }else{ echo "$username";}?>" required /> <br>
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
        </form>
</body>
</html>