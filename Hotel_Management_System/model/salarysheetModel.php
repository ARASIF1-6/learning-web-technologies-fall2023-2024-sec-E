<?php

    require_once('db.php');



    function updatesalary($user){
        $con = getConnection();
        $sql = "update salary set StaffSalary = '{$user[1]}' where StaffType = '{$user[0]}'";
        $result = mysqli_query($con, $sql);
        
    }

    function updatesalarysheet($user){
        $con = getConnection();
        $sql = "update salarysheet set StaffSalary = '{$user[1]}' where StaffType = '{$user[0]}'";
        $result = mysqli_query($con, $sql);
        
    }

    function deletesalarysheet($staffusername){
        $con = getConnection();
        $sql = "delete from salarysheet where StaffUserName  = '{$staffusername}'";
        $result = mysqli_query($con, $sql);
        
    }

    function getstaffsalary(){
        $con = getConnection();
        $sql = "select * from salary";
        $result = mysqli_query($con, $sql);
        $salary = [];
        
        while($staff_salary = mysqli_fetch_assoc($result)){
            array_push($salary, $staff_salary);
        }
        
        return $salary;
        
    }

    function getallstaffsalary(){
        $con = getConnection();
        $sql = "select * from salarysheet";
        $result = mysqli_query($con, $sql);
        $staffs_salary = [];
        
        while($staff_salary = mysqli_fetch_assoc($result)){
            array_push($staffs_salary, $staff_salary);
        }
        
        return $staffs_salary;
        
    }

?>
