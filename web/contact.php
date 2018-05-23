
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
 
$Name = mysqli_real_escape_string($conn, $_POST['Name']);
$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$PhoneNumber = mysqli_real_escape_string($conn, $_POST['PhoneNumber']);
$Subject = mysqli_real_escape_string($conn, $_POST['Subject']);
$varmessage = ($_POST['message']);
 
$sql = "INSERT INTO feedback (Name, Email, PhoneNumber, Subject, message) VALUES ('$Name', '$Email', '$PhoneNumber', '$Subject','$varmessage')";
 
if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>

<a href="contact1.php"><button class="button button-block" name="logout"/>Back</button></a>