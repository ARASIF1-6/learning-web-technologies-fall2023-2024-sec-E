<?php
    include('../model/employeeModel.php');
    include('../model/userModel.php');
    include('../controller/sessioncheck.php');
    $employees = getallemployee();

    if(isset($_REQUEST['employeeusername'])){
        $employeeusername = $_REQUEST['employeeusername'];
        if(empty($employeeusername)){
            echo "Please input username.";
        }
        else{
          $employees = employeesearch($employeeusername);
          if(!$employees){
            echo "sorry! not found";
          }
        }
    }
?>


<html lang="en">

<head>
    <title> Employee Profile </title>
    <script src="../js/search.js"></script>
</head>

<body>
    <form id="forms">
    <table border = '1' width = 100%>
        <tr>
            <th colspan = "2" align = "left">
                Portal &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Welcome Bob &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Logged in as <a href="">Bob</a>
                | <a href="../controller/logout.php">Logout</a>
            </th>
        </tr>
        <tr>
            <td width = 85%>
                <form method="post" action="../controller/EmployeeRegistration.php" enctype="" onsubmit="validRegistration()">
                    <fieldset align = "center">
                        <legend> Add Employee </legend>
                        Employer name: <input type="text" id="name" name="name" value="" />
                        Contact no: <input type="tel" id="number" name="number" value="" placeholder = "Enter Mobile Number" />
                        Username: <input type="text" id="username" name="username" value="" /> 
                        Password: <input type="password" id="password" name="password" value="" />
                        <hr>
                        <input type="submit" name="submit" value="Insert"/>
                    </fieldset>
                </form>

                    <form method="" action="" enctype="" align = "center" >
                       <input type="text" id="employeeusername" name="employeeusername" value="" placeholder = "Enter Username" />
                       <input type="button" name="Submit" value="Search" onclick="searchName()"  />
                       <input type="submit" name="Submit" value="Remove" />

                        <table border=1 align = "center" width = '80%'>
                            <tr>
                              <th>Employer Name</th>
                              <th>Contact Number</th>
                              <th>Username</th>
                              <th>Options</th>
                            </tr>
                            <?php
                            
                                 for($i=0; $i<count($employees); $i++){ ?>
                            <tr>
                              <td><?=$employees[$i]['EmployeeName']?></td>
                              <td><?=$employees[$i]['EmployeeNumber']?></td>
                              <td><?=$employees[$i]['EmployeeUserName']?></td>
                                <td>
                                    <a href='EmployeeUpdate.php?username=<?=$employees[$i]['EmployeeUserName']?>'> Update </a> |
                                    <a href='../controller/delete.php?username=<?=$employees[$i]['EmployeeUserName']?>'> Delete </a>
                                </td>
                            </tr>
                         <?php } ?>
                        </table> <br/>
                    </form>
            </td>
        </tr>
        <script src="../js/registration.js"></script>
        <tr>
            <td colspan = "2" align = "center">
                <h6>Copyright &copy 2017</h6>
            </td>
        </tr>
    </table>
    </form>
    
</body>

</html>