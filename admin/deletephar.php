<?php
include 'db_conn.php';

$username=$_GET['username'];
$q="DELETE FROM `pharmacy_users` WHERE user_name='$username'";
$r="DELETE FROM `pharmacist` WHERE user_name='$username'";

mysqli_query($conn,$q);
mysqli_query($conn,$r);

header('location:manage_pharmacist.php');

?>
