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