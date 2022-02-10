<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>
<!DOCTYPE html>
<html>
<head>
  <title>Medicine_company</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
 body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:rgb(75,80,150);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: rgb(240,240,240);
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
  background: rgb(15,195,105);
}

.sidenav .closebtn {
  position: absolute;
  top: 0;

  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.sidenav .closebtn:hover{
  background:none;
}

#main {
  transition: margin-left .5s;
  padding-left: 2px;
  padding-top: 2px;


}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
 .fa-big{
    font-size: 55px;
    padding-left: 96px;

 }
 .dropdown-container {
  display: none;
  background-color:rgba(15,205,165,0.5);
  padding-left:32px;


}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right:54px;
  padding-top: 2px;
}
 .dropdown-btn {
  text-decoration: none;
  font-size: 18px;
  margin-top: 8px;
  color: white;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  transition: 0.3s;
}

#logout:hover{
  background: red;
}


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>












</head>
<body>

   <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <i class="fa fa-user-circle fa-big" aria-hidden="false"></i>
  <h2 style="text-align: center;color: yellow;margin-top: 4px;font-size: 1.3em;"><?php echo $_SESSION['name'];?></h2>
   <a href="../home.php"><i class="fa fa-fw fa-tachometer" aria-hidden="true"></i>  &nbsp;Dashboard</a>
 <!--  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a> -->



  <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-handshake-o"></i>&nbsp;&nbsp;Pharmacist

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
    <a href="add_pharmacist.php">Add Pharmacist</a>
    <a href="manage_pharmacist.php">Manage Pharmacist</a>

   </div>


     <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-medkit"></i>&nbsp;&nbsp;Medicine

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
    <a href="#">Medicine Company</a>
    <a href="add_medicine.php">Add Medicine</a>
    <a href="manage_medicine.php">Manage Medicine</a>
   </div>

     <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-user"></i>&nbsp;&nbsp;Suppliers

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
    <a href="add_suppliers.php">Add Suppliers</a>
    <a href="manage_suppliers.php">Manage Suppliers</a>
   </div>




     <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-bar-chart"></i>&nbsp;&nbsp;Stock

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
    <a href="stock_report.php">Stock Report</a>
   </div>



     <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-address-book"></i>&nbsp;&nbsp;Report

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
    <a href="sales_report.php">Sales Report</a>
    <a href="pharmacistsold_report.php">Pharmacist sold report</a>
   </div>


   <a id="logout" style="margin-top: 165px;" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  &nbsp;Logout</a>






   </div>


<div id="main">
  <span style="font-size:31px;cursor:pointer;color: indigo;padding-left: 21px;" onclick="openNav()">&#9776;&nbsp;&nbsp;Dashboard</span>

<br>


<div class="container-fluid" style="padding-top: 10px;">
  <div class="row">
    <div class="col-md-4">

        <div class="row">
          <div class="col-md-2">
            <img width="130%" height="76%" src="file.png">
          </div>
          <div class="col-md-10">
              <h4>Add Medicine company</h4>
              <p style="color: grey;margin-top: -10px;">Add New Medicine Company</p>
          </div>
        </div>

    </div>
  </div>
</div>

<div style="background:rgba(215,215,215,0.9);">
<br>
  <div style="background: white;margin: 20px;padding: 20px;margin-top: -1px;box-shadow: 0 15px 25px rgba(0,0,0,0.5);">
    <h4>Add Medicine Company</h4><hr>
     <form action="/action_page.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Type Company Name: <span style="color: red;font-weight: bold;">*</span></label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Medicine Company">

  </div>
    <button type="submit" class="btn btn-success">Add</button>

</form>
  </div>
  <br>

    <div style="background: white;margin: 20px;padding: 20px;margin-top: -1px;box-shadow: 0 15px 25px rgba(0,0,0,0.5);">
    <h4>Manage Medicine Company</h4><hr>



<table>
  <tr>
    <th>Medicine Company Name</th>
    <th>Actions</th>

  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
      <td> <button type="submit" class="btn btn-primary">Update</button>
          <button type="submit" class="btn btn-danger">Delete</button></td>

  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
   <td> <button type="submit" class="btn btn-primary">Update</button>
          <button type="submit" class="btn btn-danger">Delete</button></td>

  </tr>
  <tr>
    <td>Ernst Handel</td>
  <td> <button type="submit" class="btn btn-primary">Update</button>
          <button type="submit" class="btn btn-danger">Delete</button></td>

  </tr>
  <tr>
    <td>Island Trading</td>
      <td> <button type="submit" class="btn btn-primary">Update</button>
          <button type="submit" class="btn btn-danger">Delete</button></td>

  </tr>


</table>

  </div>

<br>
</div>





















</div>





























<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}


/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}




</script>

</body>
</html>

<?php
}else{
    header("Location:index.php");
    exit();
}

 ?>
