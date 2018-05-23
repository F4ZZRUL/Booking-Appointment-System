<?php
//session_start();
include 'include/controller.php';
$session_username = $_SESSION['user_name'];
$session_role = $_SESSION['role'];
if(empty($_SESSION['user_name'])){
    header("location:login.php");
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Putra Specialist Hospital</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <!-- Loader -->
        <link rel="stylesheet" href="css/loader.css">
        <script src="js/jquery-1.12.4.js"></script>
        <link rel="stylesheet" type="text/css" href="dashboard/vendor/font-awesome/css/font-awesome.min.css">
        <script>
            $(document).ready(function() {
                $('#example').DataTable({

                });
            });

        </script>
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/Menubar.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="css/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
            $(function() {
        var chosen=[]
var dates = $("#datepicker1").datepicker({
    minDate: "0",
    defaultDate: "+1w",
    dateFormat: 'dd/mm/yy',
    numberOfMonths: 1,
    beforeShowDay: function(date){
        var mmddyy=$.datepicker.formatDate(  'dd/mm/yy', date ),
            sameAs=$.inArray(mmddyy,chosen)
        console.log(mmddyy)
        if (sameAs>=0)
            return  [false, "nope","Same as "+(1+sameAs)]
        else
            return [true]
    },
    onSelect: function(date) {
        chosen=dates.map(function(){
            return this.value
        }).get()
        console.log(chosen)
        /*
        for(var i = 0; i < dates.length; ++i) {
            if(dates[i].id < this.id)
                $(dates[i]).datepicker('option', 'maxDate', date);
            else if(dates[i].id > this.id)
                $(dates[i]).datepicker('option', 'minDate', date);
        }
        */
    } 
    })});
        </script>

    </head>
    <bodyy onload="myFunction()" style="margin:0;">
    <div class="Fazz">

<header>
   <h1>Putra Specialist Hospital</h1>

   <div class="dropdown" style="float: right;">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><span class='glyphicon glyphicon-user' aria-hidden='true'></span> <?php echo $session_username . " ($session_role)"; ?>
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#logout" data-toggle="modal"><span class='glyphicon glyphicon-log-out' aria-hidden='true'></span> Logout</a></li>
                    
                </ul>
                
            </div><br>
</header>

            
<nav>
  <ul>
    <li><a href="http://localhost/administrator/dashboard.php" data-toggle="modal"><span class='glyphicon glyphicon-dashboard' aria-hidden='true'></span> Dashboard</a></li>
    <li><a href="http://localhost/administrator/Booking.php" data-toggle="modal"><span class='glyphicon glyphicon-calendar' aria-hidden='true'></span> Appointment</a></li>
    <li><a href="http://localhost/administrator/user_feedback.php" data-toggle="modal"><span class='glyphicon glyphicon-list-alt' aria-hidden='true'></span> User Feedback</a></li>
    <li><a href="http://localhost/administrator/user_details.php" data-toggle="modal"><span class='glyphicon glyphicon-th-list' aria-hidden='true'></span> User Details</a></li>
    <li><a href="http://localhost/web/chat/index.php" data-toggle="modal"><span class='glyphicon glyphicon-comment' aria-hidden='true'></span> Chat</a></li>
  </ul>
</nav>
<br><br>
          

<article>
<center><h2>All User Details</h2></center>
<div class="container">
<br><br>
            <table id="example" class="display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Address1</th>
                        <th>Address2</th>
                        <th>Zipcode</th>
                        <th>State</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>User Id</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Address1</th>
                        <th>Address2</th>
                        <th>Zipcode</th>
                        <th>State</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
        
        $view_users_query="select * from users1";//select query for viewing users.
        $run=mysqli_query($mysqli,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_email=$row[2];
            $user_pass=$row[3];
            $user_number=$row[7];
            $user_address1=$row[8];
            $user_address2=$row[9];
            $user_zipcode=$row[10];
            $user_state=$row[11];

        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_pass;  ?></td>
            <td><?php echo $user_number;  ?></td>
            <td><?php echo $user_address1;  ?></td>
            <td><?php echo $user_address2;  ?></td>
            <td><?php echo $user_zipcode;  ?></td>
            <td><?php echo $user_state;  ?></td>
                    <td>
                       <a href="#edit<?php echo $user_id;?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>
                        <a href="#delete<?php echo $user_id;?>" data-toggle="modal"><button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button></a>
                        </div>
                    </td>

</tr>

                    <!--In Stock/s Modal -->
                   <!-- <div id="add<?php echo $id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                          <!--  <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add Stocks</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">Item Name:</label>
                                            <div class="col-sm-3">
                                                <input type="hidden" name="add_stocks_id" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name" required readonly value="<?php echo $item_name; ?>">
                                            </div>
                                            <label class="control-label col-sm-2" for="item_code">Item Code:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="item_code" name="item_code" placeholder="Item Code" required readonly value="<?php echo $item_code; ?>">
                                            </div>
                                            <label class="control-label col-sm-1" for="item_code">DR #:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="item_code" name="dr_no" placeholder="Item Code" requiredS>
                                            </div>
                                        </div><br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">Quantity:</label>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required min="1">
                                            </div>
                                            <label class="control-label col-sm-2" for="item_name">Remarks:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks"></textarea>
                                            </div>
                                        </div>
                                        <br><br><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="add_inventory"><span class="glyphicon glyphicon-plus"></span> Add</button>
                                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
        </div>

        <!--Out Stocks Modal -->
       <!-- <div id="out<?php echo $id; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
               <!-- <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Out Stocks</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="item_name">Item Name:</label>
                                <div class="col-sm-2">
                                    <input type="hidden" name="add_stocks_id" value="<?php echo $id; ?>">
                                    <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name" required readonly value="<?php echo $item_name; ?>">
                                </div>
                                <label class="control-label col-sm-2" for="item_code">Item Code:</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="item_code" name="item_code" placeholder="Item Code" required readonly value="<?php echo $item_code; ?>">
                                </div>
                                <label class="control-label col-sm-2" for="item_code">DR no:</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="item_code" name="dr_no" placeholder="Item Code" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="item_name">Quantity:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="1" required max="<?php echo $qty; ?>" min="1">
                                </div>
                                <label class="control-label col-sm-2" for="received_by" data-toggle="tooltip" title="Unit of Measurement">Receive By:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="received_by" name="received_by" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="item_name">Remarks:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks"></textarea>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="minus_inventory"><span class="glyphicon glyphicon-plus"></span> Out</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>

        <!--View Modal -->
      <!--  <div id="view<?php echo $id; ?>" class="modal fade" role="dialog">
      <!--      <div class="modal-dialog">
                <!-- Modal content-->
              <!--  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">View</h4>
                    </div>
                    <div class="modal-body">
                        <img src="img/pd.jpg" class="img-responsive">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <div id="changepass" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <form action="" method="post">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Change Password</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Current:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="current_password" required placeholder="Current Password" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">New:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="new_password" required placeholder="New Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Repeat:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="repeat_password" required placeholder="Repeat Password">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="change_pass">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Edit Item Modal -->
        <div id="edit<?php echo $user_id; ?>" class="modal fade" role="dialog">
            <form method="post" class="form-horizontal" role="form">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Appointment</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="edit_user_id" value="<?php echo $user_id; ?>">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="firstname">Firtsname Name:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user_name; ?>" placeholder="First Name" required autofocus>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="lastname">Last Name:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user_email; ?>" placeholder="Last Name" required autofocus>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email Address:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $user_pass; ?>" placeholder="Email Address" required autofocus>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="age">Phone Number:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="number" name="number" value="<?php echo $user_number; ?>" placeholder="Phone Number" required autofocus>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Address1:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="Address1" name="Address1" value="<?php echo $user_address1; ?>" placeholder="Address1" required autofocus>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="gender">Address2:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="Address2" name="Address2" value="<?php echo $user_address2; ?>" placeholder="Address2" required autofocus>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="timepicker">Zipcode:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="Zipcode" name="Zipcode" value="<?php echo $user_zipcode; ?>" placeholder="Zipcode" required autofocus>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="department">State:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="State" name="State" value="<?php echo $user_state; ?>" placeholder="State" required autofocus>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="update_userdetails"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        </div>

        <!--Delete Modal -->
        <div id="delete<?php echo $user_id; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <form method="post">
                    <!-- Modal content-->
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete</h4>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" name="delete_id" value="<?php echo $user_id; ?>">
                            <p>
                                <div class="alert alert-danger">Are you Sure you want Delete <strong><?php echo $item_name; ?>?</strong></p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
        </tr>


        <?php
                        }
                        if(isset($_POST['change_pass'])){
                            $sql = "SELECT password FROM tbl_user WHERE username='$session_username'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if($row['password'] != $current_password){
                                        echo "<script>window.alert('Invalid Password');</script>";
                                        $passwordErr = '<div class="alert alert-warning">
                        <strong>Password!</strong> Invalid.
                        </div>';
                                    } elseif($new_password != $repeat_password) {
                                        echo "<script>window.alert('Password Not Match!');</script>";
                                        $passwordErr = '<div class="alert alert-warning">
                        <strong>Password!</strong> Not Match.
                        </div>';
                                    } else{
                                        $sql = "UPDATE tbl_user SET password='$new_password' WHERE username='$session_username'";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "<script>window.alert('Password Successfully Updated');</script>";
                                        } else {
                                            echo "Error updating record: " . $conn->error;
                                        }
                                    }    
                                }
                            } else {
                                $usernameErr = '<div class="alert alert-danger">
          <strong>Username</strong> Not Found.
          </div>';
                                $username = "";
                            }
                        }


                        //Update userdetails
                        if(isset($_POST['update_userdetails'])){
                            $edit_user_id = $_POST['edit_user_id'];
                            $user_name = $_POST['firstname'];
                            $user_email = $_POST['lastname'];
                            $user_pass = $_POST['email'];
                            $user_number = $_POST['number'];
                            $user_address1 = $_POST['Address1'];
                            $user_address2 = $_POST['Address2'];
                            $user_zipcode = $_POST['Zipcode'];
                            $user_state = $_POST['State'];
                            $sql = "UPDATE users1 SET 
                                first_name='$user_name',
                                last_name='$user_email',
                                email='$user_pass',
                                number='$user_number',
                                Address1='$user_address1',
                                Address2='$user_address2',
                                Zipcode='$user_zipcode',
                                State='$user_state'
                                WHERE id='$edit_user_id' ";
                            if ($mysqli->query($sql) === TRUE) {
                                echo '<script>window.location.href="user_details.php"</script>';
                            } else {
                                echo "Error updating record: " . $mysqli->error;
                            }
                        }


                         if(isset($_POST['delete'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];
                            $sql = "DELETE FROM appointment WHERE id='$delete_id' ";
                            if ($mysqli->query($sql) === TRUE) {
                                $sql = "DELETE FROM appointment WHERE id='$delete_id' ";
                                if ($mysqli->query($sql) === TRUE) {
                                    $sql = "DELETE FROM appointment WHERE id='$delete_id' ";
                                    echo '<script>window.location.href="Booking.php"</script>';
                                } else {
                                    echo "Error deleting record: " . $mysqli->error;
                                }
                            } else {
                                echo "Error deleting record: " . $mysqli->error;
                            }
                        }

                    //Add Item        
                    if(isset($_POST['add_appointment'])){
                        $add_user_id = $_POST['add_user_id'];
                            $user_name = $_POST['PatientName'];
                            $user_number = $_POST['Number'];
                            $user_email = $_POST['email'];
                            $user_age = $_POST['age'];
                            $user_gender = $_POST['gender'];
                            $user_department = $_POST['department'];
                            $user_date = $_POST['datepicker1'];
                            $user_time = $_POST['timepicker'];
                        $sql = "INSERT INTO appointment (PatientName, Number, email, age, datepicker1, department, gender, timepicker) VALUES ('$user_name', ' $user_number', '$user_email', '$user_age', ' $user_date', '$user_gender' , '$user_department', '$user_time')";
                        if ($mysqli->query($sql) === TRUE) {
                                echo '<script>window.location.href="Booking.php"</script>';
                            } else {
                                echo "Error updating record: " . $mysqli->error;
                            }
                        }             

?>
            </tbody>
            </table>
            </div>

            <!--Add Item Modal -->
            <div id="add" class="modal fade" role="dialog">
            
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Appoinment</h4>
                        </div>
                        <div class="modal-body">
                       
                            <form method="post" class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="PatientName">Patient Name:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="PatientName" name="PatientName" placeholder="Patient Name" autofocus required>
                                    </div>
                                    <label class="control-label col-sm-2" for="Number">Phone Number:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="Number" name="Number" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Email Address:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" autofocus required>
                                    </div>
                                    <label class="control-label col-sm-2" for="age">Age:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="age" name="age" placeholder="Age" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="datepicker1">Date:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="datepicker1" name="datepicker1" placeholder="Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" autofocus required>
                                    </div>
                                    <label class="control-label col-sm-2" for="gender">Gender:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="timepicker">Time:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="timepicker" name="timepicker" placeholder="Time" autofocus required>
                                    </div>
                                    <label class="control-label col-sm-2" for="department">Department:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="department" name="department" placeholder="Department" required>
                                    </div>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="add_appointment"><span class="glyphicon glyphicon-plus"></span> Add</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            </div>

            <!--Logout Modal -->
            <div id="logout" class="modal fade" role="dialog">
                <div class="modal-dialog modal-md">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Logout</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                            <p>
                                <div class="alert alert-danger">Are you Sure you want to logout <strong><?php echo $_SESSION['user_name']; ?>?</strong></p>
                            </div>
                            <div class="modal-footer">
                                <a href="logout.php"><button type="button" class="btn btn-danger">YES </button></a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
                </div>
                </body>

    </html>


<script type="text/javascript" src="js/wickedpicker.js"></script>
            <script type="text/javascript">
                $('.timepicker').wickedpicker({twentyFour: false});
            </script>
        <!-- Calendar -->
                <script src="js/jquery-ui.js"></script>
                  <script>
                          $(function() {
                            $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
                          });
                  </script>
            <!-- //Calendar -->