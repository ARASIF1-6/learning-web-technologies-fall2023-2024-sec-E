<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form  method="post" action="date[handler_page].php" enctype="">
        <fieldset>
            <legend> <b> Date of Birth </b> </legend>
             dd &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp mm&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp yyyy<br>
            <input type="dd" name="date" value="" required/> /
            <input type="month" name="month" value="" required/> /
            <input type="yyyy" name="year" value="" required/> <br> <br>
            <input type="submit" name="" value="Submit" />
        </fieldset>
    </form>

        <?php 

           
             $date = $_REQUEST['date'];
            $month = $_REQUEST['month'];
            $year = $_REQUEST['year'];
    
         if($date == "" && $month == "" && $year == ""){
                 echo "null value";
         }else{
            echo "$date / $month / $year";
         }

        ?>

</body>
</html>