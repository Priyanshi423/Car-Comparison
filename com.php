<?php
session_start();

// initializing variables
$db = mysqli_connect('localhost', 'root', '', 'car comparison');

// connect to the database

if (isset($_POST['com'])) {
	$mm1 = $_POST['mm1'];
 $mm2 =  $_POST['mm2'];
  $mm3 = $_POST['mm3'];
  $mm4 =  $_POST['mm4'];
  
	echo "hyhhhhhhhhhhh";
$sql = "SELECT * FROM addcar where company='$mm1' and model='$mm2";


$sql = "SELECT * FROM addcar where company='$mm3' and model='$mm4";

$result = mysqli_query($db, $sql);

//$rows=mysql_fetch_array($result);

if (mysqli_num_rows($result) > 0) {
 // output data of each row
	echo "3";
 while($row = mysqli_fetch_assoc($result)) {
 echo " price: " . $row["price"]." rank " . $row["rank"]." features: " . $row["features"]."<br>";
 }
} else {
 echo "0 results";
}

}?>