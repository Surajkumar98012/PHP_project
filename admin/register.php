<?php
include "db_conn.php";
if(isset($_POST['done'])){


  $number=$_POST['num'];
  $address=$_POST['address'];
  $gender=$_POST['gender'];
  $username=$_POST['uname'];


  $q="INSERT INTO `pharmacist`(`number`, `address`,`gender`,`user_name`) VALUES ('$number','$address','$gender','$username')";

  $query=mysqli_query($conn,$q);
}
?>


<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

  function validate($data){
       $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }

  $username = validate($_POST['uname']);
  $password = validate($_POST['password']);

  $re_pass = validate($_POST['re_password']);
  $name = validate($_POST['name']);

  $user_data = 'uname='. $username. '&name='. $name;


  if (empty($username)) {
    header("Location: add_pharmacist.php?error=User Name is required&$user_data");
      exit();
  }else if(empty($password)){
        header("Location:add_pharmacist.php?error=Password is required&$user_data");
      exit();
  }
  else if(empty($re_pass)){
        header("Location: add_pharmacist.php?error=Confirm Password is required&$user_data");
      exit();
  }

  else if(empty($name)){
        header("Location: add_pharmacist.php?error=Name is required&$user_data");
      exit();
  }

  else if($password !== $re_pass){
        header("Location:add_pharmacist.php?error=The confirmation password  does not match&$user_data");
      exit();
  }

  else{

    // hashing the password
        $password = md5($password);

      $sql = "SELECT * FROM pharmacy_users WHERE user_name='$username' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      header("Location: add_pharmacist.php?error=The username is taken try another&$user_data");
          exit();
    }else {
           $sql2 = "INSERT INTO pharmacy_users(user_name, password, name) VALUES('$username', '$password', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
             header("Location: add_pharmacist.php?success=All details submitted successfully");
           exit();
           }else {
              header("Location:add_pharmacist.php?error=unknown error occurred&$user_data");
            exit();
           }
    }
  }

}else{
  header("Location: add_pharmacist.php");
  exit();
}

?>
