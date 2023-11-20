<?php

    require_once('db.php');


    function addemployee($user){
        $con = getConnection();
        $sql = "insert into employeeinfo (EmployeeName, CompanyName, EmployeeNumber, EmployeeUserName) values('{$user[0]}', '{$user[1]}', '{$user[2]}', '{$user[3]}')";
        $result = mysqli_query($con, $sql);

    }

    function deleteemployee($employeeusername){
        $con = getConnection();
        $sql = "delete from employeeinfo where EmployeeUserName  = '{$employeeusername}'";
        $result = mysqli_query($con, $sql);

    }

    function updateemployee($user){
        $con = getConnection();
        $sql = "update employeeinfo set EmployeeName = '{$user[0]}', CompanyName = '{$user[1]}', EmployeeNumber = '{$user[2]}' where EmployeeUserName  = '{$user[3]}'";
        $result = mysqli_query($con, $sql);
        
    }

    function employeesearch($searchemployee){
        $con = getConnection();
        $sql = "select * from employeeinfo where EmployeeUserName='{$searchemployee}'";
        $result = mysqli_query($con, $sql);
        $users = mysqli_fetch_assoc($result);
                
        return $users;
    }

    function getallemployee(){
        $con = getConnection();
        $sql = "select * from employeeinfo";
        $result = mysqli_query($con, $sql);
        $employees = [];
        
        while($employee = mysqli_fetch_assoc($result)){
            array_push($employees, $employee);
        }
        
        return $employees;
        
    }

?>