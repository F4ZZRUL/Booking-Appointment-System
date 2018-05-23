
<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "accounts";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$name = mysqli_real_escape_string($conn, $_POST['name']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$varmessage = ($_POST['message']);
 
$sql = "INSERT INTO feedback (name, lname, email, message) VALUES ('$name', '$lname', '$email', '$varmessage')";
 
if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>