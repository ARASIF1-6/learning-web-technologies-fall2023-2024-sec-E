<?php

    require_once('db.php');


    function addstaff($user){
        $con = getConnection();
        $sql = "insert into staffinfo (StaffId, StaffName, StaffEmail, StaffNumber, StaffAddress, StaffType, Gender, StaffUserName) values('{$user[0]}', '{$user[1]}', '{$user[2]}', '{$user[3]}', '{$user[4]}', '{$user[5]}', '{$user[6]}', '{$user[7]}')";
        $result = mysqli_query($con, $sql);

    }

    function addstaffuser($user){
        $con = getConnection();
        $sql = "insert into login (UserName, UserType, Password) values('{$user[7]}', '{$user[5]}', '{$user[8]}')";
        $result = mysqli_query($con, $sql);

    }

    function addsalarysheet($user){
        $con = getConnection();
        if($user[5] == "Admin"){
        $sql1 = "select * from salary where StaffType='{$user[5]}'";
        $result1 = mysqli_query($con, $sql1);
        $admin = mysqli_fetch_assoc($result1);
        $sql2 = "insert into salarysheet (StaffId, StaffName, StaffType, StaffUserName, StaffSalary) values('{$user[0]}', '{$user[1]}', '{$user[5]}', '{$user[7]}', '{$admin['StaffSalary']}')";
        $result2 = mysqli_query($con, $sql2);
        }elseif($user[5] == "Receptionist"){
         $sql3 = "select * from salary where StaffType='{$user[5]}'";
         $result3 = mysqli_query($con, $sql3);
         $receptionist = mysqli_fetch_assoc($result3);
         $sql4 = "insert into salarysheet (StaffId, StaffName, StaffType, StaffUserName, StaffSalary) values('{$user[0]}', '{$user[1]}', '{$user[5]}', '{$user[7]}', '{$receptionist['StaffSalary']}')";
         $result4 = mysqli_query($con, $sql4);
        }
    }

    function deletestaff($staffusername){
        $con = getConnection();
        $sql = "delete from staffinfo where StaffUserName  = '{$staffusername}'";
        $result = mysqli_query($con, $sql);

    }

    function deletestaffuser($staffusername){
        $con = getConnection();
        $sql = "delete from login where UserName  = '{$staffusername}'";
        $result = mysqli_query($con, $sql);

    }

    function updatestaff($user){
        $con = getConnection();
        $sql = "update staffinfo set StaffName = '{$user[0]}', StaffEmail = '{$user[1]}', StaffNumber = '{$user[2]}', StaffAddress = '{$user[3]}', Gender = '{$user[4]}' where StaffUserName  = '{$user[5]}'";
        $result = mysqli_query($con, $sql);
        
    }

    function UpdateSalaryTableInformation($user){
        $con = getConnection();
        $sql = "update salarysheet set StaffName = '{$user[0]}' where StaffUserName = '{$user[5]}'";
        $result = mysqli_query($con, $sql);
        
    }

    function staffsearch($searchstaff){
        $con = getConnection();
        $sql = "select * from staffinfo where StaffUserName='{$searchstaff}'";
        $result = mysqli_query($con, $sql);
        $users = mysqli_fetch_assoc($result);
                
        return $users;
    }

    function searchStaffUser($searchuser){
        $con = getConnection();
        $sql = "select * from login where UserName='{$searchuser}'";
        $result = mysqli_query($con, $sql);
        $users = mysqli_fetch_assoc($result);
                
        return $users;
    }

    function getallstaff(){
        $con = getConnection();
        $sql = "select * from staffinfo";
        $result = mysqli_query($con, $sql);
        $staffs = [];
        
        while($staff = mysqli_fetch_assoc($result)){
            array_push($staffs, $staff);
        }
        
        return $staffs;
        
    }

    function AutoIdGenerate(){
        $con = getConnection();
        $sql = "select * from staffinfo order by StaffId desc";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $id = $row['StaffId'];
        if($id == ""){
            
            $userid = "S-1";
            return $userid;
        }
        else{
            $userid = substr($id, 2);
            $userid = intval($userid);
            $userid = "S-" . ($userid + 1);
            return $userid;
        }
        
    }

?>