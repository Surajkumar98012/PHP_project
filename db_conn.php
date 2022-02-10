<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "admin_db";

// Create connection
$conn = mysqli_connect($sname, $uname, $password, $db_name);
// Check connection
if (!$conn) {
  echo "connection failed";
}


?>
