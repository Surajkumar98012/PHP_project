<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>
<!DOCTYPE html>
<html>
<head>
  <title>Inventory</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
 body {
  font-family: "Lato", sans-serif;
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
  font-size: 1.0em;
  font-weight: bolder;
}
#list{
  margin-right: 180px;
}
#nav:hover{
  color: white;
  text-decoration: none;
  background-color:green;
  border-radius: 45px;
  padding: 10px 20px;
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








.parent {
    width: 100%;
    height: 300px;
    border: 2px solid #fff;
    overflow: hidden;
    position: relative;
    float: left;
    display: inline-block;
  cursor: pointer;
}
.child {
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    transition: all .5s;
}


.bg-one {background-image: url(f.jpg);}
.bg-two {background-image: url(b.jpg);}
.bg-three {background-image: url(c.jpg);}
.bg-four {background-image: url(d.jpg);}
.bg-five {background-image: url(e.jpg);}
.bg-six {background-image: url(b.jpg);}
.bg-seven {background-image: url(c.jpg);}
.bg-eight {background-image: url(d.jpg);}
.bg-nine {background-image: url(f.jpg);}
.bg-ten {background-image: url(b.jpg);}
span {
    display: none;
    font-size: 15px;
    color: #ffffff !important;
    font-family: sans-serif;
    text-align: center;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    height: 50px;
    cursor: pointer;
}
.parent:hover .child, .parent:focus .child {
    transform: scale(1.3);
}
.parent:hover .child:before, .parent:focus .child:before {
    display: block;
}
.parent:hover span, .parent:focus span {
    display: block;
}
.child:before {
    content: "";
    display: none;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(52,73,94,0.75);
}

.add{
  padding: 8px;
  color:white;
  background-color:green;
  border-radius: 25px;
  font-size: 0.7em;
}

