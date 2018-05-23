<?php
include 'controller.php';
$name = $position = $office = $age = $start_date = $salary = "";
$nameErr = $positionErr = $officeErr = $ageErr = $start_dateErr = $salaryErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = clean($_POST["name"]);
    }

    if (empty($_POST["position"])) {
        $positionErr = "Position is required";
    } else {
        $position = clean($_POST["position"]);
    }

    if (empty($_POST["office"])) {
        $officeErr = "office is required";
    } else {
        $office = clean($_POST["office"]);
    }

    if (empty($_POST["age"])) {
        $ageErr = "age is required";
    } else {
        $age = clean($_POST["age"]);
    }

    if (empty($_POST["start_date"])) {
        $start_dateErr = "start date is required";
    } else {
        $start_date = clean($_POST["start_date"]);
    }

    if (empty($_POST["salary"])) {
        $salaryErr = "salary date is required";
    } else {
        $salary = clean($_POST["salary"]);
    }

}

function clean($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "UPDATE tbl1 SET
name='$name',
position='$position',
office='$office',
age='$age',
start_date='$start_date',
salary='$salary'
WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>