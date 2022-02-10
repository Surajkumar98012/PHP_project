  <?php
    include 'db_conn.php';


    $a="SELECT COUNT(*) AS count1 FROM cart WHERE MONTH(date)=01";
    $query1=mysqli_query($conn,$a);
   foreach ($query1 as $res1) {
      $jan=$res1['count1'];
    }

        $b="SELECT COUNT(*) AS count2 FROM cart WHERE MONTH(date)=02";
    $query2=mysqli_query($conn,$b);
   foreach ($query2 as $res2) {
      $feb=$res2['count2'];
    }

        $c="SELECT COUNT(*) AS count3 FROM cart WHERE MONTH(date)=03";
    $query3=mysqli_query($conn,$c);
   foreach ($query3 as $res3) {
      $mar=$res3['count3'];
    }

        $d="SELECT COUNT(*) AS count4 FROM cart WHERE MONTH(date)=04";
    $query4=mysqli_query($conn,$d);
   foreach ($query4 as $res4) {
      $apr=$res4['count4'];
    }

        $e="SELECT COUNT(*) AS count5 FROM cart WHERE MONTH(date)=05";
    $query5=mysqli_query($conn,$e);
   foreach ($query5 as $res5) {
      $may=$res5['count5'];
    }

        $f="SELECT COUNT(*) AS count6 FROM cart WHERE MONTH(date)=06";
    $query6=mysqli_query($conn,$f);
   foreach ($query6 as $res6) {
      $jun=$res6['count6'];
    }

        $g="SELECT COUNT(*) AS count7 FROM cart WHERE MONTH(date)=07";
    $query7=mysqli_query($conn,$g);
   foreach ($query7 as $res7) {
      $jul=$res7['count7'];
    }

        $h="SELECT COUNT(*) AS count8 FROM cart WHERE MONTH(date)=08";
    $query8=mysqli_query($conn,$h);
   foreach ($query8 as $res8) {
      $aug=$res8['count8'];
    }

        $i="SELECT COUNT(*) AS count9 FROM cart WHERE MONTH(date)=09";
    $query9=mysqli_query($conn,$i);
   foreach ($query9 as $res9) {
      $sep=$res9['count9'];
    }

        $j="SELECT COUNT(*) AS count10 FROM cart WHERE MONTH(date)=10";
    $query10=mysqli_query($conn,$j);
   foreach ($query10 as $res10) {
      $oct=$res10['count10'];
    }

        $k="SELECT COUNT(*) AS count11 FROM cart WHERE MONTH(date)=11";
    $query11=mysqli_query($conn,$k);
   foreach ($query11 as $res11) {
      $nov=$res11['count11'];
    }

        $l="SELECT COUNT(*) AS count12 FROM cart WHERE MONTH(date)=12";
    $query12=mysqli_query($conn,$l);
   foreach ($query12 as $res12) {
      $dec=$res12['count12'];
    }





   ?>










 <?php
           include 'db_conn.php';
           $q="SELECT COUNT(*) AS count FROM cart";
            $query=mysqli_query($conn,$q);
            foreach ($query as $res) {
              $output=$res['count'];
            }

             $r="SELECT COUNT(*) AS counts FROM medicine";
            $queries=mysqli_query($conn,$r);
            foreach ($queries as $res1) {
              $outputs=$res1['counts'];
            }
 ?>