.add:hover{
  color: black;
  text-decoration: none;
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
  <!--   <a class="dropdown-link" href="#">Manage Invoice</a> -->
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


  <nav class="navbar navbar-expand-lg navbar-light" id="navhead">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <p style="font-size:24px;cursor:pointer;color: green;padding-left: 21px;" onclick="openNav()">&#9776;&nbsp;&nbsp;Inventory</p>
   <!--  <p style="color: indigo;font-size: 1.25em;font-weight: bolder;padding-left: 110px;padding-top: 8px;">Pharmacy.xyz</p> -->

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul id="navbar" class="navbar-nav ">
        <li>
          <a  id="nav"  href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li >
          <a  data-toggle="modal" data-target="#myModal" id="nav"  href="#cat">Categories</a>
        </li>

        <li id="list" >
          <a  data-toggle="modal" data-target="#myModal2" id="nav"   href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>


<div class="container-fluid" style="margin-top: 24px;">
<div id="demo" class="carousel slide carousel-fade" data-ride="carousel" style="box-shadow: 0 0 13px; border-radius: 15px;">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
    <li data-target="#demo" data-slide-to="7"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="m.jpg" alt="image" width="100%" height="550" style="border-radius: 15px;">
      <div class="carousel-caption" style="text-align: left;line-height: 35px;color: black;">
        <p style="font-size: 72px;font-family: Calibri Light">Essential Care</p>
        <p style="font-size: 33px;font-family: Blackadder ITC">Medicice is the ascription of a property or characteristic to an animal, idea, object, person or place that provides a perceptual experience of pleasure or satisfaction things.</p>
         <a href="#" style="border:1px solid green;padding: 10px;padding-left:27px;padding-right: 27px; color:white;background-color:green;">View More</a>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
    <div class="carousel-item">
      <img src="1.jpg" alt="image" width="100%" height="550" style="border-radius: 15px;">
<!--        <div class="carousel-caption" style="text-align: left;line-height: 35px;color:black;">
        <p style="font-size: 72px;font-family: Calibri Light">Essential medicine</p>
        <p style="font-size: 33px;">Medicice is the ascription of a property or characteristic to an animal, idea, object, person or place that provides a perceptual experience of pleasure or satisfaction things.</p>
         <a href="#" style="border:1px solid green;padding: 10px;padding-left:27px;padding-right: 27px; color:white;background-color:green;">Buy Now</a>
        <br>
        <br>
        <br>
        <br>


        <br>
      </div> -->
    </div>
    <div class="carousel-item">
      <img src="2.jpg" alt="image" width="100%" height="550" style="border-radius: 15px;">
       <div class="carousel-caption" style="text-align: left;line-height: 35px;color:white;">
        <p style="font-size: 72px;font-family: Calibri Light">Essential medicine</p>
        <p style="font-size: 33px;color: white;">Medicice is the ascription of a property or characteristic to an animal, idea, object, person or place that provides a perceptual experience of pleasure or satisfaction things.</p>
         <a href="#" style="border:1px solid green;padding: 10px;padding-left:27px;padding-right: 27px; color:white;background-color:green;">View More</a>
        <br>
        <br>
        <br>
        <br>


        <br>
      </div>
    </div><div class="carousel-item">
      <img src="6.jpg" alt="image" width="100%" height="550" style="border-radius: 15px;">
<!--        <div class="carousel-caption" style="text-align: left;line-height: 35px;color:black;">
        <p style="font-size: 72px;font-family: Calibri Light">Essential medicine</p>
        <p style="font-size: 33px;">Medicice is the ascription of a property or characteristic to an animal, idea, object, person or place that provides a perceptual experience of pleasure or satisfaction things.</p>
         <a href="#" style="border:1px solid green;padding: 10px;padding-left:27px;padding-right: 27px; color:white;background-color:green;">Buy Now</a>
        <br>
        <br>
        <br>
        <br>


        <br>
      </div> -->
    </div><div class="carousel-item">
      <img src="4.jpg" alt="image" width="100%" height="550" style="border-radius: 15px;">
   <!--     <div class="carousel-caption" style="text-align: left;line-height: 35px;color:black;">
        <p style="font-size: 72px;font-family: Calibri Light">Essential medicine</p>
        <p style="font-size: 33px;">Medicice is the ascription of a property or characteristic to an animal, idea, object, person or place that provides a perceptual experience of pleasure or satisfaction things.</p>
         <a href="#" style="border:1px solid green;padding: 10px;padding-left:27px;padding-right: 27px; color:white;background-color:green;">Buy Now</a>
        <br>
        <br>
        <br>
        <br>


        <br>
      </div> -->
    </div><div class="carousel-item">
      <img src="5.jpg" alt="image" width="100%" height="550" style="border-radius: 15px;">
<!--        <div class="carousel-caption" style="text-align: left;line-height: 35px;color:black;">
        <p style="font-size: 72px;font-family: Calibri Light">Essential medicine</p>
        <p style="font-size: 33px;">Medicice is the ascription of a property or characteristic to an animal, idea, object, person or place that provides a perceptual experience of pleasure or satisfaction things.</p>
         <a href="#" style="border:1px solid green;padding: 10px;padding-left:27px;padding-right: 27px; color:white;background-color:green;">Buy Now</a>
        <br>
        <br>
        <br>
        <br>


        <br>
      </div> -->
    </div><!-- <div class="carousel-item">
      <img src="6.jpg" alt="image" width="100%" height="550" style="border-radius: 15px;"> -->
<!--        <div class="carousel-caption" style="text-align: left;line-height: 35px;color:black;">
        <p style="font-size: 72px;font-family: Calibri Light">Essential medicine</p>
        <p style="font-size: 33px;">Medicice is the ascription of a property or characteristic to an animal, idea, object, person or place that provides a perceptual experience of pleasure or satisfaction things.</p>
         <a href="#" style="border:1px solid green;padding: 10px;padding-left:27px;padding-right: 27px; color:white;background-color:green;">Buy Now</a>
        <br>
        <br>
        <br>
        <br>


        <br>
      </div> -->
   <!--  </div> -->
    <div class="carousel-item">
      <img src="7.jpg" alt="image----" width="100%" height="550" style="border-radius: 15px;">
        <div class="carousel-caption" style="text-align: left;line-height: 35px;color:black;">
        <p style="font-size: 72px;font-family: Calibri Light">Essential medicine</p>
        <p style="font-size: 33px;">Medicice is the ascription of a property or characteristic to an animal, idea, object, person or place that provides a perceptual experience of pleasure or satisfaction things.</p>
         <a href="#" style="border:1px solid green;padding: 10px;padding-left:27px;padding-right: 27px; color:white;background-color:green;">Buy Now</a>
        <br>
        <br>
        <br>
        <br>


        <br>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<br>
<br>
<h3 style="text-align:center;">Essential  Items</h3>
<br>
<div class="container">
  <div class="row">
<div class="col-md-2" style="border-top-left-radius: 30px;border-bottom-right-radius: 30px;box-shadow: 0 0 13px;margin: 15px;background-color:white;text-align: center;">
          <img src="aa.jpg" class="img-fluid" style="border-radius: 25px;">
          <br>
          <br>
          <h5 style="font-weight: bold; text-align: center;">Drop</h5>
          <h4 style="color: grey;font-weight: bolder;text-align: center;">Rm 4.25</h4>
          <a href="#" class="add">Add to cart</a>
        </div>

      <div class="col-md-2" style="border-top-left-radius: 30px;border-bottom-right-radius: 30px;box-shadow: 0 0 13px;margin: 15px;background-color:white;text-align: center;height: 250px;">
          <img src="ab.jpg" class="img-fluid" style="border-radius: 25px;">
          <br>
          <br>
          <h5 style="font-weight: bold; text-align: center;">Capsule</h5>
          <h4 style="color: grey;font-weight: bolder;text-align: center;">Rm 4.25</h4>
          <a href="#" class="add">Add to cart</a>
        </div>
        <div class="col-md-2" style="border-top-left-radius: 30px;border-bottom-right-radius: 40px;box-shadow: 0 0 13px;margin: 15px;background-color:white;text-align: center;">
          <img src="ac.jpg" class="img-fluid" style="border-radius: 25px;">
          <br>
          <br>
          <h5 style="font-weight: bold; text-align: center;">Cream</h5>
          <h4 style="color: grey;font-weight: bolder;text-align: center;">Rm 4.25</h4>
          <a href="#" class="add">Add to cart</a>

    </div>
    <div class="col-md-2" style="border-top-left-radius: 30px;border-bottom-right-radius: 40px;box-shadow: 0 0 13px;margin: 15px;background-color:white;text-align: center;">
          <img src="ad.jpg" class="img-fluid" style="border-radius: 25px;">
          <br>
          <br>
          <h5 style="font-weight: bold; text-align: center;">Vaccine</h5>
          <h4 style="color: grey;font-weight: bolder;text-align: center;">Rm 4.25</h4>
          <a href="#" class="add">Add to cart</a>

    </div>

    <div class="col-md-2" style="border-top-left-radius: 30px;border-bottom-right-radius: 40px;box-shadow: 0 0 13px;margin: 15px;background-color:white;text-align: center;">
          <img src="aa.jpg" class="img-fluid" style="border-radius: 25px;">
          <br>
          <br>
          <h5 style="font-weight: bold; text-align: center;">Drop</h5>
          <h4 style="color: grey;font-weight: bolder;text-align: center;">Rm 4.25</h4>
          <a href="#" class="add">Add to cart</a>

    </div>
  </div>



    <div class="row">
<div class="col-md-2" style="border-top-left-radius: 30px;border-bottom-right-radius: 30px;box-shadow: 0 0 13px;margin: 15px;background-color:white;text-align: center;">
          <img src="ab.jpg" class="img-fluid" style="border-radius: 25px;">
          <br>
          <br>
          <h5 style="font-weight: bold; text-align: center;">Capsule</h5>
          <h4 style="color: grey;font-weight: bolder;text-align: center;">Rm 4.25</h4>
          <a href="#"class="add">Add to cart</a>
        </div>

      <div class="col-md-2" style="border-top-left-radius: 30px;border-bottom-right-radius: 30px;box-shadow: 0 0 13px;margin: 15px;background-color:white;text-align: center;height: 250px;">
          <img src="ac.jpg" class="img-fluid" style="border-radius: 25px;">
          <br>
          <br>
          <h5 style="font-weight: bold; text-align: center;">Cream</h5>
          <h4 style="color: grey;font-weight: bolder;text-align: center;">Rm 4.25</h4>
          <a href="#" class="add">Add to cart</a>
        </div>
        <div class="col-md-2" style="border-top-left-radius: 30px;border-bottom-right-radius: 40px;box-shadow: 0 0 13px;margin: 15px;background-color:white;text-align: center;">
          <img src="ad.jpg" class="img-fluid" style="border-radius: 25px;">
          <br>
          <br>
          <h5 style="font-weight: bold; text-align: center;">Vaccine</h5>
          <h4 style="color: grey;font-weight: bolder;text-align: center;">Rm 4.25</h4>
          <a href="#" class="add">Add to cart</a>

    </div>
    <div class="col-md-2" style="border-top-left-radius: 30px;border-bottom-right-radius: 40px;box-shadow: 0 0 13px;margin: 15px;background-color:white;text-align: center;">
          <img src="aa.jpg" class="img-fluid" style="border-radius: 25px;">
          <br>
          <br>
          <h5 style="font-weight: bold; text-align: center;">Drops</h5>
          <h4 style="color: grey;font-weight: bolder;text-align: center;">Rm 4.25</h4>
          <a href="#"class="add">Add to cart</a>

    </div>

    <div class="col-md-2" style="border-top-left-radius: 30px;border-bottom-right-radius: 40px;box-shadow: 0 0 13px;margin: 15px;background-color:white;text-align: center;">
          <img src="ab.jpg" class="img-fluid" style="border-radius: 25px;">
          <br>
          <br>
          <h5 style="font-weight: bold; text-align: center;">Capsules</h5>
          <h4 style="color: grey;font-weight: bolder;text-align: center;">Rm 4.25</h4>
          <a href="#" class="add">Add to cart</a>

    </div>
  </div>
</div>
<br>

<br>
<br>

<div class="container" id="cat">
  <div class="row">
    <div class="col-md-3">

      <div class="parent" onclick="">
    <div class="child bg-one">
           <span> <p style="font-size: 20px;">SUPPLIMENTS</p>
      <a href="https://shop.wellingsco.com/collections/supplement" style="border:1px solid black;padding: 10px; color:white;background-color: black;">View More</a><span>
    </div>
  </div>

    </div>
      <div class="col-md-3">

      <div class="parent" onclick="">
    <div class="child bg-two">
           <span> <p style="font-size: 16px;">PERSONAL CARE</p>
      <a href="https://shop.wellingsco.com/collections/personal-care" style="border:1px solid black;padding: 10px; color:white;background-color: black;">View More</a><span>
    </div>
  </div>

    </div>
      <div class="col-md-3">

      <div class="parent" onclick="">
    <div class="child bg-three">
           <span> <p style="font-size: 20px;">FOOD & DRINKS</p>
      <a href="https://shop.wellingsco.com/collections/healthy-food" style="border:1px solid black;padding: 10px; color:white;background-color: black;">View More</a><span>
    </div>
  </div>

    </div>
      <div class="col-md-3">

      <div class="parent" onclick="">
    <div class="child bg-four">
           <span> <p style="font-size: 20px;">PERSONAL CARE</p>
      <a href="https://shop.wellingsco.com/collections/personal-care" style="border:1px solid black;padding: 10px; color:white;background-color: black;">View More</a><span>
    </div>
  </div>

    </div>
  </div>
<br>

  <div class="row">
    <div class="col-md-5">
         <div class="parent" onclick="">
    <div class="child bg-five">
           <span> <p style="font-size: 20px;">DAILY ESSENTIAL</p>
      <a href="https://shop.wellingsco.com/collections/essentials" style="border:1px solid black;padding: 10px; color:white;background-color: black;">View More</a><span>
    </div>
  </div>
    </div>

     <div class="col-md-2" style="text-align: center;padding-top: 28px;">
      <h3 style="font-size: 20px;font-weight: bold;color: black;text-align: center;">CATEGORIES<br><span style="font-size: 26px;font-weight: bolder;color: black;">CATEGORIES</span></h3>
     <p style="color: grey;text-align: center;"> Featured Categories option allows you prioritize some Item Categories to be displayed. </p>
     <br>
     <a href="#" style="border:1px solid black;padding: 8px;font-size: 13px; color: black;font-weight: bold;color: indigo;">VIEW ALL CATEGORIES</a>
    </div>

     <div class="col-md-5">
         <div class="parent" onclick="">
    <div class="child bg-six">
           <span> <p style="font-size: 20px;">PERSONAL CARE</p>
      <a href="https://shop.wellingsco.com/collections/personal-care" style="border:1px solid black;padding: 10px; color:white;background-color: black;">View More</a><span>
    </div>
  </div>
    </div>
  </div>

<br>
    <div class="row">
    <div class="col-md-3">

      <div class="parent" onclick="">
    <div class="child bg-seven">
           <span> <p style="font-size: 20px;">FOOD & DRINKS</p>
      <a href="https://shop.wellingsco.com/collections/healthy-food" style="border:1px solid black;padding: 10px; color:white;background-color: black;">View More</a><span>
    </div>
  </div>

    </div>
      <div class="col-md-3">

      <div class="parent" onclick="">
    <div class="child bg-eight">
           <span> <p style="font-size: 16px;">PERSONAL CARE</p>
      <a href="https://shop.wellingsco.com/collections/personal-care" style="border:1px solid black;padding: 10px; color:white;background-color: black;">View More</a><span>
    </div>
  </div>

    </div>
      <div class="col-md-3">

      <div class="parent" onclick="">
    <div class="child bg-nine">
           <span> <p style="font-size: 20px;">DAILY ESSENTIAL</p>
      <a href="https://shop.wellingsco.com/collections/essentials" style="border:1px solid black;padding: 10px; color:white;background-color: black;">View More</a><span>
    </div>
  </div>

    </div>
      <div class="col-md-3">

      <div class="parent" onclick="">
    <div class="child bg-ten">
           <span> <p style="font-size: 20px;">PERSONAL CARES</p>
      <a href="https://shop.wellingsco.com/collections/personal-care" style="border:1px solid black;padding: 10px; color:white;background-color: black;">View More</a><span>
    </div>
  </div>

    </div>
  </div>
</div>

<br>
<br>

 <footer  class="page-footer font-small indigo" style="margin-top: 55px;" >

  <!-- Footer Links -->
  <div id="contact" class="container-fluid text-center" style="background-color:black">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: white;">imp Links</h5>

        <ul class="list-unstyled" style="color: white;">
            <li>
            <a style="color: white;" href="#!">About US</a>
          </li>
          <li>
            <a style="color: white;" href="#!">Contact Us</a>
          </li>
          <li>
            <a style="color: white;" href="#!">Success story</a>
          </li>
          <li>
            <a style="color: white;" href="#!">Services</a>
          </li>

        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:white;">PMS</h5>

        <ul class="list-unstyled" style="color: white;">
            <li>
            <a style="color: white;" href="#!">Jobs</a>
          </li>
          <li>
            <a style="color: white;" href="#!">Term & condition</a>
          </li>
          <li>
            <a style="color: white;" href="#!">Privacy Policy</a>
          </li>
          <li>
            <a style="color: white;" href="#!">Our parteners</a>
          </li>

        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:white;">Mazor Country</h5>

        <ul class="list-unstyled" style="color: white;">
            <li>
            <a style="color: white;" href="#!">Italy</a>
          </li>
          <li>
            <a style="color: white;" href="#!">NewYork</a>
          </li>
          <li>
            <a style="color: white;" href="#!">India</a>
          </li>
          <li>
            <a style="color: white;" href="#!">Canada</a>
          </li>

        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h3 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:white;">Contact Detail</h3>




                                <h5 style="color:white;" class="title-median">PMS Pvt. Ltd.</h5>
                                <p><b style="color:white;">Email id:</b> <a style="color:white;" href="mailto:info@webenlance.com">srjr@gmail.com</a></p>
                               <!--  <p><b>Helpline Numbers </b> -->

    <b style="color:#ffc106;">(8AM to 10PM):</b><p style="color:white;">  8130890090, +91-8130190010  </p>

    <!-- <p><b>Corp Office / Postal Address</b></p> -->
    <!-- <p><b>Phone Numbers : </b>7042827160, </p>
    <p> 011-27568832, 9868387223</p> -->


       <!--  <ul class="list-unstyled">
          <li>
            <a style="color: white;" href="#!">Link 1</a>
          </li>
          <li>
            <a style="color: white;" href="#!">Link 2</a>
          </li>
          <li>
            <a style="color: white;" href="#!">Link 3</a>
          </li>
          <li>
            <a style="color: white;" href="#!">Link 4</a>
          </li>
        </ul> -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color:black;color:white;">© 2021 Copyright:
    <a href="https://mdbootstrap.com/" style="color:green;">pms.com</a>
  </div>
  <!-- Copyright -->

</footer>















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
