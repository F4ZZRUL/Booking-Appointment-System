<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/24/2014
 * Time: 11:55 PM
 */
require 'db.php';
$delete_id=$_GET['del'];
$delete_query="delete from users WHERE id='$delete_id'";//delete query
$run=mysqli_query($mysqli,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('ManagePatient.php?deleted=user has been deleted','_self')</script>";
}

?>