
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
$sql2 = "SELECT * FROM appointment WHERE datepicker1='$_POST[datepicker1]' AND timepicker='$_POST[timepicker]'";
$result = $conn->query($sql2);
if($result->num_rows > 0)
{
	echo "<script>
alert('SORRY! The Time Slot have been book');
window.location.href='Booking.php';
</script>";
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
echo "<script>
alert('Confirm appointment');
window.location.href='Booking.php';
</script>";
?>

