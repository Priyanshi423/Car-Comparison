<?php
session_start();

// initializing variables
$username = "";
//echo"hello";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'car comparison');
//echo "hello";
if (isset($_POST['login_user'])) {
//	echo "hyyyyyyyyyyyyyy";
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	echo"priyanshi";
    //$password = md5($password);
    $query = "SELECT username,password FROM admin WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
    	echo"logged in";
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: addcar.php');
    }else {
    	echo "no";
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>