<?php include('viewf.php') ?>
<!doctype html>
<html>
<head>
<title>car comparision</title>


<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" charset="UTF-8"></script></head>
<style>
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
  bottom: 20px;
  left: 57px;
}

.top-left {
  position: absolute;
  top: 10px;
  left: 150px;
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
  padding: 20px 152px; /* Some padding */
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
#first{
float:left;
width:356px;
margin-left:3px;
padding:0px;
}
#second{
float:right;
width:600px;
right-margin:100px;
padding:10px;
}




</style>


<body  text="black">


<div class="container">
  <img src="https://d3lp4xedbqa8a5.cloudfront.net/imagegen/max/ccr/1023/-/s3/digital-cougar-assets/whichcar/2018/12/20/-1/mazda-3-driving.jpg-ww.jpg" width="1500" height="600">
 
  <div class="top-left"><h1 style="color:white; font-size:300%;"><b>CAR <br>COMP@RISION</b></h1> </div>
<div class="bottom-left"><h4 style="color:blue;font-size:200%;" ><i>GET THE <br>BEST!!<br></i></h4></div>

  
  
</div>
<hr>
<div class="btn-group">
  <button style="font-size:100%;"><a href="addcar.php
"><b>Add Car</b></a></button>
  <button style="font-size:100%;"><b><a href="edit.php">Edit Features</b></a></button>

  
  <button style="font-size:100%;"><a href="viewfeedback.php"><b>View Feedback</b></a></button>
  <button style="font-size:100%;"><a href="pbl.php"
"><b>Logout</b></a></button>
</div>
<form style= "font-size:200%;" action="viewf.php" method="post" >
<center> <input type="submit" name="submit" value="GET THE FEEDBACK"></center></form>

</head>
