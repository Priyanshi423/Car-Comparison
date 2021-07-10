<?php
session_start();

// initializing variables


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'car comparison');
if (isset($_POST['submit'])) {
$sql = "SELECT feedback FROM feed";
$result = mysqli_query($db, $sql);

//$rows=mysql_fetch_array($result);

if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
 echo " - feedback: " . $row["feedback"]."<br>";
 }
} else {
 echo "0 results";
}
}
// REGISTER USER

	
  // receive all input values from the form
	
	
 // $feedb = mysqli_real_escape_string($db, $_POST['msg']);
 
  	
  
  ?>