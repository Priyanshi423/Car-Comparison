<?php
session_start();

// initializing variables

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'car comparison');

// REGISTER USER
if (isset($_POST['sendi'])) {
  // receive all input values from the form
  $comp = mysqli_real_escape_string($db, $_POST['com']);
  $model = mysqli_real_escape_string($db, $_POST['mod']);
  $price = mysqli_real_escape_string($db, $_POST['pri']);
  $rank = mysqli_real_escape_string($db, $_POST['ran']);
  $features = mysqli_real_escape_string($db, $_POST['fea']);
  $eng = mysqli_real_escape_string($db, $_POST['engine']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
 
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  

  // Finally, register user if there are no errors in the form
  //encrypt the password before saving in the database

  	$query = "INSERT INTO addcar (company, model, rank,price,enginecapacity,features) 
  			  VALUES('$comp', '$model', '$rank', '$price', '$eng', '$features')";
  	mysqli_query($db, $query);
  	
  	$_SESSION['success'] = "added successfully";
  	
}?>