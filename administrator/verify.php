<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$username = $_POST["username"];
$password = $_POST["password"];
$flag = 'true';
//$query = $mysqli->query("SELECT username, password from users");

$result = $mysqli->query('SELECT id,username,password,name,icnumber,address,address2,zip,state,phone,email from users order by id asc');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->username === $username && $obj->password === $password) {

      $_SESSION['username'] = $username;
	  $_SESSION['name'] = $name;
      $_SESSION['icnumber'] = $obj->icnumber;
      $_SESSION['id'] = $obj->id;
      $_SESSION['address'] = $obj->address;
	  $_SESSION['address2'] = $obj->address2;
	  $_SESSION['zip'] = $obj->zip;
	  $_SESSION['state'] = $obj->state;
	  $_SESSION['phone'] = $obj->phone;
	  $_SESSION['email'] = $obj->email;
      header("location:home.php");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}

function redirect() 
{
	echo '<script language="javascript">';
	echo 'alert("Invalid username or password")';
	echo '</script>';
}


?>
