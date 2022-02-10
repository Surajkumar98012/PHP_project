<?php
include 'db_conn.php';

$id=$_GET['id'];
$q="DELETE FROM `medicine` WHERE id=$id";

mysqli_query($conn,$q);

header('location:manage_medicine.php');

?>
