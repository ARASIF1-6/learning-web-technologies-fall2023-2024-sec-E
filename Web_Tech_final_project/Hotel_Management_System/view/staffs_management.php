<?php
    include('../model/staffModel.php');
    include('../model/salarysheetModel.php');
    $staffs = getallstaff();
    $userid = AutoIdGenerate();
?>


<html lang="en">

<head>
    <title> Staff Profile </title>
</head>

<body>
    <table border = '1' width = 100%>
        <tr>
            <th colspan = "2" align = "left">
                Panama Hotel <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Portal &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Welcome Bob &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Logged in as <a href="">Bob</a>
                | <a href="../controller/logout.php">Logout</a>
            </th>
        </tr>
        <tr>
            <td>
                <?php include('admin_menu.php'); ?>
            </td>
            <td width = 85%>
                <form method="post" action="../controller/staffRegistration.php" enctype="">
                    <fieldset align = "center">
                        <legend> Add Staff </legend>
                        <input type="text" name="userid" value="<?=$userid?>" placeholder = "Enter User ID" readonly />
                        <input type="text" name="name" value="" placeholder = "Enter Name" />
                        <input type="email" name="email" value="" placeholder = "Enter Email" />
                        <input type="tel" name="number" value="" placeholder = "Enter Mobile Number" />
                        <input type="text" name="address" value="" placeholder = "Enter Address" />  <br> <br>
                        User Type:  <select name="usertype">
                                      <option value="Admin"> Admin </option>         
                                      <option value="Receptionist"> Receptionist </option>         
                                    </select> &nbsp&nbsp&nbsp
                        Gender:
                        <select name="gender">
                            <option value="Male"> Male </option>         
                            <option value="Female"> Female </option>
                            <option value="Other"> Other </option>            
                        </select>
                        <input type="text" name="username" value="" placeholder = "Enter Username" /> 
                        <input type="password" name="password" value="" placeholder = "Enter Password" />
                        <input type="password" name="confirmpassword" value="" placeholder = "Enter Confirm Password" /> <br>
                        <hr>
                        <input type="submit" name="submit" value="Insert" />
                    </fieldset>
                </form>

                    <form method="post" action="" enctype="" align = "center">
                       <input type="text" name="staffusername" value="" placeholder = "Enter Username" />
                       <input type="submit" name="Submit" value="Search" />
                       <input type="submit" name="Submit" value="Remove" />
                    </form>

                        <?php if(isset($_REQUEST['Submit'])){
                              $staffusername = $_REQUEST['staffusername'];
                              if($_REQUEST['Submit'] == "Search"){
                                $staff = staffsearch($staffusername);
                                if(empty($staffusername)){
                                    echo "Please input username.";
                                }
                                else if(empty($staff['StaffUserName'])){
                                  echo "sorry! not found";
                                }else{ ?>
                                <table border=1 align = "center" width = '80%'>
                                    <tr>
                                      <th>Id</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Mobile Number</th>
                                      <th>Gender</th>
                                      <th>Username</th>
                                      <th>Position</th>
                                      <th>Address</th>
                                      <th>Option</th>
                                    </tr>
                                    <tr>
                                       <td><?=$staff['StaffId']?></td>
                                       <td><?=$staff['StaffName']?></td>
                                       <td><?=$staff['StaffEmail']?></td>
                                       <td><?=$staff['StaffNumber']?></td>
                                       <td><?=$staff['Gender']?></td>
                                       <td><?=$staff['StaffUserName']?></td>
                                       <td><?=$staff['StaffType']?></td>
                                       <td><?=$staff['StaffAddress']?></td>
                                        <td>
                                         <a href='staffUpdate.php?username=<?=$staffusername?>'> Update </a>
                                        </td>
                                    </tr> 
                                </table> <br/>
                        <?php  } ?>    
                        <?php }elseif($_REQUEST['Submit'] == "Remove"){
                                  if(empty($staffusername)){
                                    echo "Please input username.";
                                }else{
                                    deletestaff($staffusername);
                                    deletestaffuser($staffusername);
                                    deletesalarysheet($staffusername);
                                    echo "Remove successfull";
                                }
                              }
                            } ?>
                        <?php if(!isset($_REQUEST['Submit'])){ ?>
                        <table border=1 align = "center" width = '80%'>
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Mobile Number</th>
                              <th>Gender</th>
                              <th>Username</th>
                              <th>Position</th>
                              <th>Address</th>
                              <th>Option</th>
                            </tr>
                            <?php  for($i=0; $i<count($staffs); $i++){ ?>
                            <tr>
                              <td><?=$staffs[$i]['StaffId']?></td>
                              <td><?=$staffs[$i]['StaffName']?></td>
                              <td><?=$staffs[$i]['StaffEmail']?></td>
                              <td><?=$staffs[$i]['StaffNumber']?></td>
                              <td><?=$staffs[$i]['Gender']?></td>
                              <td><?=$staffs[$i]['StaffUserName']?></td>
                              <td><?=$staffs[$i]['StaffType']?></td>
                              <td><?=$staffs[$i]['StaffAddress']?></td>
                                <td>
                                    <a href='staffUpdate.php?username=<?=$staffs[$i]['StaffUserName']?>'> Update </a>
                                </td>
                            </tr>
                         <?php } ?>
                        </table> <br/>
                    <?php    } ?>
            </td>
        </tr>
        <tr>
            <td colspan = "2" align = "center">
                <h6>Copyright &copy 2017</h6>
            </td>
        </tr>
    </table>
    
</body>

</html>