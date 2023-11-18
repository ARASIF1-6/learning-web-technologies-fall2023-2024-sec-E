<?php
    include('../model/guestModel.php');
    $guests = getallguest();
    $userid = AutoGuestIdGenerate();
?>


<html lang="en">

<head>
    <title> Guest Profile </title>
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
                <form method="post" action="../controller/guestRegistrationCheck.php" enctype="">
                    <fieldset align = "center">
                        <legend> Add Guest </legend>
                        <input type="text" name="userid" value="<?=$userid?>" placeholder = "Enter User ID" readonly />
                        <input type="text" name="name" value="" placeholder = "Enter Name" />
                        <input type="email" name="email" value="" placeholder = "Enter Email" />
                        <input type="tel" name="number" value="" placeholder = "Enter Mobile Number" />
                        User Type: Guest <br> <br>
                        Gender:
                        <select name="gender">
                            <option value="Male"> Male </option>         
                            <option value="Female"> Female </option>
                            <option value="Other"> Other </option>            
                        </select>
                        <input type="text" name="username" value="" placeholder = "Enter Username" /> 
                        <input type="password" name="password" value="" placeholder = "Enter Password" />
                        <input type="password" name="confirmpassword" value="" placeholder = "Enter Confirm Password" /> <br>
                        <hr> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="submit" name="submit" value="Insert" />
                    </fieldset>
                </form>

                    <form method="post" action="" enctype="" align = "center">
                       <input type="text" name="guestusername" value="" placeholder = "Enter Username" />
                       <input type="submit" name="Submit" value="Search" />
                       <input type="submit" name="Submit" value="Remove" />
                    </form>

                        <?php if(isset($_REQUEST['Submit'])){
                              $guestusername = $_REQUEST['guestusername'];
                              if($_REQUEST['Submit'] == "Search"){
                                $guest = guestsearch($guestusername);
                                if(empty($guestusername)){
                                    echo "Please input username.";
                                }
                                else if(empty($guest['GuestUserName'])){
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
                                      <th>Option</th>
                                    </tr>
                                    <tr>
                                       <td><?=$guest['GuestId']?></td>
                                       <td><?=$guest['GuestName']?></td>
                                       <td><?=$guest['GuestEmail']?></td>
                                       <td><?=$guest['GuestNumber']?></td>
                                       <td><?=$guest['Gender']?></td>
                                       <td><?=$guest['GuestUserName']?></td>
                                        <td>
                                         <a href='guestUpdate.php?username=<?=$guestusername?>'> Update </a>
                                        </td>
                                    </tr> 
                                </table> <br/>
                        <?php  } ?>    
                        <?php }elseif($_REQUEST['Submit'] == "Remove"){
                                 if(empty($guestusername)){
                                    echo "Please input username.";
                                }else{
                                    deleteguest($guestusername);
                                    deleteguestuser($guestusername);
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
                              <th>Option</th>
                            </tr>
                            <?php  for($i=0; $i<count($guests); $i++){ ?>
                            <tr>
                              <td><?=$guests[$i]['GuestId']?></td>
                              <td><?=$guests[$i]['GuestName']?></td>
                              <td><?=$guests[$i]['GuestEmail']?></td>
                              <td><?=$guests[$i]['GuestNumber']?></td>
                              <td><?=$guests[$i]['Gender']?></td>
                              <td><?=$guests[$i]['GuestUserName']?></td>
                                <td>
                                  <a href='guestUpdate.php?username=<?=$guests[$i]['GuestUserName']?>'> Update </a>
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