<?php
session_start();

// initializing variables


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'car comparison');

// REGISTER USER
if (isset($_POST['submit'])) {
	$feedb = mysqli_real_escape_string($db, $_POST['msg']);
  // receive all input values from the form
	 $query = "INSERT INTO feed (feedback) 
  			  VALUES('$feedb')";
	if (mysqli_query($db, $query)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $query . "<br>" . mysqli_error($db);
}
	
 // $feedb = mysqli_real_escape_string($db, $_POST['msg']);
 
  	
  
  }?>