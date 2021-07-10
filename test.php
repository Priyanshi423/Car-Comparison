<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'car comparison');
?>
<!doctype html>
<html>
<head>
<title>car comparision</title>
<body>
<form action="test.php" method="POST" name="theForm" id="theForm">
<select form="theForm" name="selectedPage" onchange="this.form.submit()">
	
<option disabled selected>-- Select company --</option>
<?php $query = "SELECT * from addcar";

    $result =mysqli_query($db, $query);
        
       
        while($row = mysqli_fetch_array($result)) 
        {
          echo "<option>" . $row['company'] . "</option>";
        }
        ?>
</select>

</form>
<?php
//loadPage.php
if (isset($_POST['selectedPage'])){
	
$requested_page = $_POST['selectedPage'];

?>

  
   <form action="test.php" method="POST" name="theForm" id="theForm">
<select form="theForm" name="selecte" onchange="this.form.submit()">
<option disabled selected>-- Select company --</option>
	<?php 
	
$query = "SELECT * from addcar  where company= '$requested_page'";

    $result =mysqli_query($db, $query);
        
        
        while($row = mysqli_fetch_array($result)) 
        {
          echo "<option>" . $row['model'] . "</option>";
        }?>
       </select>

</form>
<?php }

if (isset($_POST['selecte'])){

$r=$_POST['selecte'];
$query= "SELECT * from addcar where model ='$r'" ;
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) > 0) {
	echo"hello";	
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
 	echo "result";
echo " price: " . $row["price"]." rank " . $row["rank"]." features: " . $row["features"]."<br>";
 
 }
} else {
 echo "0 results";
}	

//$rows=mysql_fetch_array($result);

}

?> 

<form action="test.php" method="POST" name="theForm" id="theForm">
<select form="theForm" name="selectedPage2" onchange="this.form.submit()">
	
<option disabled selected>-- Select company --</option>
<?php $query = "SELECT * from addcar";

    $result1 =mysqli_query($db, $query);
        
       
        while($row = mysqli_fetch_array($result1)) 
        {
          echo "<option>" . $row['company'] . "</option>";
        }
        ?>
</select>
</form>
<?php
//loadPage.php
if (isset($_POST['selectedPage2'])){
	
$requested_page1 = $_POST['selectedPage2'];

?>

  
   <form action="test.php" method="POST" name="theForm" id="theForm">
<select form="theForm" name="selecte2" onchange="this.form.submit()">
<option disabled selected>-- Select company --</option>
	<?php 
	
$query = "SELECT * from addcar  where company= '$requested_page1'";

    $result2 =mysqli_query($db, $query);
        
        
        while($row = mysqli_fetch_array($result2)) 
        {
          echo "<option>" . $row['model'] . "</option>";
        }?>
       </select>

</form>
<?php }

if (isset($_POST['selecte2'])){

$r1=$_POST['selecte2'];
$query= "SELECT * from addcar where model ='$r1'" ;
$result3 = mysqli_query($db, $query);
if (mysqli_num_rows($result3) > 0) {
	
 // output data of each row
 while($row = mysqli_fetch_assoc($result3)) {
 	echo"result3";
echo " price: " . $row["price"]." rank " . $row["rank"]." features: " . $row["features"]."<br>";
 
 }
} else {
 echo "0 results";
}

//$rows=mysql_fetch_array($result);

}

?>



