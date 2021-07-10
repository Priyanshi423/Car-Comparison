<?php include('signup.php') ?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>car comparision</title>
<link rel="stylesheet" href="style.css">
</script>

<style>
body{
  margin:0;
padding:0;
background:url("https://i.ebayimg.com/images/i/222781249911-0-1/s-l1000.jpg");
background-size:cover;
font-family: sans-serif;
 }
.signupbox
{
position:absolute;
top:80%;
left:50%;
transform:translate(-50%,-50%);
width:1050px;
height:820px;
padding:80px 40px;
box-sizing:border-box;
background:rgba(0,0,0,.5);
}
.user{
width:100px;
 height:100px;

overflow: hidden;
position: absolute;
top: calc(-100px/2);
left: calc(50% - 50px);
}
h2{
margin:0;
padding:0 0 20px;
color: white;
text-align:center;
}
.signupbox p
{
 margin:0;
padding:0;
font-weight:bold;
color:#fff;
}
.signupbox input[type="signup"]
{
border:none;
outline:none;
height:40px;
color: blue;
font-size:16px;
background:pink;
cursor:pointer;
}


</style>
</head>
<body text="white">
<center><h1 style="font-size:60px; color:yellow;">SELECT THE BEST CAR HERE!! </h1></center><hr><hr>
<div class ="signupbox">
<img src="https://tse2.mm.bing.net/th?id=OIP.juJkVLIeOD_8QRmL2lspmAHaHa&pid=Api&P=0&w=300&h=300" class="user">                
<h2> signup here</h2>
<form style="font-size:37px;"  action="sign.php" method="post">
	<?php include('errors.php'); ?>

<center>username:<input type="text" name="username" value="<?php echo $username; ?>"></center><br>


<center>password: <input type="password" name="password_1"></center><br>
<center>confirm password:<input type="password" name="password_2"></center><br>
<center>phone no.:<input type="number" placeholder="enter your phone no." name="phoneno" required></center><br>
<center>email:<input type="email" name="email" value="<?php echo $email; ?>"></center><br>

 
<center><button type="submit" class="btn" name="reg_user">Register</button></center>
<center><p>
  		Already a member? <a href="pblloginuser.php">Sign in</a>
  	</p></center>

</form>


</div> 


</body>
</html>