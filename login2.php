<?php
session_start();
include "db_conn.php";

if (isset ($_POST['uname']) && isset($_POST['uname'])){
   function validate($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;

   }
   $username=validate($_POST['uname']);
   $password=validate($_POST['password']);

  if (empty($username)) {
    header("Location:index.php?error=User name is required");
  exit();
  }elseif (empty($password)) {
    header("Location:index.php?error=Password is required");
  exit();
}else{

   // hashing the password
        $password = md5($password);

  $sql = "SELECT *FROM pharmacy_users WHERE user_name='$username'AND password='$password'";
  $result =mysqli_query($conn,$sql);

if (mysqli_num_rows($result)===1) {
  $row=mysqli_fetch_assoc($result);

  if ($row['user_name']===$username && $row['password']===$password) {

    $_SESSION['user_name']=$row['user_name'];
    $_SESSION['name']=$row['name'];
    $_SESSION['id']=$row['id'];
     header("Location:home2.php");
  exit();

  }else{
    header("Location:index.php?error=Incorrect Username or Password");
  exit();
}
}else{
    header("Location:index.php?error=Incorrect Username or Password");
  exit();
}

  }


}
else{
  header("Location:index.php");
  exit();
}

?>
