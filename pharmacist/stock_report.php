<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>
<!DOCTYPE html>
<html>
<head>
  <title>Stock Report</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
  background-color:#dddddd;
}
</style>



</head>
<body>

   <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <i class="fa fa-user-circle fa-big" aria-hidden="false"></i>
  <h2 style="text-align: center;color: yellow;margin-top: 4px;font-size: 1.3em;"><?php echo $_SESSION['name'];?></h2>
   <a href="../home2.php"><i class="fa fa-fw fa-tachometer" aria-hidden="true"></i>  &nbsp;Dashboard</a>
    <a class="dropdown-btn" href="inventory.php"><i class="fa fa-fw fa-th-large" aria-hidden="true"></i> &nbsp;Inventory</a>

     <a class="dropdown-btn" href="search.php" ><i class="fa fa-fw fa-search"></i>&nbsp;&nbsp;Search</a>
 <!--  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a> -->



 <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-file-text-o"></i>&nbsp;&nbsp;Invoice

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
    <a class="dropdown-link" href="invoice_search.php">Invoice search</a>
    <!-- <a class="dropdown-link" href="#">New Invoice</a> -->
   <!--  <a class="dropdown-link" href="#">Manage Invoice</a> -->
   </div>







     <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-medkit"></i>&nbsp;&nbsp;Medicine

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
<!--     <a href="#">Medicine Type</a> -->
    <a href="add_medicine.php">Add Medicine</a>
    <a href="manage_medicine.php">Manage Medicine</a>
   </div>

     <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-shopping-cart"></i>&nbsp;&nbsp;Cart

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
    <a href="cart.php">Add To Cart</a>
    <a href="manage_cart.php">Manage your Cart</a>
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

   </div>


   <a id="logout" style="margin-top:63px;" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  &nbsp;Logout</a>






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
              <h4>Stock report</h4>
              <p style="color: grey;margin-top: -10px;">Between Dates Report</p>
          </div>
        </div>

    </div>
  </div>
</div>

<div style="background:rgba(215,215,215,0.9);">
<br>
  <div style="background: white;margin: 20px;padding: 20px;margin-top: -1px;box-shadow: 0 15px 25px rgba(0,0,0,0.5);">
    <h4>Between Dates Report</h4><hr>
     <form action="" method="GET">
  <div class="form-group">
    <label for="">From Date: <span style="color: red;font-weight: bold;">*</span></label>
    <input type="date" name="from_date" class="form-control" placeholder="dd-mm-yy">

  </div>
    <div class="form-group">
    <label for="">To Date: <span style="color: red;font-weight: bold;">*</span></label>
    <input type="date" name="to_date" class="form-control"  aria-describedby="emailHelp" placeholder="dd-mm-yy">

  </div>

    <button type="submit" class="btn btn-success">Submit</button>

</form>
  </div>

<br>

<div style="background: white;margin: 20px;padding: 20px;margin-top: -1px;box-shadow: 0 15px 25px rgba(0,0,0,0.5);">
    <h4>Between Dates Report</h4><hr>

       <?php
    if(isset($_GET['from_date']) && isset($_GET['to_date'])){
      $from_date= $_GET['from_date'];
      $to_date= $_GET['to_date'];
?>
<h5 style="text-align:center;color: green;font-weight: bold;">Report From <?php echo $from_date; ?> to <?php echo $to_date; ?></h5>
<?php
}
?>

<table>
  <tr class="bg-dark text-white">
    <th>Medicine Name:</th>
    <th>Batch Number:</th>
    <th>Expiry date:</th>
    <th>Sold QTY:</th>
    <th>Price perunit:</th>
    <th>Purchase Date:</th>


  </tr>

   <?php
    include 'db_conn.php';
    if(isset($_GET['from_date']) && isset($_GET['to_date'])){

      if (strtotime($_GET['from_date'])<strtotime($_GET['to_date'])) {



      $from_date= $_GET['from_date'];
      $to_date= $_GET['to_date'];

      $q="SELECT * FROM cart WHERE date BETWEEN '$from_date' AND ' $to_date'";
      $query=mysqli_query($conn,$q);

      if(mysqli_num_rows($query)>0){
         foreach ($query as $res) {
           ?>
            <tr>
              <td><?php echo $res['medicine_name']; ?></td>
              <td><?php echo $res['batch_no']; ?></td>
              <td><?php echo $res['exp']; ?></td>
              <td><?php echo $res['quantity']; ?></td>
              <td><?php echo $res['price_perunit']; ?></td>
              <td><?php echo $res['date']; ?></td>
            </tr>
            <?php
         }
      }else{
             ?>
        <tr>
          <td colspan="6"><h5 style="text-align:center">Oops ! No result Found.</h5></td>
        </tr>
        <?php
      }
      }
      else{

        ?>
        <tr>
          <td colspan="6"><h5 style="text-align:center">From_date is greater than To_date.Please Change</h5></td>
        </tr>
        <?php
      }
    }
    ?>




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
