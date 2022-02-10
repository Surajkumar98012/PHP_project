<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pharmacy Management System</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
   body{
    margin: 0;
    padding: 0;
    height: 100vh;

  }
  li{
    color: white;
    padding: 10px;
    margin-right: 35px;
  }
  a{
    color:black;
  }
  #nav{
    color: black;

  }
  #navhead{
   background:white;
   box-shadow: 0 12px 20px rgba(0,0,0,0.5);
   opacity: 0.85;
 }
 #navbarSupportedContent>ul{
  font-size: 0.74em;
  font-weight: bolder;
}
#list{
  margin-right: 180px;
}
#nav:hover{
  color: white;
  text-decoration: none;
  background-color:rgba(75,0,130,0.85);
  border-radius: 45px;
  padding: 10px 20px;
}
.buttons{
 background-color:rgba(75,0,130,0.85);
 color: white;
 font-weight: bolder;
 padding:10px 20px;
 border-radius: 40px;
}
.buttons:hover{
  color: black;
  background: rgba(65,242,65,0.9);
  text-decoration: none;
}



.input-icons i {
  position: absolute;
}

.input-icons {
  width: 100%;

}

.icon {
  padding: 10px;
  min-width: 40px;
}

.input-field {
  width: 100%;
  padding-left: 35px;

}
.error{
  background: #f2dede;
  color:#A94442;
  padding: 10px;
  width: 100%;
  border-radius: 8px;
  margin: 20px auto;

}

.success{
  background:rgba(12,245,12,0.3);
  color:#40754C;
  padding: 10px;
  width: 100%;
  border-radius: 8px;
  margin: 20px auto;

}

</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" id="navhead">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <p style="color: indigo;font-size: 1.25em;font-weight: bolder;padding-left: 110px;padding-top: 8px;">Pharmacy.xyz</p>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul id="navbar" class="navbar-nav ">
        <li>
          <a  id="nav"  href="#about">ABOUT US<span class="sr-only">(current)</span></a>
        </li>
        <li >
          <a  data-toggle="modal" data-target="#myModal" id="nav"  href="#">ADMIN</a>
        </li>

        <li id="list" >
          <a  data-toggle="modal" data-target="#myModal2" id="nav"   href="#contact">PHARMACIST</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container">
   <div class="row" style="padding-top: 120px;">
     <div class="col-md-6" style="padding: 20px;" >
       <h1 style="font-size: 2.8em;font-weight: bolder;">Pharmacy Management System</h1>
       <p style="color: rgba(25,25,25,0.7);margin-top:20px;">This system referred as the pharmacy information system stores data, systemizes and controls the use of the medication process with the pharmacies.
       We Make this system to control the pharmacy reliably. Patients sometimes prefer to visit the pharmacy instead of a doctor for minor illnesses, and the system enables the pharmacist to prescribe over the counter drugs for these ailments</p>
       <div style="margin-top: 30px;">
         <a data-toggle="modal" data-target="#myModal" class="buttons" href="#">Admin</a>
         <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
               <h4 style="color: indigo;" class="modal-title">Welcome Admin!</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>

             <!-- Modal body -->
             <div class="modal-body">

               <form class="form" action="login.php" method="post">

                <?php
                if (isset($_GET['error'])) {?>
                 <p class="error"><?php echo $_GET['error']; ?></p>


               <?php } ?>
               <!--  <label for="email">Email:</label> -->
               <div class="input-icons">
                <i class="fa fa-user icon"></i>
                <input type="text" class="form-control input-field" placeholder="Username" name="uname">

                <br>
                <!--  <label for="pwd">Password:</label> -->
                <i class="fa fa-unlock-alt icon" aria-hidden="true"></i>
                <input type="Password" class="form-control input-field" placeholder="Password" name="password">
                <br>
              </div>


              <button type="submit" style="background: indigo;color: white;" class="btn">Sign in</button>
            </form>
          </div>


        </div>
      </div>
    </div>
    <a data-toggle="modal" data-target="#myModal2" style="margin-left: 10px;" class="buttons" href="#">Pharmacist</a>


    <div class="modal" id="myModal2">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
           <h4 style="color: indigo;" class="modal-title">Welcome Pharmacist!</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>

         <!-- Modal body -->
         <div class="modal-body">

           <form class="form" action="login2.php" method="post">



            <?php
            if (isset($_GET['error'])) {?>
             <p class="error"><?php echo $_GET['error']; ?></p>


           <?php } ?>
           <!--  <label for="email">Email:</label> -->

           <div class="input-icons">
            <i class="fa fa-user icon"></i>
            <input type="text" class="form-control input-field" placeholder="Username" name="uname">

            <br>
            <!--  <label for="pwd">Password:</label> -->
            <i class="fa fa-unlock-alt icon" aria-hidden="true"></i>
            <input type="Password" class="form-control input-field" placeholder="Password" name="password">
            <br>
          </div>

          <button type="submit" style="background: indigo;color: white;" class="btn">Sign in</button>


        </form>

      </div>

      <a data-toggle="modal" data-target="#myModal3" style="text-align: center;text-decoration: none;color: indigo;padding-bottom: 30px;" href="#">Don't have an account ? Create here</a>
    </div>
  </div>
</div>
</div>





<div class="modal" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
       <h4 style="color: indigo;" class="modal-title">Create an account</h4>
       <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>

     <!-- Modal body -->
     <div class="modal-body">

       <form class="form" action="register.php" method="post">


        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


       <!--  <label for="email">Email:</label> -->
       <div class="input-icons">

        <i class="fa fa-user icon"></i>
         <?php if (isset($_GET['name'])) { ?>
        <input type="text" class="form-control input-field" placeholder="Enter fullName" name="name" value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" class="form-control input-field" placeholder="Enter fullName" name="name"><br>
          <?php }?>


        <i class="fa fa-user icon"></i>
        <?php if (isset($_GET['uname'])) { ?>
        <input type="text" class="form-control input-field" placeholder="Email or Username " name="uname" value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" class="form-control input-field" placeholder="Email or Username " name="uname"><br>
          <?php }?>


        <!--  <label for="pwd">Password:</label> -->
        <i class="fa fa-unlock-alt icon" aria-hidden="true"></i>
        <input type="Password" class="form-control input-field" placeholder="Password" name="password">
        <br>

        <i class="fa fa-unlock-alt icon" aria-hidden="true"></i>
        <input type="Password" class="form-control input-field" placeholder="Confirm Password" name="re_password">
      </div>

      <br>
      <button type="submit" style="background: indigo;color: white;" class="btn">Sign Up</button>
    </form>
  </div>

  <a data-toggle="modal" data-target="#myModal2" style="text-align: center;text-decoration: none;color: indigo;padding-bottom: 30px;" href="#">Have an account? Sign in</a>

</div>
</div>
</div>


</div>
    <div class="col-md-6" style="padding: 20px;">
      <img class="img-fluid" src="1.png">
   </div>
</div>
</div>
</body>
</html>
