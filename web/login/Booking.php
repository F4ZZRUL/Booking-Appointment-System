<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Putra Specialist Hospital</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/slider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div id="header">
  <div class="logo">
    <a href="#">Putra<span> Specialist<span> Hospital</span></a>
  </div>
  <div class="Logout">
    <a href="logout.php" style="color: #fff"><img src="images/logout.png">  Logout</a>
  </div>
  
  
</div>


<a class="mobile">MENU</a>


<div id="container">

  <div class="sidebar">

    <ul id="nav">
      <li><a class="selected" href="home.html"><img src="images/home.png">    Dashboard</a></li>
      <li><a href="ManagePatient.php"><img src="images/medical-history.png">  Manage Patient</a> </li>
      <li><a href="Booking.php"><img src="images/question.png"> Manage Booking</a></li>
      <li><a href="feedback.php"><img src="images/chat.png"> User Feedback</a></li>
      <li><a href="http://localhost/web/chat/index.php"><img src="images/chat.png">LiveChat</a></li>
    </ul>
    
  </div>

  <div class="content">

  <div class="table-scrol">
    <h1 align="center">All the Appoinment</h1>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->

<center>
<table class="table table-striped">
        <thead>

        <tr>

            <th>User Id</th>
            <th>Patient Name</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>Age</th>
            <th>Date</th>
            <th>Department</th>
            <th>Time</th>
            <th>Gender</th>
            <th>Manage Appoinment</th>
            

        </tr>
        </thead>

        <?php
        require 'db.php';
        $view_users_query="select * from appointment";//select query for viewing users.
        $run=mysqli_query($mysqli,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_number=$row[2];
            $user_email=$row[3];
            $user_age=$row[4];
            $user_gender=$row[5];
            $user_department=$row[6];
            $user_date=$row[7];
            $user_time=$row[8];



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_number;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_age;  ?></td>
            <td><?php echo $user_gender;  ?></td>
            <td><?php echo $user_department;  ?></td>
            <td><?php echo $user_date;  ?></td>
            <td><?php echo $user_time;  ?></td>
            <td><a href="deletebooking.php?del=<?php echo $user_id ?>"><button class="btn"><i class="fa fa-trash"></i></button></a> <!--btn btn-danger is a bootstrap button to show danger-->
            <a href="#"><button class="btn"><i class="fa fa-edit"></i></button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>

    </table>
    
    <a href="#" class="previous">&laquo; Previous</a>

    <a href="#" class="previous">Next &raquo; </a>

    </center>


    </div>
</div>
</div>
</div><!-- #container -->


<script type="text/javascript">

	$(document).ready(function(){
     $("a.mobile").click(function(){
      $(".sidebar").slideToggle('fast');
     });

    window.onresize = function(event) {
      if($(window).width() > 480){
      	$(".sidebar").show();
      }
    };


	});

</script>


</body>
</html>