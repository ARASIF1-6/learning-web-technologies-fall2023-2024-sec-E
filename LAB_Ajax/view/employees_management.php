<?php
    include('../model/employeeModel.php');
    include('../model/userModel.php');
    include('../controller/sessioncheck.php');
    $employees = getallemployee();
?>


<html lang="en">

<head>
    <title> Employee Profile </title>
    <script src="js/search.js"></script>
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
            <td width = 85%>
                <form method="post" action="../controller/EmployeeRegistration.php" enctype="">
                    <fieldset align = "center">
                        <legend> Add Employee </legend>
                        Employer name: <input type="text" name="name" value="" />
                        Company name: <input type="text" name="companyname" value="" />
                        Contact no: <input type="tel" name="number" value="" placeholder = "Enter Mobile Number" />
                        Username: <input type="text" name="username" value="" /> 
                        Password: <input type="password" name="password" value="" />
                        <hr>
                        <input type="submit" name="submit" value="Insert" />
                    </fieldset>
                </form>

                    <form method="" action="" enctype="" align = "center">
                       <input type="text" id="employeeusername" name="employeeusername" value="" placeholder = "Enter Username" />
                       <input type="submit" name="Submit" value="Search" onclick="ajax()" />
                       <input type="submit" name="Submit" value="Remove" />
                    </form>

                        <?php if(isset($_REQUEST['Submit'])){
                              $employeeusername = $_REQUEST['uname'];
                              if($_REQUEST['Submit'] == "Search"){
                                $employee = employeesearch($employeeusername);
                                if(empty($employeeusername)){
                                    echo "Please input username.";
                                }
                                else if(empty($employee['EmployeeUserName'])){
                                  echo "sorry! not found";
                                }else{ ?>
                                <table border=1 align = "center" width = '80%' id="table">
                                    <tr>
                                      <th>Employer Name</th>
                                      <th>Company Name</th>
                                      <th>Contact Number</th>
                                      <th>Username</th>
                                      <th>Option</th>
                                    </tr>
                                    <tr>
                                       <td><?=$employee['EmployeeName']?></td>
                                       <td><?=$employee['CompanyName']?></td>
                                       <td><?=$employee['EmployeeNumber']?></td>
                                       <td><?=$employee['EmployeeUserName']?></td>
                                        <td>
                                         <a href='EmployeeUpdate.php?username=<?=$employeeusername?>'> Update </a>
                                        </td>
                                    </tr> 
                                </table> <br/>
                        <?php  } ?>    
                        <?php }elseif($_REQUEST['Submit'] == "Remove"){
                                  if(empty($employeeusername)){
                                    echo "Please input username.";
                                }else{
                                    deleteemployee($employeeusername);
                                    deleteemployeeuser($employeeusername);
                                    echo "Remove successfull";
                                }
                              }
                            } ?>
                        <?php if(!isset($_REQUEST['Submit'])){ ?>
                        <table border=1 align = "center" width = '80%'>
                            <tr>
                              <th>Employer Name</th>
                              <th>Company Name</th>
                              <th>Contact Number</th>
                              <th>Username</th>
                              <th>Option</th>
                            </tr>
                            <?php  for($i=0; $i<count($employees); $i++){ ?>
                            <tr>
                              <td><?=$employees[$i]['EmployeeName']?></td>
                              <td><?=$employees[$i]['CompanyName']?></td>
                              <td><?=$employees[$i]['EmployeeNumber']?></td>
                              <td><?=$employees[$i]['EmployeeUserName']?></td>
                                <td>
                                    <a href='EmployeeUpdate.php?username=<?=$employees[$i]['EmployeeUserName']?>'> Update </a>
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