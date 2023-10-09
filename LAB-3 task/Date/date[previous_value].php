<html lang="en">
<head>
    <title>Form Submission</title>
</head>
<body>  
        <form method="post" enctype="">
            <fieldset>
                <legend>Date of Birth</legend>
                <input type="text" name="username" value="  <?php 

           
$date = $_REQUEST['date'];
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];

if($date == "" && $month == "" && $year == ""){
    echo "null value";
}else{
echo "$date / $month / $year";
}
required /> <br>
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
        </form>
</body>
</html>