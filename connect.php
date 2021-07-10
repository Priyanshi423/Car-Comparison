<?php 
	$conn=mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"car comparision");
	$name=$_REQUEST['name'];
	if($name=="")
	{
			$_SESSION['error']['0']="Enter user name";
	}
	$firstname=$_REQUEST['firstname'];
	$lastname=$_REQUEST['lastname'];
	$username=$_REQUEST['username'];

	$password=$_REQUEST['password'];

	$confirmpassword=$_REQUEST['confirmpassword'];
	$phoneno=$_REQUEST['phoneno'];
	$email=$_REQUEST['email'];
	
	if(isset($_SESSION['error']))
	{
				header("location:signup.php");

	}
	else
	{
	$sql="insert into student(`firstname`,'lastname`,'username','password','confirmpassword','phoneno'`email`)values('".$firstname."','".$lastname."','".$username."','".$password."','".$confirmpassword."','".$phoneno."','".$email."')";
	if(mysqli_query($conn,$sql))
	{
		
	@header("location:signup.php");
	}
	
	}
	
	