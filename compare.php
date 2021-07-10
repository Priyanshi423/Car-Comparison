<?php include('com.php') ?>

<!doctype html>
<html>
<head>
<title>car comparision</title>


<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" charset="UTF-8"></script></head>
<style>
#first{
float:left;
width:356px;
margin-lest:100000px;
padding:0px;
}
#second{
float:left;
width:356px;
margin-lest:200px;
padding:0px;
}
.search{
width:50%;
font-size:20px;
}

body{
background:url("https://tse4.mm.bing.net/th?id=OIP.N_jWjqwBsPB5h8t4qkgaGAHaEK&pid=Api&P=0&w=309&h=175");}
border{
bordercolor=black;
borderwidth=25px;}
.submit{
width:15%;
padding:10px;
font-size:20px;
background-color:#333399;
} 
.container {
  position: relative;
  text-align: center;
  color: white;
}

.bottom-left {
  position: absolute;
  bottom: 10px;
  left: 357px;
}

.top-left {
  position: absolute;
  top: 10px;
  left: 200px;
}

.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.btn-group button {
  background-color: grey; /* Green background */
  border: black; /* Green border */
  color: white; /* White text */
  padding: 20px 225px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}




</style>


<body  text="black">


<div class="container">
  <img src="https://d3lp4xedbqa8a5.cloudfront.net/imagegen/max/ccr/1023/-/s3/digital-cougar-assets/whichcar/2018/12/20/-1/mazda-3-driving.jpg-ww.jpg" width="1300" height="600">
 
  <div class="top-left"><h1 style="color:white; font-size:200%;"><b>CAR <br>COMP@RISION</b></h1> </div>
<div class="bottom-left"><h4 style="color:blue;font-size:200%;" ><i>COMPARE</i></h4></div>

  
  
</div>
<hr>
<div class="btn-group">
  <button style="font-size:100%;"><a href="compare.php
"><b>Compare</b></a></button>
  <button style="font-size:100%;"><a href="feedbackform.php
"><b>Feedback</b></button></a>

  <button style="font-size:100%;"><a href="pbl.php?logout='1'"
"><b>Logout</b></button></a>
</div>

</head>
<body text="white">
<center><h1 style="font-size:60px; color:black;">COMPARE AND CHOOSE THE BEST!!</h1></center><hr>
<div class ="comparebox" id="first">



<p> FIRST COMPANY</p><form action="compare.php" method="POST" name="theForm" id="theForm">
<select form="theForm" name="selectedPage" onchange="this.form.submit()">
	
<option disabled selected>-- Select company --</option>
<?php $query = "SELECT * from addcar";

    $result =mysqli_query($db, $query);
        
       
        while($row = mysqli_fetch_array($result)) 
        {
          echo "<option>" . $row['company'] . "</option>";
        }
        ?>
</select>

</form>
<?php
//loadPage.php
if (isset($_POST['selectedPage'])){
	
$requested_page = $_POST['selectedPage'];

?>

  
 <p>FIRST COMPANY MODEL</p>  <form action="company.php" method="POST" name="theForm" id="theForm">
<select form="theForm" name="selecte" onchange="this.form.submit()">
<option disabled selected>-- Select model --</option>
	<?php 
	
$query = "SELECT * from addcar  where company= '$requested_page'";

    $result =mysqli_query($db, $query);
        
        
        while($row = mysqli_fetch_array($result)) 
        {
          echo "<option>" . $row['model'] . "</option>";
        }?>
       </select>

</form>
<?php }

if (isset($_POST['selecte'])){

$r=$_POST['selecte'];
$query= "SELECT * from addcar where model ='$r'" ;
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) > 0) {
	
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
 	
echo " price: " . $row["price"]."<br>"." rank " . $row["rank"]."<br>"." features: " . $row["features"]."<br>";
 
 }
} else {
 echo "0 results";
}

//$rows=mysql_fetch_array($result);

}

?> 

<p> SECOND COMPANY</p><form action="compare.php" method="POST" name="theForm" id="theform">
<select form="theform" name="selectedPage2" onchange="this.form.submit()">
	
<option disabled selected>-- Select company --</option>
<?php $query = "SELECT * from addcar";

    $result1 =mysqli_query($db, $query);
        
       
        while($row = mysqli_fetch_array($result1)) 
        {
          echo "<option>" . $row['company'] . "</option>";
        }
        ?>
</select>
</form>
<?php
//loadPage.php
if (isset($_POST['selectedPage2'])){
	
$requested_page1 = $_POST['selectedPage2'];

?>

  
 <p> SECOND COMPANY MODEL</p>  <form action="compare.php" method="POST" name="theform" id="theForm">
<select form="theform" name="selecte2" onchange="this.form.submit()">
<option disabled selected>-- Select model --</option>
	<?php 
	
$query = "SELECT * from addcar  where company= '$requested_page1'";

    $result2 =mysqli_query($db, $query);
        
        
        while($row = mysqli_fetch_array($result2)) 
        {
          echo "<option>" . $row['model'] . "</option>";
        }?>
       </select>

</form>
<?php }

if (isset($_POST['selecte2'])){

$r1=$_POST['selecte2'];
$query= "SELECT * from addcar where model ='$r1'" ;
$result3 = mysqli_query($db, $query);
if (mysqli_num_rows($result3) > 0) {
	
 // output data of each row
 while($row = mysqli_fetch_assoc($result3)) {
 	
echo " price: " . $row["price"]."<br>"." rank " . $row["rank"]."<br>"." features: " . $row["features"]."<br>";
 
 }
} else {
 echo "0 results";
}
if (mysqli_num_rows($result) > 0) {
	
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
 	echo"result";
echo " price: " . $row["price"]."<br>"." rank " . $row["rank"]."<br>"." features: " . $row["features"]."<br>";
 
 }
} else {
 echo "0 results";
}

//$rows=mysql_fetch_array($result);

}





?>