<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {



?>
<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

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
  padding-left: 16px;
  padding-top: 2px;
  padding-bottom: 10px;

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


.boxes{
  box-shadow: 0 15px 25px rgba(0,0,0,0.5);
  padding: 40px;
  text-align: center;
  background: white;
  margin: 45px;
}
</style>
</head>
<body>

   <!--  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Total Customers',
            subtitle: 'No. of customer per day',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script> -->



  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <i class="fa fa-user-circle fa-big" aria-hidden="false"></i>
  <h2 style="text-align: center;color: yellow;margin-top: 4px;font-size: 1.3em;"><?php echo $_SESSION['name'];?></h2>
   <a class="dropdown-btn" href="home2.php"><i class="fa fa-fw fa-tachometer" aria-hidden="true"></i>  &nbsp;Dashboard</a>

      <a class="dropdown-btn" href="pharmacist/inventory.php"><i class="fa fa-fw fa-th-large" aria-hidden="true"></i> &nbsp;Inventory</a>

     <a class="dropdown-btn" href="pharmacist/search.php" ><i class="fa fa-fw fa-search"></i>&nbsp;&nbsp;Search</a>


 <!--  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a> -->
   <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-file-text-o"></i>&nbsp;&nbsp;Invoice

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
    <a class="dropdown-link" href="pharmacist/invoice_search.php">Invoice search</a>
    <!-- <a class="dropdown-link" href="#">New Invoice</a> -->
  <!--   <a class="dropdown-link" href="#">Manage Invoice</a> -->
   </div>







     <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-medkit"></i>&nbsp;&nbsp;Medicine

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
<!--     <a href="#">Medicine Type</a> -->
    <a href="pharmacist/add_medicine.php">Add Medicine</a>
    <a href="pharmacist/manage_medicine.php">Manage Medicine</a>
   </div>

     <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-shopping-cart"></i>&nbsp;&nbsp;Cart

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
    <a href="pharmacist/cart.php">Add To Cart</a>
    <a href="pharmacist/manage_cart.php">Manage your Cart</a>
   </div>




     <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-bar-chart"></i>&nbsp;&nbsp;Stock

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
       <a href="pharmacist/stock_report.php">Stock Report</a>
   </div>



     <a class="dropdown-btn" href="#" ><i class="fa fa-fw fa-address-book"></i>&nbsp;&nbsp;Report

    <i class="fa fa-caret-down"></i>
   </a>

   <div class="dropdown-container">
    <a href="pharmacist/sales_report.php">Sales Report</a>

   </div>


   <a id="logout" style="margin-top:63px;" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  &nbsp;Logout</a>






   </div>


<div id="main">
  <span style="font-size:31px;cursor:pointer;color: indigo;" onclick="openNav()">&#9776;&nbsp;&nbsp;Dashboard <p style="float: right;color: black;font-size:0.7em;margin-top: 8px;"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Home</p></span>





    <div class="counter-up">
    <div class="content">
      <div class="box">
        <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>

        <div class="counter"><?php echo $output;?></div>
        <div style="font-size:1.29em;" class="text">Total Customer</div>

      </div>
      <div class="box">
        <div class="icon"><i class="fa fa-fw fa-medkit"></i></div>
        <div class="counter"><?php echo $outputs;?></div>
        <div class="text">Total Medicine</div>

      </div>
      <div class="box">
        <div class="icon"><i class="fa fa-fw fa-bar-chart"></i></div>
        <div class="counter"><?php echo $output;?></div>
        <div class="text">Total sales</div>

      </div>
      <div class="box">
        <div class="icon"><i class="fa fa-fw fa-file-text-o"></i></div>
        <div class="counter"><?php echo $output;?></div>
        <div class="text">Total invoice</div>

      </div>
    </div>
  </div>

   <script>
    $(".counter").counterUp({delay:10,time:1000});
  </script>



<div style="background:rgba(215,215,215,0.9);">


<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 boxes" >
       <a  href="./pharmacist/add_medicine.php">
    <i style="font-size:4em;" class="fa fa-medkit color"></i>
     <br>
     <h4 style="color: black;font-weight: bolder;margin-top: 21px;">Add Medicine</h4>
</a>
    </div>


      <div class="col-md-3 boxes" >
         <a  href="./pharmacist/cart.php">
     <i style="font-size:4em;" class="fa fa-fw fa-shopping-cart  color"></i>
     <h4 style="color: black;font-weight: bolder;margin-top: 21px">Add To Cart</h4>
    </a>
    </div>
      <div class="col-md-3 boxes">
         <a  href="./pharmacist/search.php">
     <i style="font-size:4em;"  class="fa fa-fw fa-search color"></i>
     <h4 style="color: black;font-weight: bolder;margin-top: 21px">Search</h4>
</a>
    </div>
  </div>

   <div class="row" style="margin-top: -45px;">
    <div class="col-md-3 boxes" >
       <a  href="./pharmacist/sales_report.php">
    <i style="font-size:4em;" class="fa fa-file-text-o color"></i>
     <br>
     <h4 style="color:  black;font-weight: bolder;margin-top: 21px">Sales report</h4>
      </a>
    </div>
      <div class="col-md-3 boxes" >
      <a  href="./pharmacist/stock_report.php">
     <i  style="font-size:4em;"  class="fa  fa-file color"></i>
     <h4 style="color: black;font-weight: bolder;margin-top: 21px">Stock report</h4>
    </a>
    </div>
      <div class="col-md-3 boxes">
         <a  href="./pharmacist/invoice_search.php">
    <i  style="font-size:4em;" class="fa fa-address-book color"></i>
     <h4 style="color:  black;font-weight: bolder;margin-top: 21px">Invoice</h4>
     </a>
    </div>
  </div>
</div>
</div>
<br>
<br>

<!--  <div id="columnchart_material" style="width: 940px; height: 400px;margin-left: 120px;"></div>
</div> -->

<canvas id="myChart" style="height: auto;width:600px;"></canvas>
<?php
   echo "<input type='hidden' id='jan' value='$jan'>";
   echo "<input type='hidden' id='feb' value='$feb'>";
   echo "<input type='hidden' id='mar' value='$mar'>";
   echo "<input type='hidden' id='apr' value='$apr'>";
   echo "<input type='hidden' id='may' value='$may'>";
   echo "<input type='hidden' id='jun' value='$jun'>";
   echo "<input type='hidden' id='jul' value='$jul'>";
   echo "<input type='hidden' id='aug' value='$aug'>";
   echo "<input type='hidden' id='sep' value='$sep'>";
   echo "<input type='hidden' id='oct' value='$oct'>";
   echo "<input type='hidden' id='nov' value='$nov'>";
   echo "<input type='hidden' id='dec' value='$dec'>";

  ?>


  <!--   chart js files -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>


<script>

 var jan=document.getElementById("jan").value;
 var feb=document.getElementById("feb").value;
 var mar=document.getElementById("mar").value;
 var apr=document.getElementById("apr").value;
 var may=document.getElementById("may").value;

var jun=document.getElementById("jun").value;

var jul=document.getElementById("jul").value;

var aug=document.getElementById("aug").value;

var sep=document.getElementById("sep").value;

var oct=document.getElementById("oct").value;

var nov=document.getElementById("nov").value;

var dec=document.getElementById("dec").value;



window.onload=function(){
    var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var config = {
            type: 'bar',
            data: {
        borderColor : "#fffff",
                datasets: [{
                    data: [
                        jan,
                        feb,
                        mar,
                        apr,
                        may,
                        jun,
                        jul,
                        aug,
                        sep,
                        oct,
                        nov,
                        dec
                    ],
                    borderColor : "#fff",
                    borderWidth : "3",
                    hoverBorderColor : "#000",

                    label: 'Monthly Sales Report',

                    backgroundColor: [
                        "#0190ff",
                        "#56d798",
                        "#ff8397",
                        "#6970d5",
                        "#f312cb",
                        "#ff0060",
                        "#ffe400",
                        "#942496",
                        "#27C2D2",
                        "#4DB444",
                        "#CFCF46",
                        "#E7A62D"

                    ],
                      hoverBackgroundColor: [
                        "#f38b4a",
                        "#56d798",
                        "#ff8397",
                        "#6970d5",
                        "#ffe400"
                    ]
                }],

                labels: [
                    'Jan',
                    'Feb',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'Sept',
                    'oct',
                    'Nov',
                    'Dec'
                ]
            },

            options: {
                responsive: true

            }
        };
        var ctx = document.getElementById('myChart').getContext('2d');
        window.myPie = new Chart(ctx, config);
};



</script>







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
