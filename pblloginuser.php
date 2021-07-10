<?php include('signup.php') ?>

<!doctype html>
<html>
<head>
<title>car comparision</title>
<style>
body{

  background:url("https://tse4.mm.bing.net/th?id=OIP.N_jWjqwBsPB5h8t4qkgaGAHaEK&pid=Api&P=0&w=309&h=175");

}
.container {
  position: relative;
  text-align: center;
  color: white;
}

.bottom-left {
  position: absolute;
  bottom: 80px;
  left: 187px;
}

.top-left {
  position: absolute;
  top: 0px;
  left: 157px;
}

.top-right {
  position: absolute;
  top: 80px;
  right: 77px;
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


</style>
</head>
<body text="black">
<center><h1 style="font-size:60px;">SELECT THE BEST CAR HERE!! </h1></center><hr><hr>
<div class="container">
  <img src="https://4.bp.blogspot.com/-HF1oIbIMUtk/V5hzieo4WDI/AAAAAAAAEf0/P-oMdlEd5HcxfjEdvYQuMLQz0WOQVJpSACLcB/s1600/Blue-Honda-City-2015-Desktop-Wallpaper-HD-2-download-yoyo.jpg" width="1300" height="800">
 
  <div class="top-left"><h1 style="color:blue; font-size:300%;"><b>CAR <br>COMP@RISION</b></h1> </div>
<div class="bottom-left"><h4 style="color:white;font-size:200%;" ><i>GET THE <br>BEST<br></i></h4></div>

  
  
</div>
<hr>
<br>
<br>
<form style="font-size:37px;"     method="post",action=pblloginuser.php>
  <?php include('errors.php'); ?>
<center>username: <input type="text" name="username" ></center><br>
<center>password: <input type="password" name="password"><BR>

<center><button type="submit" class="btn" name="login_user">Login</button></center>
<a href="sign.php"> <button type="signup" value="signup"> SIGN UP</a></button>
</center>

</form>

</body>