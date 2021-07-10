<?php include('feed.php') ?>
<!doctype html>
<html>
<head>
<title>car comparision</title>


</head>
<style>
body{
background:url("https://tse4.mm.bing.net/th?id=OIP.N_jWjqwBsPB5h8t4qkgaGAHaEK&pid=Api&P=0&w=309&h=175");}
border{
bordercolor=black;
borderwidth=25px;}
.container {
  position: relative;
  text-align: center;
  color: white;
}

.bottom-left {
  position: absolute;
  bottom: 20px;
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
  padding: 20px 230px;/* Some padding */
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
  <img src="http://www.team-bhp.com/forum/attachments/indian-car-scene/1517771-chevrolet-shelves-spin-mpv-india-will-launch-beat-activ-new-exciting-chevrolet-cars-hit-indian-market-3.jpg  width="1000" height="500">
 
  <div class="top-left"><h1 style="color:white; font-size:200%;"><b>CAR <br>COMP@RISION</b></h1> </div>
<div class="bottom-left"><h4 style="color:white;font-size:200%;" ><i>GET THE <br>BEST!!<br></i></h4></div>

  
  
</div>
<hr>
<div class="btn-group">
  <button style="font-size:100%;"><a href ="compare.php"><b>compare</b></a></button>
  

 
  <button style="font-size:100%;"><a href="feedbackform.php"><b>feedback</b></a></button>
  <button style="font-size:100%;"><a href="pbl.php"><b>logout</b></a></button>
</div>
<center> <h1 style="color:blue;"> your feedback is VALUABLE FOR US!!<h1></center>
<form style= "font-size:200%;" action="feedbackform.php" method="post" >
<center> <label for="feedbackhere">your feedback here</label></center>
<center><textarea name="msg" id="msg-box" > </textarea></center>
<center> <input type="submit" name="submit" value="SEND"></center>
</form>
</div>
</body>
</html>