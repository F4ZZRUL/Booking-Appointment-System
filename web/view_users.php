<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->
	

	 <!-- Bootstrap core CSS -->
  <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">
	
	
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 200px;
    }
    .table {
        margin-top: 100px;

    }
	
	
</style>

<body>

<!-- Navigation -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
          aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
		<img class="logo" src="images\Logo.png">
        <a class="navbar-brand" href="#" >Anggerik Apartment</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
		  
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="login.php">Login</a>
          </li>
          <li>
            <a href="registration.php">Registration</a>
          </li>
		    <li>
            <a href="Homesale.php">View Advertisement</a>
          </li>
		   <li>
		   <a href="chat_room.php">View Chat</a>
		  </li>
		</div> 
			</nav>
			<br>
			<br>
			<br>
			<br>


<div class="table-scrol">
    <h1 align="center">All the Users</h1>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>User Id</th>
            <th>User Name</th>
            <th>User E-mail</th>
            <th>User Pass</th>
            <th>Delete User</th>
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_users_query="select * from users";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_email=$row[2];
            $user_pass=$row[3];



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_pass;  ?></td>
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
