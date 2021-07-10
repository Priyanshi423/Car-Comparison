<?php
$query = "SELECT * from addcar";

    $result =mysqli_query($db, $query);
        
        echo "<select name='mm4'>";
        while($row = mysqli_fetch_array($result)) 
        {
          echo "<option>" . $row['model'] . "</option>";
        }
        echo "</select>";?>
        <form action="compare.php" method="post">
<center> <button type="submit" class="btn" name="com">COMPARE</button></center>
</form>
<?php
session_start();

// initializing variables
$db = mysqli_connect('localhost', 'root', '', 'car comparison');

// connect to the database

if (isset($_POST['com'])) {
  $mm1 = mysqli_real_escape_string($db, $_POST['mm4']);
 
  
  echo "hyhhhhhhhhhhh";
$sql = "SELECT * FROM addcar where company='$mm1' ";

$result = mysqli_query($db, $sql);

//$rows=mysql_fetch_array($result);

if (mysqli_num_rows($result) > 0) {
  echo"2";
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
echo " price: " . $row["price"]." rank " . $row["rank"]." features: " . $row["features"]."<br>";
 
 }
} else {
 echo "0 results";
}
}?>