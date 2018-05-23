
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
 
$PatientName = mysqli_real_escape_string($conn, $_POST['PatientName']);
$Number = mysqli_real_escape_string($conn, $_POST['Number']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$datepicker1 = mysqli_real_escape_string($conn, $_POST['datepicker1']);
$department = mysqli_real_escape_string($conn, $_POST['department']);
$timepicker = mysqli_real_escape_string($conn, $_POST['timepicker']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
 
$sql = "INSERT INTO appointment (PatientName, Number, email, age, datepicker1, department, gender, timepicker) VALUES ('$PatientName', '$Number', '$email', '$age', '$datepicker1', '$department' , '$gender', '$timepicker')";
 
if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>

<a href="Booking.php"><button class="button button-block" name="logout"/>Back</button></a>